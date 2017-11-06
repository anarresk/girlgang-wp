<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    return $matches[1][0];
}

function getPageContent($omitFirstParagraph = false)
{
    global $post_id;
    $post = get_post($post_id);
    $content = apply_filters('the_content', $post->post_content);
    if ($omitFirstParagraph) {
        $content = substr( $content, strpos( $content, '</p>' ) + 4, strlen($content));
    }
    return $content;
}

function echoPageContent($omitFirstParagraph = false) {
    echo getPageContent($omitFirstParagraph);
}

function echoHeroImageOpeningDiv()
{
    global $post_id;
    $image = '';
    if (is_home() && get_option('page_for_posts')) {
        $image = get_the_post_thumbnail_url(get_option('page_for_posts'));
    } else {
        $image = get_the_post_thumbnail_url($post_id);
    }
    if ($image != '') {
        echo '<div class="hero hero--image" style="background-image: url(\'' . $image . '\');">';
    } else {
        echo '<div class="hero hero--image">';
    }
}

function echoFirstParagraph(){
    global $post_id;
    $post = get_post($post_id);
    $content = apply_filters('the_content', $post->post_content);
	$content = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
	echo $content;
}
