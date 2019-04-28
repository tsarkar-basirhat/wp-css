<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
</head>

<body <?php body_class('theme-white'); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a> -->

	<header class="siteHeader">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
        	<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a></div>
        </div>
				<div class="col-lg-9">
          <div class="siteNav clearfix">
          	<ul>
          		<li><a href="#">Blog</a></li>
							<li><a href="#">Css</a></li>
							<li><a href="#">Html</a></li>
							<li><a href="#">Jquery</a></li>
							<li><a href="#">Wordpress</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
          	</ul>
          </div>
				</div>
      </div>
    </div>
	</header>

	<div id="content" class="site-content">
