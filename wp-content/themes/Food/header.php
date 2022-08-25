<!DOCTYPE html>
 <![if|E 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]>
<![if!|E]> <html <?php language_attributes(); ?>> <![endif]>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="profile" href="http://gmgp.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >  
        <div id="container">
	      <header id="header">
          <?php dieu_logo(); ?>
		   <?php dieu_menu('primary-menu'); ?>
	      </header>