<a class="post-link post-link--long post-link--manchester" href="<?php the_permalink(); ?>">
    <div class="post-item">
        <h3 class="post-item__title"><?php the_title(); ?></h3>
        <p class="post-item__author"><?php the_author(); ?></p>
        <p class="post-item__date"><?php the_date(); ?></p>
        <?php
        $image = get_the_post_thumbnail_url($post_id);
        if ($image == '') {
            $image = catch_that_image();
        }
        echo '<div class="post-item__image" style="background-image: url(\'' . $image . '\')"></div>';
        ?>
        <p class="post-item__content"><?php the_excerpt(); ?></p>
    </div>
    <div class="post-link__bottom">
        <span class="post-link__button" href="<?php the_permalink(); ?>"><span>Read More</span></span>
    </div>
</a>
