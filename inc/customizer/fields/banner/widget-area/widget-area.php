<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_banner_widget_area_section';

$area_lists  = influence_blog_get_registered_widget_areas();

/*---------------------------------- Widget area info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_widget_area_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_banner_widget_area_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Selected widget area will display below banner in fullwidth.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 10,
) ) );

/*---------------------------------- Widget area display toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_widget_area_display_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'banner_widget_area_display_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Three_Control ( $wp_customize, 'influence_blog_banner_widget_area_display_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 15,
) ) );

/*---------------------------------- Widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'banner_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_banner_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 20,
) );
