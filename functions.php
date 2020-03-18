<?php
/**
 * Influence Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

//Lists of define required for theme
if( !defined( 'INFLUENCE_BLOG_VERSION' ) ) {
    
    define( 'INFLUENCE_BLOG_VERSION', wp_get_theme()->get( 'Version' ) );
}

if( !defined( 'INFLUENCE_BLOG_PATH' ) ) {
    
    define( 'INFLUENCE_BLOG_PATH', get_template_directory() . '/' );
}

if( !defined( 'INFLUENCE_BLOG_PATH_URI' ) ) {
    
    define( 'INFLUENCE_BLOG_PATH_URI', get_template_directory_uri() . '/' );
}

if( !defined( 'INFLUENCE_BLOG_CORE_PATH' ) ) {
    
    define( 'INFLUENCE_BLOG_CORE_PATH', INFLUENCE_BLOG_PATH . 'core/' );
}

if( !defined( 'INFLUENCE_BLOG_CORE_PATH_URI' ) ) {
    
    define( 'INFLUENCE_BLOG_CORE_PATH_URI', INFLUENCE_BLOG_PATH_URI . 'core/' );
}

if( !function_exists( 'influence_blog_require_file' ) ) :
    /**
     * Functions for required files
     */
    function influence_blog_require_file( $path , array $args, $extension = null ) {

        if( !array( $args ) && !empty( $path ) ) {

            return;
        }

        if( $extension == null ) {

            $extension = 'php';
        }

        foreach( $args as $arg ) {

            require $path . $arg . '.' . $extension;
        }
    }
endif;

$core_args = array( 'auto-loader' );

influence_blog_require_file( INFLUENCE_BLOG_CORE_PATH, $core_args );
