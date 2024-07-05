<?php
function devsmart_child_customize_register( $wp_customize ) {
	/* Kontakt Options */
	$wp_customize->add_section(
		'devsmart_header_options',
		array(
			'title'     => 'Kontakt Options',
			'priority'  => 80
		)
	);

	/* header email  */
	$wp_customize->add_setting(
		'devsmart_header_email',
		array(
			'default'            => get_bloginfo( 'admin_email' ),
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'devsmart_header_email',
		array(
			'section'  => 'devsmart_header_options',
			'label'    => 'Email',
			'type'     => 'text',
			'description' => __( 'Enter your email here.' ),
		)
	);

	/* header phone  */
	$wp_customize->add_setting(
		'devsmart_header_phone',
		array(
			'default'            => '+45 00 00 00 00',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'devsmart_header_phone',
		array(
			'section'  => 'devsmart_header_options',
			'label'    => 'Telefon',
			'type'     => 'text',
			'description' => __( 'Enter your phone here.' ),
		)
	);



	/* Footer Credit Options */
	$wp_customize->add_section(
		'devsmart_credit_options',
		array(
			'title'     => 'Footer Credit',
			'priority'  => 120
		)
	);

	/* credit text  */
	$wp_customize->add_setting(
		'devsmart_credit_text',
		array(
			'default'            => '<span>E</span>team.dk',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'devsmart_credit_text',
		array(
			'section'  => 'devsmart_credit_options',
			'label'    => 'Credit Text',
			'type'     => 'text',
			'description' => __( 'Enter credit text here.' ),
		)
	);

	/* credit link  */
	$wp_customize->add_setting(
		'devsmart_credit_link',
		array(
			'default'            => 'https://www.eteam.dk',
			'transport'          => 'postMessage'
		)
	);
	$wp_customize->add_control(
		'devsmart_credit_link',
		array(
			'section'  => 'devsmart_credit_options',
			'label'    => 'Credit Link',
			'type'     => 'text',
			'description' => __( 'Enter credit link here.' ),
		)
	);
}
add_action( 'customize_register', 'devsmart_child_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function devsmart_customize_preview_child_js() {
	wp_enqueue_script( 'devsmart_customizer_child', get_stylesheet_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'devsmart_customize_preview_child_js' );