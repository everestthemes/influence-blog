<?php
/**
 * Influence Blog Theme Customizer
 *
 * @package Influence_Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function influence_blog_customize_register( $wp_customize ) {
    
    global $influence_blog_prefix;
    
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    /**
	 * Load custom customizer control for radio image control
	 */
	require get_template_directory() . '/inc/customizer/controls/class-customizer-radio-image-control.php';

	/**
	 * Load custom customizer control for toggle control
	 */
	require get_template_directory() . '/inc/customizer/controls/class-customizer-toggle-control.php';
    
    /**
	 * Load custom customizer control for slider control
	 */
	require get_template_directory() . '/inc/customizer/controls/class-customizer-slider-control.php';
    
    /**
	 * Load customizer functions for sanitization of input values of contol fields
	 */
	require get_template_directory() . '/inc/customizer/functions/sanitize-callback.php';
    
    /**
	 * Load customizer functions
	 */
	require get_template_directory() . '/inc/customizer/functions/customizer-functions.php';
    
    // Upspell
	require_once trailingslashit( get_template_directory() ) . '/inc/customizer/upgrade-to-pro/upgrade.php';

	$wp_customize->register_section_type( 'Influence_Blog_Customize_Section_Upsell' );
    
    $wp_customize->add_section(
        new Influence_Blog_Customize_Section_Upsell( $wp_customize, 'influence-blog_pro', 
            array(
                'title'         => esc_html__( 'Influence Blog Pro', 'influence-blog' ),
                'button_text'   => esc_html__( 'Buy Pro', 'influence-blog' ),
                'button_url'    => 'https://everestthemes.com/themes/influence-blog-pro/',
                'priority'      => 1,
                )
        )
    );
    
    /**
	 * Load customizer functions for loading control field's choices, declaration of panel, section 
	 * and control fields
	 */
	require get_template_directory() . '/inc/customizer/functions/customizer-fields.php';

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
    
    $wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Site Title Color', 'influence-blog' );
    $wp_customize->get_control( 'background_color' )->section = 'background_image';
    $wp_customize->get_section( 'background_image' )->title = esc_html__( 'Site Background', 'influence-blog' );
    $wp_customize->get_control( 'header_image' )->priority = 30;
   
    $wp_customize->get_control( 'custom_logo' )->section = $influence_blog_prefix . '_site_logo_section';
    $wp_customize->get_control( 'blogname' )->section = $influence_blog_prefix . '_site_logo_section';
    $wp_customize->get_control( 'blogdescription' )->section = $influence_blog_prefix . '_site_logo_section';
    $wp_customize->get_control( 'header_textcolor' )->section = $influence_blog_prefix . '_site_logo_section';
    $wp_customize->get_control( 'display_header_text' )->section = $influence_blog_prefix . '_site_logo_section';
    $wp_customize->get_control( 'site_icon' )->section = $influence_blog_prefix . '_site_favicon_section';
    $wp_customize->get_control( 'header_image' )->section = $influence_blog_prefix . '_site_header_image';
    
}
add_action( 'customize_register', 'influence_blog_customize_register' );

/**
 * Load active callback functions.
 */
require get_template_directory() . '/inc/customizer/functions/active-callback.php';

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
	wp_enqueue_script( 'influence-blog-customizer', get_template_directory_uri() . '/inc/customizer/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'influence_blog_customize_preview_js' );

/**
 * Enqueue Customizer Scripts and Styles
 */
function influence_blog_enqueues() {

	wp_enqueue_style( 'influence-blog-customizer-style', get_template_directory_uri() . '/inc/customizer/assets/css/customizer-style.css' );
    
    wp_enqueue_style( 'influence-blog-upgrade', get_template_directory_uri() . '/inc/customizer/assets/css/upgrade.css' );
    
    wp_enqueue_script( 'influence-blog-upgrade', get_template_directory_uri() . '/inc/customizer/assets/js/upgrade.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

	// Register the script
    wp_register_script( 'influence-blog-customizer-script', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-script.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ) , true );

    // Localize the script with new data
    $title_array = array(
        
        'custom_logo' => esc_html__( 'Logo Setup', 'influence-blog' ),
        
        'display_top_header_menu' => esc_html__( 'Top Header Options', 'influence-blog' ),
        
        'display_home_icon' => esc_html__( 'Main Header Options', 'influence-blog' ),
        
        'banner_category' => esc_html__( 'Banner Content Options', 'influence-blog' ),
        
        'blog_page_grid_two_col_layout_title' => esc_html__( 'Grid Two Column Layout Options', 'influence-blog' ),
        'blog_page_grid_three_col_layout_title' => esc_html__( 'Grid Three Column Layout Options', 'influence-blog' ),
        'display_blog_page_pagination' => esc_html__( 'Pagination Options', 'influence-blog' ),
        'blog_page_sidebar_position' => esc_html__( 'Sidebar Position', 'influence-blog' ),
        'blog_page_about_info_logo' => esc_html__( 'About Info Options', 'influence-blog' ),
        
        'display_archive_page_category' => esc_html__( 'Archive Page Options', 'influence-blog' ),
        'archive_page_sidebar_position' => esc_html__( 'Sidebar Position', 'influence-blog' ),
        'display_search_page_category' => esc_html__( 'Search Page Options', 'influence-blog' ),
        'search_page_sidebar_position' => esc_html__( 'Sidebar Position', 'influence-blog' ),
        
        'display_single_post_category' => esc_html__( 'Single Post Options', 'influence-blog' ),
        'display_single_post_author_section' => esc_html__( 'Author Section', 'influence-blog' ),
        'display_single_post_related_posts_section' => esc_html__( 'Related Posts Section', 'influence-blog' ),
        'display_single_page_posted_date' => esc_html__( 'Single Post Options', 'influence-blog' ),
        
        'display_breadcrumb' => esc_html__( 'Breadcrumb Options', 'influence-blog' ),
        
        'enable_sticky_sidebar' => esc_html__( 'Sidebar Options', 'influence-blog' ),
        
        'footer_contact_info_title' => esc_html__( 'Contact Info Options', 'influence-blog' ),
    );
    wp_localize_script( 'influence-blog-customizer-script', 'influence_blog', $title_array );

    // Enqueued script with localized data.
    wp_enqueue_script( 'influence-blog-customizer-script' );
}
add_action( 'customize_controls_enqueue_scripts', 'influence_blog_enqueues' );
