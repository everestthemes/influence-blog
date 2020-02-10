<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_global_typography_section';

$font_attrs = influence_blog_font_attrs_array();

$size_attrs = influence_blog_font_size_attrs_array();

$text_transform = influence_blog_font_text_transform_array();

$line_height = influence_blog_line_height_attrs_array();

$letter_spacing = influence_blog_letter_spacing_attrs_array();

/*-----------------------------------------------------------------------------
							 Typography options
-----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
							 Body Typography
-----------------------------------------------------------------------------*/

/*---------------------------------- Body Heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_body_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_typo_body_heading', array(
    'label'                    => esc_html__( 'Body Typography', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'typo-body-heading' ),
    'controls_to_wrap'         => 5,
    'expanded'                 => false,
    'priority'                 => 10,
) ) );

/*---------------------------------- Body font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_body_font', array(
    'default' => influence_blog_defaults( 'typo_body_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Typography_One_Control( $wp_customize, 'influence_blog_typo_body_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 15,
) ) );

/*---------------------------------- Body text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_body_transform', array(
    'default' => influence_blog_defaults( 'typo_body_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select'
) );

$wp_customize->add_control( 'influence_blog_typo_body_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 20,
) );

/*---------------------------------- Body font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_body_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_body_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_body_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_body_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_body_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_body_size_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_body_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_body_size_d',
        'tablet' 	           => 'influence_blog_typo_body_size_t',
        'mobile' 	           => 'influence_blog_typo_body_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 25,
) ) );

/*---------------------------------- Body line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_body_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_body_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_body_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_body_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_body_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_body_height_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_body_line_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_body_height_d',
        'tablet' 	           => 'influence_blog_typo_body_height_t',
        'mobile' 	           => 'influence_blog_typo_body_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 30,
) ) );

/*---------------------------------- Body letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_body_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_body_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_body_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_body_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_body_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_body_spacing_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_body_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_body_spacing_d',
        'tablet' 	           => 'influence_blog_typo_body_spacing_t',
        'mobile' 	           => 'influence_blog_typo_body_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 35,
) ) );

/*-----------------------------------------------------------------------------
							 Heading Typography
-----------------------------------------------------------------------------*/

/*---------------------------------- Heading Heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_heading_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_typo_heading_heading', array(
    'label'                    => esc_html__( 'Heading Typography', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'typo-heading-heading' ),
    'controls_to_wrap'         => 36,
    'expanded'                 => false,
    'priority'                 => 40,
) ) );

/*---------------------------------- Heading font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_heading_font', array(
    'default' => influence_blog_defaults( 'typo_heading_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Typography_One_Control( $wp_customize, 'influence_blog_typo_heading_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 45,
) ) );

$headings = array(
    'H1',
    'H2',
    'H3',
    'H4',
    'H5',
    'H6',
);

$count = 45;

foreach( $headings as $heading ) {

    $count = $count + 5;

    /*---------------------------------- Heading Heading -----------------------------------*/

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_heading', array(
        'sanitize_callback' 	   => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_typo_heading_' . $heading . '_heading', array(
        'label'                    => $heading . ' ' . esc_html__( 'Typography', 'influence-blog' ),
        'section'                  => $section,
        'type'                     => 'heading-one',
        'accordion'                => true,
        'class'                    => esc_attr( 'typo-heading-h1-heading' ),
        'controls_to_wrap'         => 4,
        'expanded'                 => false,
        'priority'                 => $count,
    ) ) );

    $count = $count + 5;

    /*---------------------------------- Heading text transform -----------------------------------*/

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_transform', array(
        'default' => influence_blog_defaults( 'typo_heading_' . $heading . '_transform' ),
        'sanitize_callback'        => 'influence_blog_sanitize_select'
    ) );

    $wp_customize->add_control( 'influence_blog_typo_heading_' . $heading . '_transform', array(
        'label'                    => __( 'Text Transform', 'influence-blog' ),
        'section'                  => $section,
        'type'                     => 'select',
        'choices'                  => $text_transform,
        'priority'                 => $count,
    ) );

    $count = $count + 5;

    /*---------------------------------- Heading font size -----------------------------------*/

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_size_d', array(
        'sanitize_callback'        => 'sanitize_range_slider_two_number',
        'transport' 		       => 'postMessage',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_size_d' ),
    ) );

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_size_t', array(
        'transport' 			   => 'postMessage',
        'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_size_t' ),
    ) );

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_size_m', array(
        'transport' 			   => 'postMessage',
        'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_size_m' ),
    ) );

    $wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_heading_' . $heading . '_size', array(
        'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
        'section' 			       => $section,
        'type'                     => 'range-slider-two',
        'settings' 			       => array(
            'desktop' 	           => 'influence_blog_typo_heading_' . $heading . '_size_d',
            'tablet' 	           => 'influence_blog_typo_heading_' . $heading . '_size_t',
            'mobile' 	           => 'influence_blog_typo_heading_' . $heading . '_size_m',
        ),
        'input_attrs' 		       => $size_attrs,
        'priority' 			       => $count,
    ) ) );

    $count = $count + 5;

    /*---------------------------------- Heading line height -----------------------------------*/

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_height_d', array(
        'sanitize_callback'        => 'sanitize_range_slider_two_number',
        'transport' 		       => 'postMessage',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_height_d' ),
    ) );

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_height_t', array(
        'transport' 			   => 'postMessage',
        'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_height_t' ),
    ) );

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_height_m', array(
        'transport' 			   => 'postMessage',
        'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_height_m' ),
    ) );

    $wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_heading_' . $heading . '_line_height', array(
        'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
        'section' 			       => $section,
        'type'                     => 'range-slider-two',
        'settings' 			       => array(
            'desktop' 	           => 'influence_blog_typo_heading_' . $heading . '_height_d',
            'tablet' 	           => 'influence_blog_typo_heading_' . $heading . '_height_t',
            'mobile' 	           => 'influence_blog_typo_heading_' . $heading . '_height_m',
        ),
        'input_attrs' 		       => $line_height,
        'priority' 			       => $count,
    ) ) );

    $count = $count + 5;

    /*---------------------------------- Heading letter spacing -----------------------------------*/

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_spacing_d', array(
        'sanitize_callback'        => 'sanitize_range_slider_two_number',
        'transport' 		       => 'postMessage',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_spacing_d' ),
    ) );

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_spacing_t', array(
        'transport' 			   => 'postMessage',
        'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_spacing_t' ),
    ) );

    $wp_customize->add_setting( 'influence_blog_typo_heading_' . $heading . '_spacing_m', array(
        'transport' 			   => 'postMessage',
        'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
        'default'                  => influence_blog_defaults( 'typo_heading_' . $heading . '_spacing_m' ),
    ) );

    $wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_heading_' . $heading . '_spacing', array(
        'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
        'section' 			       => $section,
        'type'                     => 'range-slider-two',
        'settings' 			       => array(
            'desktop' 	           => 'influence_blog_typo_heading_' . $heading . '_spacing_d',
            'tablet' 	           => 'influence_blog_typo_heading_' . $heading . '_spacing_t',
            'mobile' 	           => 'influence_blog_typo_heading_' . $heading . '_spacing_m',
        ),
        'input_attrs' 		       => $letter_spacing,
        'priority' 			       => $count,
    ) ) );

    $count = $count + 5;
}
