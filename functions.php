<?php
/**
 * St Florian functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage stFlorian
 * @since 1.0
 */

include('custom-shortcodes.php');

function stFlorian_setup() {

	register_nav_menus(
		array(
			'header'    => __( 'Header Menu', 'stFlorian' ),
			'mobile' => __( 'Mobile Menu', 'stFlorian' ),
		)
	);

	$starter_content = array(

		'posts' => array(
			'home',
			'events',
			'combat',
			'a&s',
			'contact',
		),

		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
		),

		'nav_menues' => array(

			'header' => array(
				'name' => __( 'Page Menu' ),
				'items' => array(
					'page_home',
					'page_events',
					'page_combat',
					'page_a&s',
					'page_contact',
				),
			),
		),
	);

	$starter_content = apply_filters( 'stFlorian_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );

	function themeslug_customize_register( $wp_customize ) {
		// Do stuff with $wp_customize, the WP_Customize_Manager object.

		// Add a footer/copyright information section.
		$wp_customize->add_section( 'footer' , array(
			'title' => __( 'Footer', 'stFlorian' ),
			'priority' => 105, // Before Widgets.
		) );

		$wp_customize->add_setting( 'footer_copyright',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);

		$wp_customize->add_control( 'footer_copyright', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'footer', // Required, core or custom.
			'label' => __( 'Footer Copyright' ),
			'description' => esc_html__( 'Get approved footer text here: https://webwright.lochac.sca.org/distributor/' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter text...' ),
		      ),
		) );

		$wp_customize->add_setting( 'footer_disclaimer',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'footer_disclaimer', array(
			'type' => 'textarea',
			'priority' => 10, // Within the section.
			'section' => 'footer', // Required, core or custom.
			'label' => __( 'Footer Disclaimer' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter text...' ),
		      ),
		) );

		$wp_customize->add_setting( 'footer_webwright',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'footer_webwright', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'footer', // Required, core or custom.
			'label' => __( 'Webwright Email' ),
			'description' => esc_html__( 'Display contact email for webwright.' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter email...' ),
		      ),
		) );

		$wp_customize->add_setting( 'footer_seneschal',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'footer_seneschal', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'footer', // Required, core or custom.
			'label' => __( 'Seneschal Email' ),
			'description' => esc_html__( 'Display contact email for seneschal.' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter email...' ),
		      ),
		) );

		$wp_customize->add_setting( 'footer_facebook',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'footer_facebook', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'footer', // Required, core or custom.
			'label' => __( 'Facebook Link' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter url...' ),
		      ),
		) );

		$wp_customize->add_setting( 'footer_calendar',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'footer_calendar', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'footer', // Required, core or custom.
			'label' => __( 'Calendar Link' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter url...' ),
		      ),
		) );

		$wp_customize->add_panel( 'champion_panel',
			array(
				'title' => __( 'Champions' ),
				'description' => esc_html__( 'Add details for the Baronial Champions. Can be displaid using the [champions] shortcode.' ),
		) );

		$wp_customize->add_section( 'heavy_section' , array(
			'title' => __( 'Heavy Champion', 'stFlorian' ),
			'panel' => 'champion_panel',
			'priority' => 10, // Before Widgets.
		) );

		$wp_customize->add_setting( 'heavy_show',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'heavy_show', array(
			'type' => 'checkbox',
			'priority' => 10, // Within the section.
			'section' => 'heavy_section', // Required, core or custom.
			'label' => __( 'Champion Active' )
		) );

		$wp_customize->add_setting( 'heavy_name',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'heavy_name', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'heavy_section', // Required, core or custom.
			'label' => __( 'Champion Name' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter name...' ),
		      ),
		) );

		$wp_customize->add_setting( 'heavy_pic',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'heavy_pic', array(
			'priority' => 20, // Within the section.
			'section' => 'heavy_section', // Required, core or custom.
			'label' => __( 'Champion Portrait' ),
			'button_labels' => array( // Optional.
				'select' => __( 'Select Image' ),
				'change' => __( 'Change Image' ),
				'remove' => __( 'Remove' ),
				'default' => __( 'Default' ),
				'placeholder' => __( 'No image selected' ),
				'frame_title' => __( 'Select Image' ),
				'frame_button' => __( 'Choose Image' ),
			)
		) ) );

		$wp_customize->add_section( 'fencing_section' , array(
			'title' => __( 'Fencing Champion', 'stFlorian' ),
			'panel' => 'champion_panel',
			'priority' => 20, // Before Widgets.
		) );

		$wp_customize->add_setting( 'fencing_show',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'fencing_show', array(
			'type' => 'checkbox',
			'priority' => 10, // Within the section.
			'section' => 'fencing_section', // Required, core or custom.
			'label' => __( 'Champion Active' )
		) );

		$wp_customize->add_setting( 'fencing_name',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'fencing_name', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'fencing_section', // Required, core or custom.
			'label' => __( 'Champion Name' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter name...' ),
		      ),
		) );

		$wp_customize->add_setting( 'fencing_pic',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fencing_pic', array(
			'priority' => 20, // Within the section.
			'section' => 'fencing_section', // Required, core or custom.
			'label' => __( 'Champion Portrait' ),
			'button_labels' => array( // Optional.
				'select' => __( 'Select Image' ),
				'change' => __( 'Change Image' ),
				'remove' => __( 'Remove' ),
				'default' => __( 'Default' ),
				'placeholder' => __( 'No image selected' ),
				'frame_title' => __( 'Select Image' ),
				'frame_button' => __( 'Choose Image' ),
			)
		) ) );

		$wp_customize->add_section( 'archery_section' , array(
			'title' => __( 'Archery Champion', 'stFlorian' ),
			'panel' => 'champion_panel',
			'priority' => 30, // Before Widgets.
		) );

		$wp_customize->add_setting( 'archery_show',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'archery_show', array(
			'type' => 'checkbox',
			'priority' => 10, // Within the section.
			'section' => 'archery_section', // Required, core or custom.
			'label' => __( 'Champion Active' )
		) );

		$wp_customize->add_setting( 'archery_name',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'archery_name', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'archery_section', // Required, core or custom.
			'label' => __( 'Champion Name' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter name...' ),
		      ),
		) );

		$wp_customize->add_setting( 'archery_pic',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'archery_pic', array(
			'priority' => 20, // Within the section.
			'section' => 'archery_section', // Required, core or custom.
			'label' => __( 'Champion Portrait' ),
			'button_labels' => array( // Optional.
				'select' => __( 'Select Image' ),
				'change' => __( 'Change Image' ),
				'remove' => __( 'Remove' ),
				'default' => __( 'Default' ),
				'placeholder' => __( 'No image selected' ),
				'frame_title' => __( 'Select Image' ),
				'frame_button' => __( 'Choose Image' ),
			)
		) ) );

		$wp_customize->add_section( 'arts_section' , array(
			'title' => __( 'A&S Champion', 'stFlorian' ),
			'panel' => 'champion_panel',
			'priority' => 40, // Before Widgets.
		) );

		$wp_customize->add_setting( 'arts_show',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'arts_show', array(
			'type' => 'checkbox',
			'priority' => 10, // Within the section.
			'section' => 'arts_section', // Required, core or custom.
			'label' => __( 'Champion Active' )
		) );

		$wp_customize->add_setting( 'arts_name',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'arts_name', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'arts_section', // Required, core or custom.
			'label' => __( 'Champion Name' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter name...' ),
		      ),
		) );

		$wp_customize->add_setting( 'arts_pic',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arts_pic', array(
			'priority' => 20, // Within the section.
			'section' => 'arts_section', // Required, core or custom.
			'label' => __( 'Champion Portrait' ),
			'button_labels' => array( // Optional.
				'select' => __( 'Select Image' ),
				'change' => __( 'Change Image' ),
				'remove' => __( 'Remove' ),
				'default' => __( 'Default' ),
				'placeholder' => __( 'No image selected' ),
				'frame_title' => __( 'Select Image' ),
				'frame_button' => __( 'Choose Image' ),
			)
		) ) );

		$wp_customize->add_section( 'baroness_section' , array(
			'title' => __( 'Baroness&rsquo;s Champion', 'stFlorian' ),
			'panel' => 'champion_panel',
			'priority' => 50, // Before Widgets.
		) );

		$wp_customize->add_setting( 'baroness_show',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'baroness_show', array(
			'type' => 'checkbox',
			'priority' => 10, // Within the section.
			'section' => 'baroness_section', // Required, core or custom.
			'label' => __( 'Champion Active' )
		) );

		$wp_customize->add_setting( 'baroness_name',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'baroness_name', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'baroness_section', // Required, core or custom.
			'label' => __( 'Champion Name' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter name...' ),
		      ),
		) );

		$wp_customize->add_setting( 'baroness_pic',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'baroness_pic', array(
			'priority' => 20, // Within the section.
			'section' => 'baroness_section', // Required, core or custom.
			'label' => __( 'Champion Portrait' ),
			'button_labels' => array( // Optional.
				'select' => __( 'Select Image' ),
				'change' => __( 'Change Image' ),
				'remove' => __( 'Remove' ),
				'default' => __( 'Default' ),
				'placeholder' => __( 'No image selected' ),
				'frame_title' => __( 'Select Image' ),
				'frame_button' => __( 'Choose Image' ),
			)
		) ) );

		$wp_customize->add_section( 'barons_section' , array(
			'title' => __( 'Baron&rsquo;s Champion', 'stFlorian' ),
			'panel' => 'champion_panel',
			'priority' => 50, // Before Widgets.
		) );

		$wp_customize->add_setting( 'baron_show',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'baron_show', array(
			'type' => 'checkbox',
			'priority' => 10, // Within the section.
			'section' => 'barons_section', // Required, core or custom.
			'label' => __( 'Champion Active' )
		) );

		$wp_customize->add_setting( 'barons_name',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( 'barons_name', array(
			'type' => 'text',
			'priority' => 10, // Within the section.
			'section' => 'barons_section', // Required, core or custom.
			'label' => __( 'Champion Name' ),
			'input_attrs' => array( // Optional.
				'placeholder' => __( 'Enter name...' ),
		      ),
		) );

		$wp_customize->add_setting( 'barons_pic',
			array(
				'default' => '',
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'barons_pic', array(
			'priority' => 20, // Within the section.
			'section' => 'barons_section', // Required, core or custom.
			'label' => __( 'Champion Portrait' ),
			'button_labels' => array( // Optional.
				'select' => __( 'Select Image' ),
				'change' => __( 'Change Image' ),
				'remove' => __( 'Remove' ),
				'default' => __( 'Default' ),
				'placeholder' => __( 'No image selected' ),
				'frame_title' => __( 'Select Image' ),
				'frame_button' => __( 'Choose Image' ),
			)
		) ) );
	}
	add_action( 'customize_register', 'themeslug_customize_register' );

};

// 'init' or 'after_setup_theme'
add_action( 'after_setup_theme', 'stFlorian_setup' );