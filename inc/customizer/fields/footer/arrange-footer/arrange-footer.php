<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_arrange_footer_section';

/*-----------------------------------------------------------------------------
							 Arrange Footer
-----------------------------------------------------------------------------*/

/*---------------------------------- Arrange info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_arrange_footer_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_arrange_footer_info', array(
    'label'                    => esc_html__( 'Notice', 'influence-blog' ),
    'description'              => __( 'Rearrange and enable or disable to display footer sections.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 5,
) ) );

/*---------------------------------- Arrange footer options -----------------------------------*/

$arrange_footer_options = influence_blog_arrange_footer_options();

$arrange_footer_option  = array();

foreach( $arrange_footer_options as $key => $val ) {

   $arrange_footer_option[ $key ] = $val[ 'label' ];
}

$disableKey = apply_filters( 'influence_blog_filter_footer_three_disable_key', 'footerThree' );

$wp_customize->add_setting( 'influence_blog_arrange_footer', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults ( $arrange_footer_options ),
) );

$wp_customize->add_control( new Influence_Blog_Sortable_One_Control( $wp_customize, 'influence_blog_arrange_footer', array(
	'section'				   => $section,
    'choices'                  => $arrange_footer_option,
    'disableKey'               => $disableKey,
    'priority'                 => 10,
) ) );
