<?php
/**
 * Customizer Options Declaration For Site Excerpt Length
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Excerpt Length Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'site_excerpt_length_section', //id
    esc_html__( 'Site Excerpt Length', 'influence-blog' ), //title
    '', //desc
    '', //panel
    40 //priority
);

//excerpt length
influence_blog_add_field( 
    'excerpt_length', //id
    esc_html__( "Excerpt Length", 'influence-blog'), //label
    esc_html__( 'Maximum excerpt length 40 and minimum excerpt length 20 can be set.', 'influence-blog'), //desc
    'number', //type ( text, number, url, select, ios )
    'site_excerpt_length_section', //section
    '', //choices
    '', //active_callback
    '20', //min
    '40', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '25' //default
);