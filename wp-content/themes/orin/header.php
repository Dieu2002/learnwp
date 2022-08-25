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
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="container">
        <header id="header">
            <div class="nav">
                <div class="menu-left">
                    <p>Bee store</p>
                </div>
                <div class="menu-mid">
                    <?php dieu_menu('primary-menu'); ?>
                </div>
                <div class="menu-right">
                    <a href="#">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                    
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
                    <p>Bee store</p>
                </div>
                <div class="menu__mobile-mid">
                    <?php dieu_menu('primary-menu'); ?>
                </div>
                <div class="menu__mobile-right">
                    <a href="#">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-slider">
            <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
        </div>
        