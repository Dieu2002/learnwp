<!DOCTYPE html>
<![if|E 8]>
<html <?php language_attributes(); ?> class="ie8">
<![endif]>
<![if!|E]>
<html <?php language_attributes(); ?>>
<![endif]>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Sofia&effect=fire|neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- <div id="container"> -->
    <header id="header">
        <div class="nav">
            <div class="menu-left child">
                <?php dieu_logo() ?>
            </div>
            <div class="menu-mid child">
                <?php dieu_menu('primary-menu'); ?>
            </div>
            <div class="menu-right child">
                <div class="my__account">

                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                        " title="<?php _e('',''); ?>">
                        <?php _e('',''); ?> <i class="fa fa-user-o" aria-hidden="true"> </i></a>
                </div>
                <div class="my__cart">
                    <a href="/cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true">
                            <?php echo WC()->cart->get_cart_contents_count(); ?></i>
                    </a>
                </div>
                <div class="saerch">
                    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search …" value="" name="s"
                                title="Search for:" />
                        </label>
                        <button type="submit" class="search-submit"></button>
                    </form>
                </div>
            </div>
        </div>
        <label for="nav-moblie-input" class="nav__bars-btn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>
        <input type="checkbox" class="nav__input" id="nav-moblie-input">
        <label for="nav-moblie-input" class="nav__overlay">
        </label>
        <label for="nav-moblie-input" class="nav__mobile-close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </label>
        <div class="nav__mobile">

            <div class="menu__mobile-left">
                <?php dieu_logo() ?>

            </div>
            <div class="menu__mobile-mid">
                <?php dieu_menu('primary-menu'); ?>

            </div>
            <div class="menu__mobile-right">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s"
                            title="Search for:" />
                    </label>
                </form>
                <div class="my__account">

                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                   " title="<?php _e('',''); ?>">
                        <?php _e('',''); ?> <i class="fa fa-user-o" aria-hidden="true"> </i></a>

                </div>
            </div>
        </div>
    </header>
    <?php wp_body_open(); ?>