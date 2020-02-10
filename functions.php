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
if( !defined( 'IFB_VERSION' ) ) {
    
    define( 'IFB_VERSION', wp_get_theme()->get( 'Version' ) );
}

if( !defined( 'IFB_PATH' ) ) {
    
    define( 'IFB_PATH', get_template_directory() . '/' );
}

if( !defined( 'IFB_PATH_URI' ) ) {
    
    define( 'IFB_PATH_URI', get_template_directory_uri() . '/' );
}

if( !defined( 'IFB_CORE_PATH' ) ) {
    
    define( 'IFB_CORE_PATH', IFB_PATH . 'core/' );
}

if( !defined( 'IFB_CORE_PATH_URI' ) ) {
    
    define( 'IFB_CORE_PATH_URI', IFB_PATH_URI . 'core/' );
}

if( !function_exists( 'ifb_blog_require_file' ) ) :
    /**
     * Functions for required files
     */
    function ifb_blog_require_file( $path , array $args, $extension = null ) {

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

ifb_blog_require_file( IFB_CORE_PATH, $core_args );
