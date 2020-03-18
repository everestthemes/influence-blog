<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_excerpt_length_section';

$number_attr = influence_blog_excerpt_length_attrs_array();

/*---------------------------------- Excerpt length info -----------------------------------*/

$description = apply_filters( 'influence_blog_filter_excerpt_length_description', __( 'Minimum 10 &amp; maximum 30 can be set.', 'influence-blog' ) );

$wp_customize->add_setting( 'influence_blog_excerpt_length_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_excerpt_length_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => $description,
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 5,
) ) );

/*---------------------------------- Excerpt length number -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_excerpt_length', array(
    'sanitize_callback'        => 'influence_blog_sanitize_range',
    'default'                  => influence_blog_defaults( 'excerpt_length' ),
) );

$wp_customize->add_control( 'influence_blog_excerpt_length', array(
    'section'                  => $section,
    'type'                     => 'number',
    'input_attrs'              => $number_attr,
    'priority'                 => 10,
) );
