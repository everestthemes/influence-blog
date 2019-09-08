<?php
/**
 * Customizer Options Declaration For Site Blog Page
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Blog Page Panel Options
-----------------------------------------------------------------------------*/

influence_blog_add_panel( 
    'blog_page_panel', //id
    esc_html__( 'Blog Page', 'influence-blog' ), //title
    '', //desc
    20 //priority
);


/*-----------------------------------------------------------------------------
							Grid Two Col Layout Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'blog_page_grid_two_col_section', //id
    esc_html__( 'Grid Two Column Layout', 'influence-blog' ), //title
    '', //desc
    'blog_page_panel', //panel
    10 //priority
);

//display blog page grid two col layout
influence_blog_add_field( 
    'display_blog_page_grid_two_col_layout', //id
    esc_html__( "Display : Layout", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_grid_two_col_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//blog page grid two col layout title
influence_blog_add_field( 
    'blog_page_grid_two_col_layout_title', //id
    esc_html__( "Layout : Title", 'influence-blog' ), //label
    '', //desc
    'text', //type ( text, number, url, select, ios )
    'blog_page_grid_two_col_section', //section
    '', //choices
    'influence_blog_active_blog_page_grid_two_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'Most Recent' //default
);

//blog page grid two col layout post type
influence_blog_add_field( 
    'blog_page_grid_two_col_layout_post_type', //id
    esc_html__( "Layout : Post Type", 'influence-blog' ), //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'blog_page_grid_two_col_section', //section
    $post_types, //choices
    'influence_blog_active_blog_page_grid_two_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'recent_posts' //default
);

//blog page grid two col layout category
influence_blog_add_field( 
    'blog_page_grid_two_col_layout_category', //id
    esc_html__( "Layout : Category", 'influence-blog' ), //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'blog_page_grid_two_col_section', //section
    $categories, //choices
    'influence_blog_active_blog_page_grid_two_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'uncategorized' //default
);

//blog page grid two col layout post number
influence_blog_add_field( 
    'blog_page_grid_two_col_layout_post_number', //id
    esc_html__( 'Layout : No. of Posts', 'influence-blog'), //label
    esc_html__( 'Maximum 10 items and minimum 2 items can be set for this layout.', 'influence-blog'), //desc
    'number', //type ( text, number, url, select, ios )
    'blog_page_grid_two_col_section', //section
    '', //choices
    'influence_blog_active_blog_page_grid_two_col_layout', //active_callback
    '2', //min
    '10', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '6' //default
);

//display blog page grid two col layout category
influence_blog_add_field( 
    'display_blog_page_grid_two_col_layout_category', //id
    esc_html__( 'Layout : Display Category', 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_grid_two_col_section', //section
    '', //choices
    'influence_blog_active_blog_page_grid_two_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display blog page grid two col layout posted date
influence_blog_add_field( 
    'display_blog_page_grid_two_col_layout_posted_date', //id
    esc_html__( 'Layout : Display Posted Date', 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_grid_two_col_section', //section
    '', //choices
    'influence_blog_active_blog_page_grid_two_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);


/*-----------------------------------------------------------------------------
							Grid Three Col Layout Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'blog_page_grid_three_col_section', //id
    esc_html__( 'Grid Three Column Layout', 'influence-blog' ), //title
    '', //desc
    'blog_page_panel', //panel
    10 //priority
);

//display blog page grid three col layout
influence_blog_add_field( 
    'display_blog_page_grid_three_col_layout', //id
    esc_html__( "Display : Layout", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_grid_three_col_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//blog page grid three col layout title
influence_blog_add_field( 
    'blog_page_grid_three_col_layout_title', //id
    esc_html__( "Layout : Title", 'influence-blog' ), //label
    '', //desc
    'text', //type ( text, number, url, select, ios )
    'blog_page_grid_three_col_section', //section
    '', //choices
    'influence_blog_active_blog_page_grid_three_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'Popular Post' //default
);

//blog page grid three col layout post type
influence_blog_add_field( 
    'blog_page_grid_three_col_layout_post_type', //id
    esc_html__( "Layout : Post Type", 'influence-blog' ), //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'blog_page_grid_three_col_section', //section
    $post_types, //choices
    'influence_blog_active_blog_page_grid_three_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'popular_posts' //default
);

//blog page grid three col layout category
influence_blog_add_field( 
    'blog_page_grid_three_col_layout_category', //id
    esc_html__( "Layout : Category", 'influence-blog' ), //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'blog_page_grid_three_col_section', //section
    $categories, //choices
    'influence_blog_active_blog_page_grid_three_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'uncategorized' //default
);

//blog page grid three col layout post number
influence_blog_add_field( 
    'blog_page_grid_three_col_layout_post_number', //id
    esc_html__( 'Layout : No. of Posts', 'influence-blog'), //label
    esc_html__( 'Maximum 9 items and minimum 3 items can be set for this layout.', 'influence-blog'), //desc
    'number', //type ( text, number, url, select, ios )
    'blog_page_grid_three_col_section', //section
    '', //choices
    'influence_blog_active_blog_page_grid_three_col_layout', //active_callback
    '3', //min
    '9', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '3' //default
);

//display blog page grid three col layout category
influence_blog_add_field( 
    'display_blog_page_grid_three_col_layout_category', //id
    esc_html__( 'Layout : Display Category', 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_grid_three_col_section', //section
    '', //choices
    'influence_blog_active_blog_page_grid_three_col_layout', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);


/*-----------------------------------------------------------------------------
							Blog Page Common Options Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'blog_page_common_options_section', //id
    esc_html__( 'Common Options', 'influence-blog' ), //title
    '', //desc
    'blog_page_panel', //panel
    10 //priority
);

//display blog page pagination
influence_blog_add_field( 
    'display_blog_page_pagination', //id
    esc_html__( 'Display : Blog Page Pagination', 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_common_options_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//blog page pagination for
influence_blog_add_field( 
    'blog_page_pagination_for', //id
    esc_html__( "Select Pagination", 'influence-blog' ), //label
    esc_html__( 'Select the pagination for which layout you want to show. You can show pagination for only one layout.', 'influence-blog' ), //desc
    'select', //type ( text, number, url, select, ios )
    'blog_page_common_options_section', //section
    $pagination_for, //choices
    'influence_blog_active_blog_page_pagination', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'grid_two' //default
);

//blog page sidebar position
influence_blog_add_field( 
    'blog_page_sidebar_position', //id
    '', //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'blog_page_common_options_section', //section
    $sidebar_position, //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'image', //control ( image, toggle, slider, multiple, color, upload )
    'right' //default
);


/*-----------------------------------------------------------------------------
							Blog Page About Info Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'blog_page_about_info_section', //id
    esc_html__( 'About Info', 'influence-blog' ), //title
    '', //desc
    'blog_page_panel', //panel
    10 //priority
);

//display about info
influence_blog_add_field( 
    'display_blog_page_about_info', //id
    esc_html__( 'Display : About Info', 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'blog_page_about_info_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//about info logo
$wp_customize->add_setting( 'influence_blog_blog_page_about_info_logo', array(
	'sanitize_callback' => 'influence_blog_sanitize_image'
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'influence_blog_blog_page_about_info_logo', array(
    'label'       		=> esc_html__( 'About Info : Logo', 'influence-blog' ),
    'description' 		=> sprintf( esc_html__( 'Recommended size: %1$dpx x %2$dpx ', 'influence-blog' ), 360, 115 ),
    'section'     		=> 'influence_blog_blog_page_about_info_section',
    'active_callback'   => 'influence_blog_active_blog_page_about_info',
) ) );

//about info description
$wp_customize->add_setting( 'influence_blog_blog_page_about_info_description', array(
		'default'       		=> '',
		'sanitize_callback'		=> 'sanitize_textarea_field',
		'transport'				=> 'refresh',
) );

$wp_customize->add_control( 'influence_blog_blog_page_about_info_description', array(
		'label'      			=> esc_html__( 'About Info : Description', 'influence-blog' ),
		'section'    			=> 'influence_blog_blog_page_about_info_section',
		'type'		 			=> 'textarea',
        'active_callback'       => 'influence_blog_active_blog_page_about_info',
) );

//about info contact title
influence_blog_add_field( 
    'blog_page_about_info_contact_title', //id
    esc_html__( 'About Info : Contact Title', 'influence-blog'), //label
    '', //desc
    'text', //type ( text, number, url, select, ios )
    'blog_page_about_info_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'Contact us :' //default
);

//about info contact email
$wp_customize->add_setting( 'influence_blog_blog_page_about_info_contact_email', array(
		'default'       		=> '',
		'sanitize_callback'		=> 'sanitize_email',
		'transport'				=> 'refresh',
) );

$wp_customize->add_control( 'influence_blog_blog_page_about_info_contact_email', array(
		'label'      			=> esc_html__( 'About Info : Contact Email ID', 'influence-blog' ),
		'description'   		=> esc_html__( 'Add E-mail here(Use Correct Email Format)', 'influence-blog' ),
		'section'    			=> 'influence_blog_blog_page_about_info_section',
		'type'		 			=> 'text',
        'active_callback'       => 'influence_blog_active_blog_page_about_info',
) );