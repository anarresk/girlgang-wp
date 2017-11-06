<?php
get_header();
echoHeroImageOpeningDiv();
?>
    <h2 class="hero__title">Blog</h2>
    <p class="hero__text">Check out some of the articles by our talented writers across the cities</p>
</div>


<div class="posts">
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
