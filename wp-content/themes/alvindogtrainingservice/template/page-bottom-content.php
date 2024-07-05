<?php
/**
 * Template Name: Page with Bottom Section
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kickass
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="content-wrap">
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
					if( is_active_sidebar( 'bottom-section' ) ) :
						dynamic_sidebar( 'bottom-section' );
					endif;
				?>
			</article>
		</main>
	</div>

<?php
get_footer();