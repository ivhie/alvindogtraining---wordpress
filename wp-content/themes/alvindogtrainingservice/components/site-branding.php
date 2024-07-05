<?php
/**
 * Component for displaying header site branding.
 *
 * @package Kickass
 */
?>

<div class="site-branding">
	<?php if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) :
		the_custom_logo();
	else : ?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php endif; ?>
</div>

<?php if( is_active_sidebar( 'header-section' ) ) dynamic_sidebar( 'header-section' ); ?>