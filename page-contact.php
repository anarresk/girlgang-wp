<?php
get_header();
echoHeroImageOpeningDiv();
?>
    <h2 class="hero__title">Contact</h2>
    <p class="hero__text"><?php echoFirstParagraph() ?></p>
</div>

<div class="post-page__content post-page__content--about">
    <?php echoPageContent(true) ?>

    <div class="events">
        <div class="events__top">
            <h2 class="events__title">Check out our Facebook pages</h2>
            <!-- <a class="events__link" href="./events.html"><span>All Events</span></a> -->
        </div>
        <div class="events__list">
            <a class="event-item event-item--leeds" href="https://www.facebook.com/girlgangleeds/" style="background-image: url('https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/15871438_1204160703006197_796223128704443180_n.png?oh=5fef657efdfcdcfd6b5dd3bf17903790&oe=5AA64349');"><div class="event-item__stripe-container"><div class="event-item__stripe">leeds</div></div><div class="event-item__details"><h3 class="event-item__title">Girl Gang Leeds</h3></div></a>
            <a class="event-item event-item--sheffield" href="https://www.facebook.com/girlgangsheffield/" style="background-image: url('https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/10476014_1630733683816170_7983702045461274314_n.png?oh=f69c1a3c69a2183bda4033de6cf98169&oe=5A9E0F57');"><div class="event-item__stripe-container"><div class="event-item__stripe">sheffield</div></div><div class="event-item__details"><h3 class="event-item__title">Girl Gang Sheffield</h3></div></a>
            <a class="event-item event-item--manchester" href="https://www.facebook.com/GirlGangMcr/" style="background-image: url('https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/12509092_1261283313922921_7973653767152656737_n.png?oh=9f5ffe84804de633a4dfe8654c7a022f&oe=5AAFA9F6');"><div class="event-item__stripe-container"><div class="event-item__stripe">manchester</div></div><div class="event-item__details"><h3 class="event-item__title">Girl Gang Manchester</h3></div></a>
        </div>
    </div>

    <!-- AddToAny BEGIN -->
    <div class="post-page__sharing">
        <p class="post-page__sharing--text">Want to share?</p>
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
