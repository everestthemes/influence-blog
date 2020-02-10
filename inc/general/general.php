<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !defined( 'IFB_EVERESTTHEMES_PATH' ) ) {

    define( 'IFB_EVERESTTHEMES_PATH', IFB_PATH . 'everestthemes/' );
}

if( !defined( 'IFB_EVERESTTHEMES_PATH_URI' ) ) {

    define( 'IFB_EVERESTTHEMES_PATH_URI', IFB_PATH_URI . 'everestthemes/' );
}

if( !defined( 'IFB_EVERESTTHEMES_ADMIN_PATH' ) ) {

    define( 'IFB_EVERESTTHEMES_ADMIN_PATH', IFB_EVERESTTHEMES_PATH . 'admin/' );
}

if( !defined( 'IFB_EVERESTTHEMES_ADMIN_PATH_URI' ) ) {

    define( 'IFB_EVERESTTHEMES_ADMIN_PATH_URI', IFB_EVERESTTHEMES_PATH_URI . 'admin/' );
}

if( !defined( 'IFB_EVERESTTHEMES_ASSETS_PATH' ) ) {

    define( 'IFB_EVERESTTHEMES_ASSETS_PATH', IFB_EVERESTTHEMES_PATH . 'assets/' );
}

if( !defined( 'IFB_EVERESTTHEMES_ASSETS_PATH_URI' ) ) {

    define( 'IFB_EVERESTTHEMES_ASSETS_PATH_URI', IFB_EVERESTTHEMES_PATH_URI . 'assets/' );
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

        /* Theme Prefix Define*/
		global $influence_blog_prefix;

		$influence_blog_prefix = 'influence_blog';
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Influence Blog, use a find and replace
		 * to change 'influence-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'influence-blog', IFB_PATH . 'languages' );

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
			'menu-1' => esc_html__( 'Primary Menu', 'influence-blog' ),
			'menu-2' => esc_html__( 'Top Menu', 'influence-blog' ),
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
		'name'          => esc_html__( 'Header Advertisement', 'influence-blog' ),
		'id'            => 'influence-blog-header-advertisement',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Top Widget Area', 'influence-blog' ),
		'id'            => 'influence-blog-top-widget-area',
		'description'   => esc_html__( 'Widgets will be shown in fullwidth.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Bottom Widget Area', 'influence-blog' ),
		'id'            => 'influence-blog-bottom-widget-area',
		'description'   => esc_html__( 'Widgets will be shown in fullwidth.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s"><div class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Footer Left', 'influence-blog' ),
		'id'            => 'influence-blog-footer-left',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Footer Middle', 'influence-blog' ),
		'id'            => 'influence-blog-footer-middle',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="side-tt widget-title"><h3 class="s-title">',
		'after_title'   => '</h3></div>',
	) );

    register_sidebar( array(
		'name'          => esc_html__( 'Footer Right', 'influence-blog' ),
		'id'            => 'influence-blog-footer-right',
		'description'   => esc_html__( 'Add widgets here.', 'influence-blog' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
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

    wp_enqueue_style( 'influence-blog-admin-style', IFB_EVERESTTHEMES_ADMIN_PATH_URI .'css/influence-blog-admin-style.css' );

    wp_enqueue_script( 'influence-blog-admin-script', IFB_EVERESTTHEMES_ADMIN_PATH_URI . 'js/influence-blog-admin-script.js', array( 'jquery' ), IFB_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'influence_blog_admin_enqueue_script', 5 );

/**
 * Enqueue scripts and styles.
 */
function influence_blog_scripts() {

	wp_enqueue_style( 'influence-blog-style', get_stylesheet_uri() );

    wp_enqueue_style( 'influence-blog-google-fonts', influence_blog_fonts_url() );

    wp_enqueue_style( 'influence-blog-reset', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'css/reset.css' );

    wp_enqueue_style( 'bootstrap', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'css/bootstrap.min.css' );

     wp_enqueue_script( 'influence-blog-theia-sticky-sidebar', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'js/theia-sticky-sidebar.js', array( 'jquery' ), IFB_VERSION, true );

    wp_enqueue_style( 'font-awesome', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'css/font-awesome.min.css' );

    wp_enqueue_style( 'influence-blog-main-style', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'css/main-style.css' );

    wp_enqueue_style( 'influence-blog-default-style', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'css/default-style.css' );

    wp_enqueue_style( 'slick', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'library/slick/slick.css' );

    wp_enqueue_style( 'influence-blog-responsive', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'css/responsive.css' );

    wp_enqueue_script( 'slick', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'library/slick/slick.min.js', array( 'jquery' ), IFB_VERSION, true );

    wp_enqueue_script( 'influence-blog-main', IFB_EVERESTTHEMES_ASSETS_PATH_URI . 'js/main.js', array( 'jquery' ), IFB_VERSION, true );

	wp_enqueue_script( 'influence-blog-navigation', IFB_EVERESTTHEMES_ASSETS_PATH_URI . '/js/navigation.js', array(), IFB_VERSION, true );

	wp_enqueue_script( 'influence-blog-skip-link-focus-fix', IFB_EVERESTTHEMES_ASSETS_PATH_URI . '/js/skip-link-focus-fix.js', array(), IFB_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'influence_blog_scripts', 10 );
