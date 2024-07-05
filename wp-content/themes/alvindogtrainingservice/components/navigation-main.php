<?php/** * Component for displaying main navigation. * * @package Kickass */?>
<div id="header-nav-wrap">	

<?php //dynamic_sidebar( 'top-social-icons' ); ?>
<nav id="site-navigation" class="main-navigation" role="navigation">		
<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu', 'depth' => 3, 'menu_class' => 'sf-menu') ); // 'menu_class' => 'sf-menu' ?>	
</nav>


</div>