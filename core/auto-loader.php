<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( !defined( 'INFLUENCE_BLOG_INC_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_PATH', INFLUENCE_BLOG_PATH . '/inc/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_PATH_URI', INFLUENCE_BLOG_PATH_URI . '/inc/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_GENERAL_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_GENERAL_PATH', INFLUENCE_BLOG_INC_PATH . '/general/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_GENERAL_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_GENERAL_PATH_URI', INFLUENCE_BLOG_INC_PATH_URI . '/general/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_FUNCTIONS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_FUNCTIONS_PATH', INFLUENCE_BLOG_INC_PATH . '/functions/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_FUNCTIONS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_FUNCTIONS_PATH_URI', INFLUENCE_BLOG_INC_PATH_URI . '/functions/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PATH', INFLUENCE_BLOG_INC_PATH . '/customizer/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOMIZER_PATH_URI', INFLUENCE_BLOG_INC_PATH_URI . '/customizer/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_WIDGETS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_WIDGETS_PATH', INFLUENCE_BLOG_INC_PATH . '/widgets/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_WIDGETS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_WIDGETS_PATH_URI', INFLUENCE_BLOG_INC_PATH_URI . '/widgets/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_DYNAMIC_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_DYNAMIC_PATH', INFLUENCE_BLOG_INC_PATH . '/dynamic/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_DYNAMIC_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_DYNAMIC_PATH_URI', INFLUENCE_BLOG_INC_PATH_URI . '/dynamic/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_THIRD_PARTY_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_THIRD_PARTY_PATH', INFLUENCE_BLOG_INC_PATH . '/third-party/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_THIRD_PARTY_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_THIRD_PARTY_PATH_URI', INFLUENCE_BLOG_INC_PATH_URI . '/third-party/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOM_FIELDS_PATH' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOM_FIELDS_PATH', INFLUENCE_BLOG_INC_PATH . '/custom-fields/' );
}

if( !defined( 'INFLUENCE_BLOG_INC_CUSTOM_FIELDS_PATH_URI' ) ) {

    define( 'INFLUENCE_BLOG_INC_CUSTOM_FIELDS_PATH_URI', INFLUENCE_BLOG_INC_PATH_URI . '/custom-fields/' );
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
* Dynamic arguments
*/
$dynamic_args = array(
    'dynamic-default-style',
    'dynamic-main-style',
    'dynamic-gutenberg-style',
    'dynamic-responsive-style',
);

/*
* Third Party arguments
*/
$third_party_args = array(
    'class-google-fonts',
    'breadcrumbs',
    'class-tgm-plugin-activation',
);

/*
* Custom Fields arguments
*/
$custom_fields_args = array( 'sidebar-position' );

infb_blog_require_file( INFLUENCE_BLOG_INC_GENERAL_PATH, $general_args );
infb_blog_require_file( INFLUENCE_BLOG_INC_FUNCTIONS_PATH, $functions_args );
infb_blog_require_file( INFLUENCE_BLOG_INC_CUSTOMIZER_PATH, $customizer_args );
infb_blog_require_file( INFLUENCE_BLOG_INC_WIDGETS_PATH, $widgets_args );
infb_blog_require_file( INFLUENCE_BLOG_INC_DYNAMIC_PATH, $dynamic_args );
infb_blog_require_file( INFLUENCE_BLOG_INC_THIRD_PARTY_PATH, $third_party_args );
infb_blog_require_file( INFLUENCE_BLOG_INC_CUSTOM_FIELDS_PATH, $custom_fields_args );

