<?php
/**
 * Customizer Options Declaration For Site Sidebar
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Site Sidebar Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'site_sidebar_section', //id
    esc_html__( 'Site Sidebar', 'influence-blog' ), //title
    '', //desc
    '', //panel
    20 //priority
);

//display breadcrumb
influence_blog_add_field( 
    'enable_sticky_sidebar', //id
    esc_html__( "Enable Sticky Sidebar", 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'site_sidebar_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);