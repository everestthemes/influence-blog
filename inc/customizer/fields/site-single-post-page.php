<?php
/**
 * Customizer Options Declaration For Site Single Post/Page
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Single Post/Page Panel Options
-----------------------------------------------------------------------------*/

influence_blog_add_panel( 
    'single_post_page_panel', //id
    esc_html__( 'Single Post/Page', 'influence-blog' ), //title
    '', //desc
    20 //priority
);


/*-----------------------------------------------------------------------------
							Single Post Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'single_post_section', //id
    esc_html__( 'Single Post', 'influence-blog' ), //title
    '', //desc
    'single_post_page_panel', //panel
    10 //priority
);

//display single post category
influence_blog_add_field( 
    'display_single_post_category', //id
    esc_html__( "Display : Category", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display single post posted date
influence_blog_add_field( 
    'display_single_post_posted_date', //id
    esc_html__( "Display : Posted Date", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display single post tags
influence_blog_add_field( 
    'display_single_post_tags', //id
    esc_html__( "Display : Tags", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display single post author section
influence_blog_add_field( 
    'display_single_post_author_section', //id
    esc_html__( "Display : Author Section", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//display single post related posts section
influence_blog_add_field( 
    'display_single_post_related_posts_section', //id
    esc_html__( "Display : Related Post Section", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//single post related posts section title
influence_blog_add_field( 
    'single_post_related_posts_section_title', //id
    esc_html__( "Section : Title", 'influence-blog' ), //label
    '', //desc
    'text', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    'influence_blog_active_related_post_section', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'Related Posts' //default
);

//single post related posts section post number
influence_blog_add_field( 
    'single_post_related_posts_section_post_no', //id
    esc_html__( "Section : No. of Posts", 'influence-blog' ), //label
    esc_html__( 'Maximum 6 items and minimum 1 items can be set on related posts.', 'influence-blog'), //desc
    'number', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    'influence_blog_active_related_post_section', //active_callback
    '1', //min
    '6', //max
    '1', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '3' //default
);

//display single post related posts section
influence_blog_add_field( 
    'display_single_post_related_posts_section_category', //id
    esc_html__( "Section : Display Category", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'single_post_section', //section
    '', //choices
    'influence_blog_active_related_post_section', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);


/*-----------------------------------------------------------------------------
							Single Page Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'single_page_section', //id
    esc_html__( 'Single Page', 'influence-blog' ), //title
    '', //desc
    'single_post_page_panel', //panel
    10 //priority
);

//display single page posted date
influence_blog_add_field( 
    'display_single_page_posted_date', //id
    esc_html__( "Display : Posted Date", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'single_page_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);