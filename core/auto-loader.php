<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !defined( 'IFB_INC_PATH' ) ) {

    define( 'IFB_INC_PATH', IFB_PATH . '/inc/' );
}

if( !defined( 'IFB_INC_PATH_URI' ) ) {

    define( 'IFB_INC_PATH_URI', IFB_PATH_URI . '/inc/' );
}

if( !defined( 'IFB_INC_GENERAL_PATH' ) ) {

    define( 'IFB_INC_GENERAL_PATH', IFB_INC_PATH . '/general/' );
}

if( !defined( 'IFB_INC_GENERAL_PATH_URI' ) ) {

    define( 'IFB_INC_GENERAL_PATH_URI', IFB_INC_PATH_URI . '/general/' );
}

if( !defined( 'IFB_INC_FUNCTIONS_PATH' ) ) {

    define( 'IFB_INC_FUNCTIONS_PATH', IFB_INC_PATH . '/functions/' );
}

if( !defined( 'IFB_INC_FUNCTIONS_PATH_URI' ) ) {

    define( 'IFB_INC_FUNCTIONS_PATH_URI', IFB_INC_PATH_URI . '/functions/' );
}

if( !defined( 'IFB_INC_CUSTOMIZER_PATH' ) ) {

    define( 'IFB_INC_CUSTOMIZER_PATH', IFB_INC_PATH . '/customizer/' );
}

if( !defined( 'IFB_INC_CUSTOMIZER_PATH_URI' ) ) {

    define( 'IFB_INC_CUSTOMIZER_PATH_URI', IFB_INC_PATH_URI . '/customizer/' );
}

if( !defined( 'IFB_INC_WIDGETS_PATH' ) ) {

    define( 'IFB_INC_WIDGETS_PATH', IFB_INC_PATH . '/widgets/' );
}

if( !defined( 'IFB_INC_WIDGETS_PATH_URI' ) ) {

    define( 'IFB_INC_WIDGETS_PATH_URI', IFB_INC_PATH_URI . '/widgets/' );
}

if( !defined( 'IFB_INC_THIRD_PARTY_PATH' ) ) {

    define( 'IFB_INC_THIRD_PARTY_PATH', IFB_INC_PATH . '/third-party/' );
}

if( !defined( 'IFB_INC_THIRD_PARTY_PATH_URI' ) ) {

    define( 'IFB_INC_THIRD_PARTY_PATH_URI', IFB_INC_PATH_URI . '/third-party/' );
}

if( !defined( 'IFB_INC_CUSTOM_FIELDS_PATH' ) ) {

    define( 'IFB_INC_CUSTOM_FIELDS_PATH', IFB_INC_PATH . '/custom-fields/' );
}

if( !defined( 'IFB_INC_CUSTOM_FIELDS_PATH_URI' ) ) {

    define( 'IFB_INC_CUSTOM_FIELDS_PATH_URI', IFB_INC_PATH_URI . '/custom-fields/' );
}

/*
* General arguments
*/
$general_args = array( 'general' );

/*
* Functions arguments
*/
$functions_args = array(
    'custom-header',
    'customizer-defaults',
    'customizer-helper',
    'theme-functions',
    'theme-queries',
    'template-tags',
    'template-functions',
    'option-choices',
    'theme-hooks',
    'jetpack',
);

/*
* Customizer arguments
*/
$customizer_args = array( 'customizer' );

/*
* Widgets arguments
*/
$widgets_args = array( 'widgets' );

/*
* Third Party arguments
*/
$third_party_args = array(
    'breadcrumbs',
    'class-tgm-plugin-activation',
);

/*
* Custom Fields arguments
*/
$custom_fields_args = array( 'sidebar-position' );

ifb_blog_require_file( IFB_INC_GENERAL_PATH, $general_args );
ifb_blog_require_file( IFB_INC_FUNCTIONS_PATH, $functions_args );
ifb_blog_require_file( IFB_INC_CUSTOMIZER_PATH, $customizer_args );
ifb_blog_require_file( IFB_INC_WIDGETS_PATH, $widgets_args );
ifb_blog_require_file( IFB_INC_THIRD_PARTY_PATH, $third_party_args );
ifb_blog_require_file( IFB_INC_CUSTOM_FIELDS_PATH, $custom_fields_args );

