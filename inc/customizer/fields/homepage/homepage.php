<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'static_front_page';

/*-----------------------------------------------------------------------------
							 Homepage options
-----------------------------------------------------------------------------*/

/*---------------------------------- Homepage Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_homepage_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_homepage_info', array(
    'label'                    => esc_html__( 'Recommended', 'influence-blog' ),
    'description'              => __( 'Select <code>your latest posts</code> as your homepage.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'active_callback'          => 'influence_blog_is_homepage_front_page',
    'priority'                 => 5,
) ) );
