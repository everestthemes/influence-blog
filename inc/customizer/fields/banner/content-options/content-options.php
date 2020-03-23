<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_banner_content_options_section';

$option_tabs     = influence_blog_tab_one_array();

$categories = influence_blog_categories_array();

$posts_no = influence_blog_posts_number_attrs_array();

$order_by = influence_blog_orderby_array();

$sort_order = influence_blog_sort_order_array();

$button_one_array = array(
    'influence_blog_banner_content_options_arrange_heading' => array(),
    'influence_blog_arrange_banner_content_options_one' => array(),
    'influence_blog_arrange_banner_content_options_two' => array(),
    'influence_blog_banner_content_options_query_heading' => array(),
    'influence_blog_banner_content_options_query_toggle' => array(),
    'influence_blog_banner_content_options_cat_select_info' => array(),
    'influence_blog_banner_category' => array(),
    'influence_blog_banner_orderby' => array(),
    'influence_blog_banner_sort_order' => array(),
    'influence_blog_banner_content_options_post_no_info' => array(),
    'influence_blog_banner_posts_number' => array(),
    'influence_blog_banner_content_options_one_heading' => array(),
    'influence_blog_banner_background_text' => array(),
    'influence_blog_banner_read_more_text' => array(),
    'influence_blog_banner_content_options_two_heading' => array(),
    'influence_blog_banner_content_options_two_slider_col' => array(),
    'influence_blog_banner_content_options_two_ads_heading' => array(),
    'influence_blog_banner_content_options_two_ads_toggle' => array(),
    'influence_blog_banner_content_options_two_ads_col' => array(),
    'influence_blog_banner_content_options_two_ads_upload_image' => array(),
    'influence_blog_banner_content_options_two_ads_title' => array(),
    'influence_blog_banner_content_options_two_ads_link' => array(),
    'influence_blog_banner_content_options_two_ads_link_rel' => array(),
    'influence_blog_banner_content_options_two_ads_link_tab_toggle' => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_banner_content_options_button_one_array', $button_one_array );

$button_two_array = array(
);

$button_two_array = apply_filters( 'influence_blog_filter_banner_content_options_button_two_array', $button_two_array );

$button_three_array = array(
);

$button_three_array = apply_filters( 'influence_blog_filter_banner_content_options_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Banner content options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Influence_Blog_Tab_One_Control( $wp_customize, 'influence_blog_banner_content_options_tabs', array(
    'section'                  => $section,
    'tabs'                     => $option_tabs,
    'controls'                 => array(
        'button_one'           => $button_one_array,
        'button_two'           => $button_two_array,
        'button_three'         => $button_three_array,
    ),
    'priority'                 => 5,
) ) );

/*-----------------------------------------------------------------------------
							 General options
-----------------------------------------------------------------------------*/

/*---------------------------------- Banner content options arrange heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_arrange_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_banner_content_options_arrange_heading', array(
    'label'                    => esc_html__( 'Arrange Elements', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Arrange banner one content options options -----------------------------------*/

$arrange_banner_one_content_options = influence_blog_arrange_banner_one_content_options();

$arrange_banner_one_content_option  = array();

foreach( $arrange_banner_one_content_options as $key => $val ) {

   $arrange_banner_one_content_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_banner_content_options_one', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults ( $arrange_banner_one_content_options ),
) );

$wp_customize->add_control( new Influence_Blog_Sortable_One_Control( $wp_customize, 'influence_blog_arrange_banner_content_options_one', array(
	'section'				   => $section,
    'choices'                  => $arrange_banner_one_content_option,
    'priority'                 => 15,
    'active_callback'          => 'influence_blog_is_banner_layout_options_one',
) ) );

/*---------------------------------- Arrange banner two content options options -----------------------------------*/

$arrange_banner_two_content_options = influence_blog_arrange_banner_two_content_options();

$arrange_banner_two_content_option  = array();

foreach( $arrange_banner_two_content_options as $key => $val ) {

   $arrange_banner_two_content_option[ $key ] = $val[ 'label' ];
}

$wp_customize->add_setting( 'influence_blog_arrange_banner_content_options_two', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'sanitize_sortable_one',
    'default'                  => influence_blog_sortable_defaults ( $arrange_banner_two_content_options ),
) );

$wp_customize->add_control( new Influence_Blog_Sortable_One_Control( $wp_customize, 'influence_blog_arrange_banner_content_options_two', array(
	'section'				   => $section,
    'choices'                  => $arrange_banner_two_content_option,
    'priority'                 => 20,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );

/*---------------------------------- Banner content options query heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_query_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_banner_content_options_query_heading', array(
    'label'                    => esc_html__( 'Query Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'banner-content-options-query-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => false,
    'priority'                 => 30,
) ) );

/*---------------------------------- Banner content options query toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_query_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'banner_content_options_query_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Three_Control ( $wp_customize, 'influence_blog_banner_content_options_query_toggle', array(
    'label'                    => esc_html__( 'Enable Query', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 32,
) ) );

/*---------------------------------- Banner content category select info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_cat_select_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_banner_content_options_cat_select_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Hold <strong>"Control"</strong> and click for multiple choices.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 35,
    'active_callback'          => 'influence_blog_is_banner_content_options_query_enable',
) ) );

/*---------------------------------- Banner select category -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_category', array(
    'sanitize_callback'        => 'sanitize_select_one',
    'default'                  => influence_blog_defaults( 'banner_category' ),
) );

$wp_customize->add_control( new Influence_Blog_Select_One_Control( $wp_customize, 'influence_blog_banner_category', array(
    'label'                    => esc_html__( 'Select Category', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select-one',
    'choices'                  => $categories,
    'priority'                 => 40,
    'active_callback'          => 'influence_blog_is_banner_content_options_query_enable',
) ) );

/*---------------------------------- Banner select orderby -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_orderby', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'banner_orderby' ),
) );

$wp_customize->add_control( 'influence_blog_banner_orderby', array(
    'label'                    => esc_html__( 'Order By', 'influence-blog' ),
    'description'              => esc_html__( 'Select how to sort retrieved posts.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $order_by,
    'priority'                 => 45,
    'active_callback'          => 'influence_blog_is_banner_content_options_query_enable',
) );

/*---------------------------------- Banner select sort order -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_sort_order', array(
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'banner_sort_order' ),
) );

$wp_customize->add_control( 'influence_blog_banner_sort_order', array(
    'label'                    => esc_html__( 'Sort Order', 'influence-blog' ),
    'description'              => esc_html__( 'Designates the ascending or descending order', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $sort_order,
    'priority'                 => 50,
    'active_callback'          => 'influence_blog_is_banner_content_options_query_enable',
) );

/*---------------------------------- Banner content posts number info -----------------------------------*/

$post_no_description = apply_filters( 'influence_blog_filter_post_no_description', __( 'Minimum 1 &amp; maximum 6 can be set.', 'influence-blog' ) );

$wp_customize->add_setting( 'influence_blog_banner_content_options_post_no_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Info_One_Control ( $wp_customize, 'influence_blog_banner_content_options_post_no_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => $post_no_description,
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 55,
) ) );

/*---------------------------------- Banner posts number -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_posts_number', array(
    'sanitize_callback'        => 'influence_blog_sanitize_range',
    'default'                  => influence_blog_defaults( 'banner_posts_number' ),
) );

$wp_customize->add_control( 'influence_blog_banner_posts_number', array(
    'label'                    => esc_html__( 'Number of Posts', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'number',
    'input_attrs'              => $posts_no,
    'priority'                 => 60,
) );

/*---------------------------------- Banner content options one heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_one_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_banner_content_options_one_heading', array(
    'label'                    => esc_html__( 'Field Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'banner-content-options-one-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 65,
    'active_callback'          => 'influence_blog_is_banner_layout_options_one',
) ) );

/*---------------------------------- Banner background text -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_background_text', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'banner_background_text' ),
) );

$wp_customize->add_control( 'influence_blog_banner_background_text', array(
    'label'                    => esc_html__( 'Background Text', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'text',
    'priority'                 => 70,
    'active_callback'          => 'influence_blog_is_banner_layout_options_one',
) );

/*---------------------------------- Banner read more text -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_read_more_text', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'banner_read_more_text' ),
) );

$wp_customize->add_control( 'influence_blog_banner_read_more_text', array(
    'label'                    => esc_html__( 'Button Text', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'text',
    'priority'                 => 75,
    'active_callback'          => 'influence_blog_is_banner_layout_options_one',
) );

/*---------------------------------- Banner content options two heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_banner_content_options_two_heading', array(
    'label'                    => esc_html__( 'Field Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'banner-content-options-two-heading' ),
    'controls_to_wrap'         => 9,
    'expanded'                 => false,
    'priority'                 => 80,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );

/*---------------------------------- Banner content options two slider column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_slider_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_slider_col' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_banner_content_options_two_slider_col', array(
    'label'                    => esc_html__( 'Slider Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 85,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );

/*---------------------------------- Banner content options two ads heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Influence_Blog_Heading_One_Control( $wp_customize, 'influence_blog_banner_content_options_two_ads_heading', array(
    'label'                    => esc_html__( 'Advertisement Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'banner-content-options-two-ads-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => true,
    'priority'                 => 90,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );

/*---------------------------------- Banner content options two ads toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_ads_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Three_Control ( $wp_customize, 'influence_blog_banner_content_options_two_ads_toggle', array(
    'label'                    => esc_html__( 'Display Advertisement', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 95,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );

/*---------------------------------- Banner content options two ads column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_ads_col' ),
) );

$wp_customize->add_control( new Influence_Blog_Range_Slider_One_Control ( $wp_customize, 'influence_blog_banner_content_options_two_ads_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 97,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );

/*---------------------------------- Banner content options two ads image -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_upload_image', array(
    'sanitize_callback'        => 'influence_blog_sanitize_image',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_ads_upload_image' ),
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'influence_blog_banner_content_options_two_ads_upload_image', array(
    'label'       		       => esc_html__( 'Upload Image', 'influence-blog' ),
    'section'     		       => $section,
    'priority'                 => 100,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );

/*---------------------------------- Banner content options two ads link -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_title', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_ads_title' ),
) );

$wp_customize->add_control( 'influence_blog_banner_content_options_two_ads_title', array(
    'label'                    => esc_html__( 'Title', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'text',
    'priority'                 => 105,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) );

/*---------------------------------- Banner content options two ads link -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_link', array(
    'sanitize_callback'        => 'esc_url_raw',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_ads_link' ),
) );

$wp_customize->add_control( 'influence_blog_banner_content_options_two_ads_link', array(
    'label'                    => esc_html__( 'Link', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'url',
    'priority'                 => 110,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) );

/*---------------------------------- Banner content options two ads link rel -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_link_rel', array(
    'sanitize_callback'        => 'sanitize_text_field',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_ads_link_rel' ),
) );

$wp_customize->add_control( 'influence_blog_banner_content_options_two_ads_link_rel', array(
    'label'                    => esc_html__( 'Link Rel', 'influence-blog' ),
	'section'				   => $section,
    'type'                     => 'text',
    'priority'                 => 115,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) );

/*---------------------------------- Banner content options two ads new tab toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_banner_content_options_two_ads_link_tab_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'banner_content_options_two_ads_link_tab_toggle' ),
) );

$wp_customize->add_control( new Influence_Blog_Toggle_Three_Control ( $wp_customize, 'influence_blog_banner_content_options_two_ads_link_tab_toggle', array(
    'label'                    => esc_html__( 'Open in new tab', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_is_banner_layout_options_two',
) ) );
