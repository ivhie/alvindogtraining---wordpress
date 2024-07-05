<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'devsmart_child_config_parent_css' ) ):
    function devsmart_child_config_parent_css() {
        wp_enqueue_style( 'devsmart_child_config_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'devsmart_child_config_parent_css', 10 );

// END ENQUEUE PARENT ACTION

if ( ! function_exists( 'devsmart_child' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function devsmart_child() {
	// Register editor style
	add_editor_style( 'style.css' );
}
endif;
add_action( 'after_setup_theme', 'devsmart_child' );

/**
 * Custom header logo
 */
add_theme_support( 'custom-logo', apply_filters( 'devsmart_child_custom_logo_args', array(
	'width'       		=> 355,
	'height'      		=> 50,
	'flex-height' 		=> true,
	'flex-width'  		=> true
)));

/**
 * Register custom JS
 */
function devsmart_child_register_js() {
	wp_enqueue_script( 'world-endtime-news-magnific', get_stylesheet_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'world-endtime-news-lity', get_stylesheet_directory_uri() . '/assets/js/lity.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'world-endtime-news-hoverIntent-script', get_stylesheet_directory_uri() . '/assets/js/hoverIntent.js', array('jquery'), '', true );
	wp_enqueue_script( 'world-endtime-news-superfish-script', get_stylesheet_directory_uri() . '/assets/js/superfish.js', array('jquery'), '', true );
	wp_enqueue_script( 'world-endtime-news-slick-script', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'world-endtime-news-slidebars-script', get_stylesheet_directory_uri() . '/assets/js/slidebars.js', array('jquery'), '', true );
	wp_enqueue_script( 'world-endtime-news-custom-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
	
	//New added
	wp_enqueue_script( 'world-endtime-news-lightbox2-script', get_stylesheet_directory_uri() . '/assets/lightbox2/dist/js/lightbox.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'devsmart-owl-carousel-script', get_stylesheet_directory_uri() . '/assets/OwlCarousel/owl.carousel.js', array('jquery'), '1.0.0', true );
	//
}
add_action( 'wp_enqueue_scripts', 'devsmart_child_register_js', 250 );



/**
 * Register custom CSS
 */
function devsmart_child_register_styles() {
	//wp_enqueue_style( 'world-endtime-news-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700&display=swap' );
	//wp_enqueue_style( 'world-endtime-news-opensans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap' );
	//wp_enqueue_style( 'world-endtime-news-playfair-display', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap' );
	
	wp_enqueue_style( 'world-endtime-news-oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap' );

	wp_enqueue_style( 'world-endtime-news-hamburger-style',  get_stylesheet_directory_uri() . '/assets/css/hamburgers.min.css' );
	wp_enqueue_style( 'world-endtime-news-magnific',  get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'world-endtime-news-lity',  get_stylesheet_directory_uri() . '/assets/css/lity.min.css' );
	wp_enqueue_style( 'world-endtime-news-superfish-style',  get_stylesheet_directory_uri() . '/assets/css/superfish.css' );
	wp_enqueue_style( 'world-endtime-news-slick-style',  get_stylesheet_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'world-endtime-news-slidebars-style',  get_stylesheet_directory_uri() . '/assets/css/slidebars.min.css' );
	
	//New added
	wp_enqueue_style( 'world-endtime-news-lightbox2-style',  get_stylesheet_directory_uri() . '/assets/lightbox2/dist/css/lightbox.min.css' );
	wp_enqueue_style( 'devsmart-child-elegant-style',  get_stylesheet_directory_uri() . '/assets/elegant/css/elegant-icons.min.css' );
	wp_enqueue_style( 'owl-carousel-min',  get_stylesheet_directory_uri() . '/assets/OwlCarousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme-default-min',  get_stylesheet_directory_uri() . '/assets/OwlCarousel/assets/owl.theme.default.min.css' );
}
add_action( 'wp_enqueue_scripts', 'devsmart_child_register_styles' );

/**
 * Functions to add SiteOrigin Widget framework.
 *
 * @package Devsmart
 */

// Define base widget folder url.
define( 'KICKASS_WIDGET_FOLDER_URI', get_stylesheet_directory_uri() . '/inc/widgets/' );

/**
 * Add new widgets list.
 *
 * @return array
 */
function devsmart_child_widgets_collection( $folders ) {

	// Get widgets folder.
	$folders[] = get_stylesheet_directory() . '/inc/widgets/';

	// Return folders list.
	return $folders;
}
add_filter( 'siteorigin_widgets_widget_folders', 'devsmart_child_widgets_collection' );


/**
 * Custom HOOK's
 */
require get_stylesheet_directory() . '/inc/customizer.php';


/**
 * Custom Widgets
 */
 
 
register_sidebar( array(
	'name'          => esc_html__( 'Top Contact Us', 'world-endtime-news' ),
	'id'            => 'top-contact-us',
	'description'   => esc_html__( 'Add Content here.', 'world-endtime-news' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
) );

register_sidebar( array(
	'name'          => esc_html__( 'Top Social Icons', 'world-endtime-news' ),
	'id'            => 'top-social-icons',
	'description'   => esc_html__( 'Add Content here.', 'world-endtime-news' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
) );

register_sidebar( array(
	'name'          => esc_html__( 'Banner Section', 'world-endtime-news' ),
	'id'            => 'banner-section',
	'description'   => esc_html__( 'Add Content here.', 'world-endtime-news' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
) );



register_sidebar( array(
	'name'          => esc_html__( 'Mobile Menu Extra Bottom Section', 'devsmart' ),
	'id'            => 'mobile-menu-extra-bottom',
	'description'   => esc_html__( 'Add Here.', 'devsmart' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
) );

register_sidebar( array(
	'name'          => esc_html__( 'Copy Right Text', 'world-endtime-news' ),
	'id'            => 'footer-komfort-copy-right-section',
	'description'   => esc_html__( 'Add Content here.', 'world-endtime-news' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
) );

register_sidebar( array(
	'name'          => esc_html__( 'Dev Text', 'world-endtime-news' ),
	'id'            => 'footer-eteam-text-section',
	'description'   => esc_html__( 'Add Content here', 'world-endtime-news' ),
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',
) );








/**
 * Custom Thumbnails
 */
 

add_theme_support( 'post-thumbnails' );
add_image_size( 'left-side-featured-thumbnail', 150, 100, true );
add_image_size( 'center-featured-thumbnail', 757, 590, true );
add_image_size( 'single-featured-thumbnail', 520, 600, true );

//add_image_size( 'featured-page-thumbnail', 570, 395, true );
//add_image_size( 'box-slider-thumbnail', 600, 380, true );

/**
 * WordPress function that add class on body tag by current user role.
 */
function wp_add_user_role_to_body( $classes ) {
    global $current_user;
    $current_user_role  = $current_user->roles;
    $current_user_class = ' role-' . $current_user_role[0] . '-' . get_current_user_id();

    // Check if user can view backend.
    if( is_admin() || current_user_can( 'edit_dashboard' ) || is_customize_preview() ) {
        return $classes . $current_user_class;
    }

    $classes[] = $current_user_class;
    return $classes;
}
// WordPress filter add class - admin backend.
add_filter( 'admin_body_class', 'wp_add_user_role_to_body' );


/*Shortcode*/

add_shortcode('display-featured-products','display_featured_products');
function display_featured_products($atts){

    ob_start();
     
	$atts = shortcode_atts( array(
        'cat_slug' => '',
		'post_type' => 'product',
		'no_post' => '',
		'slider_id' => '',
		'autoplay' => '',
		'make_title_two_lines' => '',
		'order' => ''
    ), $atts, 'bartag' );
	

	$cat_slug = isset($atts['cat_slug'])?$atts['cat_slug']:'uncategorized';
	$post_type = isset($atts['post_type'])?$atts['post_type']:'post';
	$no_post = isset($atts['no_post'])?$atts['no_post']:'6';
	$order = isset($atts['order'])?$atts['order']:'desc';
	$make_title_two_lines = isset($atts['make_title_two_lines'])?$atts['make_title_two_lines']:'no';
	$slider_id =isset($atts['slider_id'])?$atts['slider_id']:'slider-default';
	$autoplay =isset($atts['autoplay'])?$atts['autoplay']:'false';
   
	//echo $cat_slug;
	$args = array (
		'post_type'              => $post_type,
		'post_status'            => array( 'publish' ),
		'product_cat' =>$cat_slug,
		'numberposts' => $no_post,
		//'orderby' => 'date',
		'order' => $order,
	);


	$woocommerce_currency = get_option('woocommerce_currency_symbol');
	// NOTICE! Understand what this does before running. 
	$symbols = get_woocommerce_currency_symbol($woocommerce_currency); 
	//$symbols = get_woocommerce_currency_symbols();

	$postItems = get_posts($args);

	//var_dump($postItems);
   echo '<div class="featured-product-wrapper">';
	if($postItems) {
		foreach($postItems as $postItem) {
			$attachment_first[0] = get_post_thumbnail_id( $postItem->ID );
			$attachment = wp_get_attachment_image_src( $attachment_first[0], 'full' );
           
			$product = wc_get_product($postItem->ID);
			$permalink = $product->get_product_url();

			//$product->get_regular_price();
			//$product->get_sale_price();
			//$product->get_price();
		
			 echo '<div class="product-item-wrapper animate-top">';
			 		 echo '<div class="image"><a title="'. $postItem->post_title .'" target="_blank" href="'.$permalink.'"><img src="'. $attachment[0].'" alt=""/></a></div>';
					
					  if($make_title_two_lines =='yes'){

							if (strlen($postItem->post_title) > 80) {
								$postItem->post_title = substr($postItem->post_title, 0,80) . '...';
								
							}
  
						echo '<div class="product-name"><h3 class="post-title make-two-lines"><a title="'. $postItem->post_title .'" target="_blank" href="'.$permalink.'">'. $postItem->post_title .'</a></h3></div>';

					  } else {

						echo '<div class="product-name"><h3 class="post-title"><a title="'. $postItem->post_title .'" target="_blank" href="'.$permalink.'">'. $postItem->post_title .'</a></h3></div>';
					 
					 }
					  
					 
					 echo '<div class="product-meta">';
					 	 echo '<div class="product-price">'.$symbols.''.$product->get_regular_price().'</div>';
						 echo '<a title="'. $postItem->post_title .'" target="_blank" href="'.$permalink.'"><div class="product-link">BUY ON</div></a>';
					 echo '</div>';
			 echo '</div>';
		}
	}

	echo '</div>';


	return ob_get_clean();
}

?>