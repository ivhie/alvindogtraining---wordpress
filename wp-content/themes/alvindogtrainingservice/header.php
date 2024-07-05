<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devsmart
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="sb-site">
	<div id="the-site-holder" style="position: relative;">
		<div id="page" class="site<?php if( !is_front_page() ) echo ' inner-pages'; ?>">
			<header id="masthead" class="site-header" role="banner">
				<div class="wrap">
					<?php get_template_part( 'components/site', 'branding' ); ?>
					<?php // get_template_part( 'components/navigation', 'main' ); ?>
					<?php get_template_part( 'components/header', 'contact' ); ?>
					<?php get_template_part( 'components/site', 'hamburger' ); ?>
				</div>
			</header>
           <div class="banner-wrapper">
			<?php
			
			if ( is_active_sidebar( 'banner-section' ) ) : 

							dynamic_sidebar( 'banner-section' );
					endif; 

			?>
			</div>

			<div id="content" class="site-content">
			