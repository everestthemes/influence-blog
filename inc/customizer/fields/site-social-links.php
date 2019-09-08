<?php
/**
 * Customizer Options Declaration For Site Social Links
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Social Links Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'site_social_links', //id
    esc_html__( 'Site Social Links', 'influence-blog' ), //title
    '', //desc
    '', //panel
    40 //priority
);

//facebook link
influence_blog_add_field( 
    'facebook_link', //id
    esc_html__( "Facebook Link", 'influence-blog'), //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'site_social_links', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

//instagram link
influence_blog_add_field( 
    'instagram_link', //id
    esc_html__( "Instagram Link", 'influence-blog'), //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'site_social_links', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

//twitter link
influence_blog_add_field( 
    'twitter_link', //id
    esc_html__( "Twitter Link", 'influence-blog'), //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'site_social_links', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

//youtube link
influence_blog_add_field( 
    'youtube_link', //id
    esc_html__( "Youtube Link", 'influence-blog'), //label
    '', //desc
    'url', //type ( text, number, url, select, ios )
    'site_social_links', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    '' //default
);

//display rss feed
influence_blog_add_field( 
    'display_rss_feed', //id
    esc_html__( "Display RSS Feed", 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'site_social_links', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);