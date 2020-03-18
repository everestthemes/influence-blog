<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_reset_section';

/*---------------------------------- Reset heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_reset_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_reset_info', array(
    'label'                    => esc_html__( 'Caution', 'influence-blog' ),
    'description'              => __( 'Reset all settings to default. Refresh the page after save to view full effects.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 10,
) ) );

/*---------------------------------- Reset toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_reset_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'reset_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Two_Control ( $wp_customize, 'influence_blog_reset_toggle', array(
    'label'                    => esc_html__( 'Reset All Settings', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'priority'                 => 10,
) ) );
