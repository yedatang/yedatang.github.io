<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130586404-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130586404-1');
</script>

  <meta charset="utf-8">
  <title>Bookstore+主頁</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php bloginfo('template_url'); ?>/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,cyrillic-ext" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php bloginfo('template_url'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php bloginfo('template_url'); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/photostack/photostack.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/fullpage-menu/fullpage-menu.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/cubeportfolio/cubeportfolio.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/superslides/superslides.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php bloginfo('template_url'); ?>/css/bookstorecss.css" rel="stylesheet">
	 <!-- Custom navbar -->
	<div class="custom-navbar">
          <ul class="nav navbar-nav">
      <?php
         wp_nav_menu(array(
         'menu'              => 'primary',
         'theme_location'    => 'primary',
         'depth'             => 2,
         'container'         => 'div',
         'container_class'   => 'collapse navbar-collapse',
         'container_id'      => 'bs-example-navbar-collapse-1',
         'menu_class'        => 'nav navbar-nav',
         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
         'walker'            => new wp_bootstrap_navwalker())
         );
        ?>
          </ul>
        </div>
  <!-- /END CUSTOM NAVBAR -->
</head>
