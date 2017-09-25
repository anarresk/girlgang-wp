<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Pacifico" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
<div class="body-wrapper">
    <div class="header">
        <div class="wrapper">
            <h1 class="header__title">
                <a class="header__link" href="<?php echo get_bloginfo('wpurl');?>"><?php echo get_bloginfo('name'); ?></a>
            </h1>

            <div class="header__stripe-container">
                <div class="header__stripes">
                    <div class="header__stripe header__stripe--manchester">
                        Manchester
                    </div>
                    <div class="header__stripe header__stripe--sheffield">
                        Sheffield
                    </div>
                    <div class="header__stripe header__stripe--leeds">
                        Leeds
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nav">
        <div class="wrapper">
            <ul class="nav__menu">
                <?php wp_list_pages('&title_li='); ?>
                <li class="page_item non-wp-page-item"><a href="https://www.etsy.com/uk/shop/GirlGangLeeds">Shop</a></li>
            </ul>
        </div>
    </div>

    <div class="content wrapper">
