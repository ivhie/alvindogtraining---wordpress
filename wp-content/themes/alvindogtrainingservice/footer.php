<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devsmart
 */
?>
		
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php if ( is_active_sidebar( 'footer-column-1' ) || is_active_sidebar( 'footer-column-2' ) || is_active_sidebar( 'footer-column-3' ) || is_active_sidebar( 'footer-column-4' ) ) : ?>
				
					<?php if ( is_active_sidebar( 'footer-logo-section' ) ) : ?>
							<div class="footer-logo-section">
								<?php dynamic_sidebar( 'footer-logo-section' ); ?>
							</div>
					<?php endif; ?>
					
					<div class="wrap footer-wrap">

						<?php if ( is_active_sidebar( 'footer-column-1' ) ) : ?>
							<div id="footer-col-1" class="footer-col">
								<?php dynamic_sidebar( 'footer-column-1' ); ?>
							</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
							<div id="footer-col-2" class="footer-col">
								<?php dynamic_sidebar( 'footer-column-2' ); ?>
							</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'footer-column-3' ) ) : ?>
							<div id="footer-col-3" class="footer-col">
								<?php dynamic_sidebar( 'footer-column-3' ); ?>
							</div>
						<?php endif; ?>

						<?php if ( is_active_sidebar( 'footer-column-4' ) ) : ?>
							<div id="footer-col-4" class="footer-col">
								<?php dynamic_sidebar( 'footer-column-4' ); ?>
							</div>
						<?php endif; ?>
					</div>
					<div class="wrap  owner-copy-right">
					    <?php dynamic_sidebar( 'footer-komfort-copy-right-section' ); ?>
					</div>
				<?php endif; ?>

				   <!--
					<div id="copyright-wrapper">
						<div class="wrap copyright-wrap">
							<?php dynamic_sidebar( 'footer-eteam-text-section' ); ?>
						</div>
					</div>
					-->
				
			</footer>
			<a href="#" id="back-top"></a>
		</div>
	</div>
</div>

<?php get_template_part( 'components/navigation', 'mobile' ); ?>

<?php wp_footer(); ?>
<script>
jQuery(document).ready(function(jQuery) {
		jQuery('.remove-trigger').removeClass('everlightbox-trigger');
		
});
</script>


</body>
</html>