<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
  <title><?php bloginfo( 'name' ); ?></title>
  <script src="http://use.edgefonts.net/josefin-slab.js"></script>
  <script src="http://use.edgefonts.net/merriweather.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
  <body <?php body_class( $class ); ?>>
    <header>
      <h1><?php bloginfo( 'name' ); ?></h1>
      <nav>
        <?php wp_nav_menu( array( 'menu' => 'Main Nav') ); ?>
        <!-- <ul>
          <li>Home</li>
          <li>WordPress</li>
        </ul> -->
      </nav>
    </header>
