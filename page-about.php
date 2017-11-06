<?php
get_header();
echoHeroImageOpeningDiv();
?>
    <h2 class="hero__title">About</h2>
    <p class="hero__text"><?php echoFirstParagraph() ?></p>
</div>

<div class="post-page__content post-page__content--about">
    <?php echoPageContent(true) ?>

    <!-- AddToAny BEGIN -->
    <div class="post-page__sharing">
        <p class="post-page__sharing--text">Like our manifesto?</p>
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

<?php get_footer(); ?>
