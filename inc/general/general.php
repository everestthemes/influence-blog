<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !defined( 'INFLUENCE_BLOG_EVERESTTHEMES_PATH' ) ) {

    define( 'INFLUENCE_BLOG_EVERESTTHEMES_PATH', INFLUENCE_BLOG_PATH . 'everestthemes/' );
}

if( !defined( 'INFLUENCE_BLOG_EVERESTTHEMES_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_EVERESTTHEMES_PATH_URI', INFLUENCE_BLOG_PATH_URI . 'everestthemes/' );
}

if( !defined( 'INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH' ) ) {

    define( 'INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH', INFLUENCE_BLOG_EVERESTTHEMES_PATH . 'admin/' );
}

if( !defined( 'INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI', INFLUENCE_BLOG_EVERESTTHEMES_PATH_URI . 'admin/' );
}

if( !defined( 'INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH', INFLUENCE_BLOG_EVERESTTHEMES_PATH . 'assets/' );
}

if( !defined( 'INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI', INFLUENCE_BLOG_EVERESTTHEMES_PATH_URI . 'assets/' );
}

if ( ! function_exists( 'influence_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function influence_blog_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Influence Blog, use a find and replace
		 * to change 'influence-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'influence-blog', INFLUENCE_BLOG_PATH . 'languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

        add_image_size( 'influence-blog-thumbnail-one', 820, 550, true ); //Grid layout
        add_image_size( 'influence-blog-thumbnail-two', 300, 200, true ); //Related post
        add_image_size( 'influence-blog-thumbnail-three', 800, 1200, true ); //Related post

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Menu One', 'influence-blog' ),
			'menu-2' => esc_html__( 'Menu Two', 'influence-blog' ),
			'menu-3' => esc_html__( 'Menu Three', 'influence-blog' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'influence_blog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
			'wp-head-callback' => 'influence_blog_custom_bg_image',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

        /**
         * Add editor CSS to style to the WordPress visual post / page editor.
         *
         * pulls in all of our front-end css.
         */
         add_editor_style('/everestthemes/assets/css/editor-style.css');

        // Add support for gutenberg
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'influence_blog_setup', 5 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function influence_blog_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'influence_blog_content_width', 640 );
}
add_action( 'after_setup_theme', 'influence_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function influence_blog_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'influence-blog' ),
		'id'            => 'influence-blog-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Widget Area One', 'influence-blog' ),
		'id'            => 'influence-blog-widget-one',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget area-one %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Widget Area Two', 'influence-blog' ),
		'id'            => 'influence-blog-widget-two',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget area-two %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Widget Area Three', 'influence-blog' ),
		'id'            => 'influence-blog-widget-three',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget area-three %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Widget Area Four', 'influence-blog' ),
		'id'            => 'influence-blog-widget-four',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget area-four %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Widget Area Five', 'influence-blog' ),
		'id'            => 'influence-blog-widget-five',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget area-five %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Widget Area Six', 'influence-blog' ),
		'id'            => 'influence-blog-widget-six',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget area-six %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'influence_blog_widgets_init', 5 );

/**
 * Enqueue scripts and styles.
 */

function influence_blog_admin_enqueue_script() {

    wp_enqueue_script( 'media-upload' );

	wp_enqueue_media();

    wp_enqueue_style( 'influence-blog-admin-style', INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI .'css/influence-blog-admin-style.css' );

    wp_enqueue_script( 'influence-blog-admin-script', INFLUENCE_BLOG_EVERESTTHEMES_ADMIN_PATH_URI . 'js/influence-blog-admin-script.js', array( 'jquery' ), INFLUENCE_BLOG_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'influence_blog_admin_enqueue_script', 5 );

/**
 * Enqueue scripts and styles.
 */
function influence_blog_scripts() {

	wp_enqueue_style( 'influence-blog-style', get_stylesheet_uri() );

    $google_fonts_url = Influence_Blog_Google_Fonts::get_google_fonts_url();

    $body_font_family = influence_blog_get_font_data( 'typo_body_font' );
    $heading_font_family = influence_blog_get_font_data( 'typo_heading_font' );

    $system_stack = [ 'Arial', 'Verdana','Helvetica', 'Tahoma', 'Georgia', 'Times New Roman' ];

    //fonts
    if ( $google_fonts_url ) {
        if ( !( in_array( $body_font_family, $system_stack ) && in_array( $heading_font_family, $system_stack ) ) ) {

            wp_enqueue_style( 'influence-blog-google-fonts', $google_fonts_url, false, INFLUENCE_BLOG_VERSION, 'all' );
        }

    } else {

        if ( !( in_array( $body_font_family, $system_stack ) && in_array( $heading_font_family, $system_stack ) ) ) {

            wp_enqueue_style( 'influence-blog-google-fonts', influence_blog_default_fonts(), array(), INFLUENCE_BLOG_VERSION );
        }
    }

    wp_enqueue_style( 'influence-blog-reset', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'css/reset.css' );

    wp_enqueue_style( 'bootstrap', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'css/bootstrap.min.css' );

     wp_enqueue_script( 'influence-blog-theia-sticky-sidebar', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'js/theia-sticky-sidebar.js', array( 'jquery' ), INFLUENCE_BLOG_VERSION, true );

    wp_enqueue_style( 'font-awesome', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'css/font-awesome.min.css' );

    wp_enqueue_style( 'slick', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'library/slick/slick.css' );

    wp_enqueue_style( 'influence-blog-main-style', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'css/main-style.css' );

    wp_add_inline_style( 'influence-blog-main-style', apply_filters( 'influence_blog_dynamic_main_style', influence_blog_dynamic_main_style() ) );

    wp_enqueue_style( 'influence-blog-default-style', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'css/default-style.css' );

    wp_add_inline_style( 'influence-blog-default-style', apply_filters( 'influence_blog_dynamic_default_style', influence_blog_dynamic_default_style() ) );

    wp_enqueue_style( 'influence-blog-gutenberg-style', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'css/gutenberg-style.css' );

    wp_add_inline_style( 'influence-blog-gutenberg-style', apply_filters( 'influence_blog_dynamic_gutenberg_style', influence_blog_dynamic_gutenberg_style() ) );

    wp_enqueue_style( 'influence-blog-responsive-style', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'css/responsive.css' );

    wp_add_inline_style( 'influence-blog-responsive-style', apply_filters( 'influence_blog_dynamic_responsive_style', influence_blog_dynamic_responsive_style() ) );

    wp_enqueue_script( 'slick', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'library/slick/slick.min.js', array( 'jquery' ), INFLUENCE_BLOG_VERSION, true );

    wp_enqueue_script( 'influence-blog-main', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'js/main.js', array( 'jquery' ), INFLUENCE_BLOG_VERSION, true );

    if( ! is_singular() ) {

        global $wp_query;

        wp_register_script( 'influence-blog-ajax-script', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . 'js/ajax-script.js', array( 'jquery' ), INFLUENCE_BLOG_VERSION, true );

        wp_localize_script( 'influence-blog-ajax-script', 'influence_blog_obj', array(

            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
            'posts' => json_encode( $wp_query->query_vars ),
            'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
            'max_page' => $wp_query->max_num_pages,
            'loading' => esc_html__( 'Loading', 'influence-blog' ),
            'first_page' => get_pagenum_link(1)
        ) );

        wp_enqueue_script( 'influence-blog-ajax-script' );
    }

	wp_enqueue_script( 'influence-blog-navigation', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . '/js/navigation.js', array(), INFLUENCE_BLOG_VERSION, true );

	wp_enqueue_script( 'influence-blog-skip-link-focus-fix', INFLUENCE_BLOG_EVERESTTHEMES_ASSETS_PATH_URI . '/js/skip-link-focus-fix.js', array(), INFLUENCE_BLOG_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'influence_blog_scripts', 10 );
