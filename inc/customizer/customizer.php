<?php
/**
 * Influence Blog Theme Customizer
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_ASSETS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_ASSETS_PATH', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH . 'assets/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_ASSETS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_ASSETS_PATH_URI', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI . 'assets/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH . 'controls/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH_URI', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI . 'controls/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH . 'fields/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH_URI', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI . 'fields/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH . 'panels/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH_URI', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI . 'panels/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH . 'sections/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH_URI', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI . 'sections/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH . 'functions/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH_URI', INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI . 'functions/' );
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function influence_blog_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    /**
	 * Load custom customizer control for radio image one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'radio-image/radio-image-one/class-radio-image-one-control.php';

    /**
	 * Load custom customizer control for radio image two control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'radio-image/radio-image-two/class-radio-image-two-control.php';

	/**
	 * Load custom customizer control for toggle one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'toggle/toggle-one/class-toggle-one-control.php';
    
    /**
	 * Load custom customizer control for toggle two control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'toggle/toggle-two/class-toggle-two-control.php';
    
    /**
	 * Load custom customizer control for toggle three control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'toggle/toggle-three/class-toggle-three-control.php';
    $wp_customize->register_control_type( 'Influence_Blog_Toggle_Three_Control' );
    
    /**
	 * Load custom customizer control for switch one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'switch/switch-one/class-switch-one-control.php';
    
    /**
	 * Load custom customizer control for info one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'info/info-one/class-info-one-control.php';

    /**
	 * Load custom customizer control for range slider one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'range-slider/range-slider-one/class-range-slider-one-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Range_Slider_One_Control' );

    /**
	 * Load custom customizer control for range slider two control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'range-slider/range-slider-two/class-range-slider-two-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Range_Slider_Two_Control' );

    /**
	 * Load custom customizer control for button one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'button/button-one/class-button-one-control.php';
    
    $wp_customize->register_control_type( 'Influence_Blog_Button_One_Control' );

    /**
	 * Load custom customizer control for box shadow one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'box-shadow/box-shadow-one/class-box-shadow-one-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Box_Shadow_One_Control' );

    /**
	 * Load custom customizer control for color one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'color/color-one/class-color-one-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Color_One_Control' );

    /**
	 * Load custom customizer control for repeater two control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'repeater/repeater-two/class-repeater-two-control.php';

    /**
	 * Load custom customizer control for icon picker one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'icon-picker/icon-picker-one/class-icon-picker-one-control.php';

    /**
	 * Load custom customizer control for tab one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'tab/tab-one/class-tab-one-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Tab_One_Control' );

    /**
	 * Load custom customizer control for dimension one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'dimension/dimension-one/class-dimension-one-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Dimension_One_Control' );

    /**
	 * Load custom customizer control for text one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'text/text-one/class-text-one-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Text_One_Control' );

    /**
	 * Load custom customizer control for heading one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'heading/heading-one/class-heading-one-control.php';

    $wp_customize->register_control_type( 'Influence_Blog_Heading_One_Control' );

    /**
	 * Load custom customizer control for typography one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'typography/typography-one/class-typography-one-control.php';

    /**
	 * Load custom customizer control for sortable one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'sortable/sortable-one/class-sortable-one-control.php';

    /**
	 * Load custom customizer control for select one control
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_CONTROLS_PATH . 'select/select-one/class-select-one-control.php';

    /**
	 * Load customizer functions for options of contol fields
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH . 'customizer-options.php';

    /**
	 * Load customizer functions for sanitization of input values of contol fields
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH . 'sanitize-callback.php';

    /**
     * Load active callback functions.
     */
    require INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH . 'active-callback.php';
    
    /**
	 * Load customizer functions for loading control field's choices, declaration of panel, section 
	 * and control fields
	 */
	require INFLUENCE_BLOG_INC_CUSTOMIZER_FUNCTIONS_PATH . 'customizer-fields.php';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'influence_blog_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'influence_blog_customize_partial_blogdescription',
		) );
	}
    
    /**
     * Rearrange default options
     */
    $wp_customize->get_section( 'static_front_page' )->priority = 5;

    $wp_customize->get_control( 'background_color' )->section = 'influence_blog_global_site_layout_section';
    $wp_customize->get_control( 'background_color' )->priority = 65;
    $wp_customize->get_control( 'background_color' )->active_callback = 'influence_blog_is_site_layout_style_wide';

    $wp_customize->get_control( 'background_image' )->section = 'influence_blog_global_site_layout_section';
    $wp_customize->get_control( 'background_image' )->priority = 60;
    $wp_customize->get_control( 'background_image' )->active_callback = 'influence_blog_is_site_layout_design_options_image';

    $wp_customize->get_control( 'background_preset' )->section = 'influence_blog_global_site_layout_section';
    $wp_customize->get_control( 'background_preset' )->priority = 60;
    $wp_customize->get_control( 'background_preset' )->active_callback = 'influence_blog_is_site_layout_design_options_image';

    $wp_customize->get_control( 'background_position' )->section = 'influence_blog_global_site_layout_section';
    $wp_customize->get_control( 'background_position' )->priority = 60;
    $wp_customize->get_control( 'background_position' )->active_callback = 'influence_blog_is_site_layout_design_options_image';

    $wp_customize->get_control( 'background_size' )->section = 'influence_blog_global_site_layout_section';
    $wp_customize->get_control( 'background_size' )->priority = 60;
    $wp_customize->get_control( 'background_size' )->active_callback = 'influence_blog_is_site_layout_design_options_image';

    $wp_customize->get_control( 'background_repeat' )->section = 'influence_blog_global_site_layout_section';
    $wp_customize->get_control( 'background_repeat' )->priority = 60;
    $wp_customize->get_control( 'background_repeat' )->active_callback = 'influence_blog_is_site_layout_design_options_image';
    
    $wp_customize->get_control( 'background_attachment' )->section = 'influence_blog_global_site_layout_section';
    $wp_customize->get_control( 'background_attachment' )->priority = 60;
    $wp_customize->get_control( 'background_attachment' )->active_callback = 'influence_blog_is_site_layout_design_options_image';

    $wp_customize->get_control( 'header_image' )->section = 'influence_blog_header_layout_options_section';
    $wp_customize->get_control( 'header_image' )->priority = 45;

    $wp_customize->get_control( 'custom_logo' )->section = 'influence_blog_header_two_section';
    $wp_customize->get_control( 'custom_logo' )->priority = 25;

    $wp_customize->get_control( 'blogname' )->section = 'influence_blog_header_two_section';
    $wp_customize->get_control( 'blogname' )->priority = 30;

    $wp_customize->get_control( 'display_header_text' )->section = 'influence_blog_header_two_section';
    $wp_customize->get_control( 'display_header_text' )->label = esc_html__( 'Display Site Title', 'influence-blog' );
    $wp_customize->get_control( 'display_header_text' )->priority = 35;

    $wp_customize->get_control( 'blogdescription' )->section = 'influence_blog_header_two_section';
    $wp_customize->get_control( 'blogdescription' )->priority = 40;

    $wp_customize->get_control( 'header_textcolor' )->section = 'influence_blog_header_two_section';
    $wp_customize->get_control( 'header_textcolor' )->priority = 100;

    $wp_customize->get_section( 'title_tagline' )->panel = 'influence_blog_global_settings_panel';
    $wp_customize->get_section( 'title_tagline' )->priority = 10;
}
add_action( 'customize_register', 'influence_blog_customize_register', 10 );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function influence_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function influence_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function influence_blog_customize_preview_js() {

	wp_enqueue_script( 'influence-blog-customizer', INFLUENCE_BLOG_INC_CUSTOMIZER_ASSETS_PATH_URI . 'js/customizer.js', array( 'customize-preview' ), INFLUENCE_BLOG_VERSION, true );
}
add_action( 'customize_preview_init', 'influence_blog_customize_preview_js', 5 );

/**
 * Enqueue Customizer Scripts and Styles
 */
function influence_blog_customizer_enqueues() {

	wp_register_style( 'customizer-responsive-media-style', INFLUENCE_BLOG_INC_CUSTOMIZER_ASSETS_PATH_URI . 'css/customizer-responsive-media.css' );

    wp_register_script( 'customizer-responsive-media-script', INFLUENCE_BLOG_INC_CUSTOMIZER_ASSETS_PATH_URI . 'js/customizer-responsive-media.js', array( 'jquery' ), INFLUENCE_BLOG_VERSION , true );
}
add_action( 'customize_controls_enqueue_scripts', 'influence_blog_customizer_enqueues', 1 );
