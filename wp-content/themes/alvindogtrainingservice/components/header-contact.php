<?php
/**
 * Component for displaying header contact.
 *
 * @package DevSmart
 */
?>

<div id="header-contact">
	<?php if ( is_active_sidebar( 'top-contact-us' ) ) : ?>
		<div class="box-extra-1">
			<?php dynamic_sidebar( 'top-contact-us' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'top-social-icons' ) ) : ?>
		<div class="box-extra-2">
			<?php dynamic_sidebar( 'top-social-icons' ); ?>
		</div>
	<?php endif; ?>
</div>