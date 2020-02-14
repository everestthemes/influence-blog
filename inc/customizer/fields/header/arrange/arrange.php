<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_arrange_header_section';

/*---------------------------------- Arrange info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_arrange_header_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_arrange_header_info', array(
    'label'                    => esc_html__( 'Notice', 'influence-blog' ),
    'description'              => __( 'Rearrange and enable or disable to display heading sections.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 10,
) ) );

/*---------------------------------- Arrange header optionss -----------------------------------*/

$arrange_header_options = influence_blog_arrange_header_options();

$arrange_header_option  = array();

foreach( $arrange_header_options as $key => $val ) {

   $arrange_header_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_header', array(
    'transport'         => 'refresh',
    'sanitize_callback' => 'sanitize_sortable_one',
    'default'           => influence_blog_sortable_defaults ( $arrange_header_options ),
) );

$wp_customize->add_control( new Sortable_One_Control( $wp_customize, 'influence_blog_arrange_header', array(
	'section'				=> $section,
    'choices'               => $arrange_header_option,
) ) );
