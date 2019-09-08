<?php
/**
 * Customizer Options Declaration For Site Banner
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Banner Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'banner_section', //id
    esc_html__( 'Site Banner', 'influence-blog' ), //title
    '', //desc
    '', //panel
    10 //priority
);

//display banner
influence_blog_add_field( 
    'display_banner', //id
    esc_html__( "Display : Banner", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'banner_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//banner category
influence_blog_add_field( 
    'banner_category', //id
    esc_html__( "Banner : Category", 'influence-blog' ), //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'banner_section', //section
    $categories, //choices
    'influence_blog_active_banner', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'uncategorized' //default
);

//banner post number
influence_blog_add_field( 
    'banner_post_number', //id
    esc_html__( 'Banner : No. of Posts', 'influence-blog'), //label
    esc_html__( 'Maximum 5 items and minimum 3 items can be set for banner.', 'influence-blog'), //desc
    'number', //type ( text, number, url, select, ios )
    'banner_section', //section
    '', //choices
    'influence_blog_active_banner', //active_callback
    '3', //min
    '5', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '4' //default
);

//banner background text
influence_blog_add_field( 
    'banner_background_text', //id
    esc_html__( 'Banner : Background Text', 'influence-blog'), //label
    '', //desc
    'text', //type ( text, number, url, select, ios )
    'banner_section', //section
    '', //choices
    'influence_blog_active_banner', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'Passion of' //default
);

//display banner category
influence_blog_add_field( 
    'display_banner_category', //id
    esc_html__( 'Banner : Display Category', 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'banner_section', //section
    '', //choices
    'influence_blog_active_banner', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);