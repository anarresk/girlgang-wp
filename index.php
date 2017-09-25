<?php get_header(); ?>

<div class="posts">
    <h2 class="blog__title">Things we've written</h2>

    <div class="posts__list--long">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('post-list', get_post_format());
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
