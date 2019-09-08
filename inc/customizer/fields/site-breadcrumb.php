<?php
/**
 * Customizer Options Declaration For Site Breadcrumb
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Site Breadcrumb Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'site_breadcrumb_section', //id
    esc_html__( 'Site Breadcrumb', 'influence-blog' ), //title
    '', //desc
    '', //panel
    20 //priority
);

//display breadcrumb
influence_blog_add_field( 
    'display_breadcrumb', //id
    esc_html__( "Display : Breadcrumb", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'site_breadcrumb_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);