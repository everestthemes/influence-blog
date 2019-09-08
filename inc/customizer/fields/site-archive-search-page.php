<?php
/**
 * Customizer Options Declaration For Site Archive/Search Page
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Archive/Search Page Panel Options
-----------------------------------------------------------------------------*/

influence_blog_add_panel( 
    'archive_search_page_panel', //id
    esc_html__( 'Archive/Search Page', 'influence-blog' ), //title
    '', //desc
    20 //priority
);


/*-----------------------------------------------------------------------------
							Archive Page Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'archive_page_section', //id
    esc_html__( 'Archive Page', 'influence-blog' ), //title
    '', //desc
    'archive_search_page_panel', //panel
    10 //priority
);

//display archive page category
influence_blog_add_field( 
    'display_archive_page_category', //id
    esc_html__( "Display : Category", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display archive page posted date
influence_blog_add_field( 
    'display_archive_page_posted_date', //id
    esc_html__( "Display : Posted Date", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//archive page sidebar position
influence_blog_add_field( 
    'archive_page_sidebar_position', //id
    '', //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'archive_page_section', //section
    $sidebar_position, //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'image', //control ( image, toggle, slider, multiple, color, upload )
    'right' //default
);


/*-----------------------------------------------------------------------------
							Search Page Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'search_page_section', //id
    esc_html__( 'Search Page', 'influence-blog' ), //title
    '', //desc
    'archive_search_page_panel', //panel
    10 //priority
);

//display search page category
influence_blog_add_field( 
    'display_search_page_category', //id
    esc_html__( "Display : Category", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'search_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display search page posted date
influence_blog_add_field( 
    'display_search_page_posted_date', //id
    esc_html__( "Display : Posted Date", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'search_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//search page sidebar position
influence_blog_add_field( 
    'search_page_sidebar_position', //id
    '', //label
    '', //desc
    'select', //type ( text, number, url, select, ios )
    'search_page_section', //section
    $sidebar_position, //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'image', //control ( image, toggle, slider, multiple, color, upload )
    'right' //default
);