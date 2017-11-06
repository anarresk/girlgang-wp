<?php
$image = get_the_post_thumbnail_url($post_id);
if ($image == '') {
    $image = catch_that_image();
}
if ($image != '') {
?>
    <div class="hero hero--image hero--post-page" style="background-image: url('<?php echo $image ?>')">
        <h2 class="hero__title"><?php the_title(); ?></h2>
        <div class="hero__text">
            <span class="post-page__author"><?php the_author(); ?></span>
            <span class="post-page__date">- <?php the_date(); ?></span>
        </div>
    </div>
    <div class="post-page">
<?php } else { ?>
    <div class="post-page">
        <h2 class="post-page__title"><?php the_title(); ?></h2>
        <div class="post-page__author-date">
            <span class="post-page__author"><?php the_author(); ?></span>
            <span class="post-page__date">- <?php the_date(); ?></span>
        </div>
<?php } ?>

    <div class="post-page__content">
        <?php the_content(); ?>

        <!-- AddToAny BEGIN -->
        <div class="post-page__sharing">
            <p class="post-page__sharing--text">Enjoyed this post?</p>
            <div class="post-page__sharing--a2a a2a_kit a2a_kit_size_32 a2a_default_style">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_tumblr"></a>
                <a class="a2a_button_wordpress"></a>
                <a class="a2a_button_pinterest"></a>
            </div>
        </div>
        <!-- AddToAny END -->
    </div>

    <a class="posts__link" href="<?php echo get_bloginfo('wpurl');?>/blog/"><span>All Posts</span></a>
</div>
