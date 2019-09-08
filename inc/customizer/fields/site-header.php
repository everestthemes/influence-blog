<?php
/**
 * Customizer Options Declaration For Site Header
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Site Header Panel Options
-----------------------------------------------------------------------------*/

influence_blog_add_panel( 
    'site_header', //id
    esc_html__( 'Site Header', 'influence-blog' ), //title
    '', //desc
    10 //priority
);


/*-----------------------------------------------------------------------------
							Site Logo Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'site_logo_section', //id
    esc_html__( 'Site Logo', 'influence-blog' ), //title
    '', //desc
    'site_header', //panel
    10 //priority
);


/*-----------------------------------------------------------------------------
							Site Favicon Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'site_favicon_section', //id
    esc_html__( 'Site Favicon', 'influence-blog' ), //title
    '', //desc
    'site_header', //panel
    10 //priority
);


/*-----------------------------------------------------------------------------
							Site Header Image Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'site_header_image', //id
    esc_html__( 'Header Image', 'influence-blog' ), //title
    '', //desc
    'site_header', //panel
    10 //priority
);


/*-----------------------------------------------------------------------------
							Top Header Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'top_header_section', //id
    esc_html__( 'Top Header', 'influence-blog' ), //title
    '', //desc
    'site_header', //panel
    10 //priority
);

//display top header
influence_blog_add_field( 
    'display_top_header', //id
    esc_html__( "Display : Top Header", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display top menu
influence_blog_add_field( 
    'display_top_header_menu', //id
    esc_html__( "Display : Top Menu", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    'influence_blog_active_top_header', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display top social links
influence_blog_add_field( 
    'display_top_header_social_links', //id
    esc_html__( "Display : Social Links", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'top_header_section', //section
    '', //choices
    'influence_blog_active_top_header', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);


/*-----------------------------------------------------------------------------
							Main Menu Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'main_header_section', //id
    esc_html__( 'Main Header', 'influence-blog' ), //title
    '', //desc
    'site_header', //panel
    10 //priority
);

//display home icon
influence_blog_add_field( 
    'display_home_icon', //id
    esc_html__( "Display : Home Icon", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'main_header_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display search icon
influence_blog_add_field( 
    'display_search_icon', //id
    esc_html__( "Display : Search Icon", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'main_header_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);