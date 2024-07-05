<?php
/**
 * Component for displaying mobile navigation
 *
 * @package Kickass
 */
?>

<div id="resp-sidebar" class="sb-slidebar sb-right">
	<div class="resp-sidebar-wrap">
		<?php get_template_part( 'components/site', 'branding' ); ?>
		<nav id="mobile-navigation" class="mobile-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_id' => 'mobile-menu', 'depth' => 3 ) ); ?>
		</nav>

		<div class="contact-sidebar">
			<?php dynamic_sidebar( 'mobile-menu-extra-bottom' ); ?>
		</div>

		<div class="copyright-sidebar">
			  <?php dynamic_sidebar( 'footer-komfort-copy-right-section' ); ?>
		</div>
	</div>
</div>