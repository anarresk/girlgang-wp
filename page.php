<?php
get_header();

echoHeroImageOpeningDiv();
?>
    <h2 class="hero__title">What is a Girl Gang?</h2>
    <p class="hero__text"><?php echoPageContent(false) ?></p>
</div>

<div class="events">
    <div class="events__top">
        <h2 class="events__title">Check out our upcoming Events</h2>
        <!-- <a class="events__link" href="./events.html"><span>All Events</span></a> -->
    </div>
    <div class="events__list">
        <h3 class="events__list--loading">Loading events</h3>
    </div>
</div>

<div class="posts">
    <div class="posts__top">
        <h2 class="posts__title">Things we've written</h2>
        <a class="posts__link" href="<?php echo get_bloginfo('wpurl');?>/blog/"><span>All Posts</span></a>
    </div>

    <div class="posts__list">
        <?php // Display blog posts on any page @ https://m0n.co/l
        $wp_query = new WP_Query();
        $wp_query->query('posts_per_page=5');
        while ($wp_query->have_posts()) :
            $wp_query->the_post();
            get_template_part('post-list-short', get_post_format());
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/events.js"></script>
<?php get_footer(); ?>
