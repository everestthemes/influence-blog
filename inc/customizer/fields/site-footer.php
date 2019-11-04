<?php
/**
 * Customizer Options Declaration For Site Footer
 *
 * @package Influence_Blog
 */


/*-----------------------------------------------------------------------------
							Footer Panel Options
-----------------------------------------------------------------------------*/

influence_blog_add_panel( 
    'site_footer_panel', //id
    esc_html__( 'Site Footer', 'influence-blog' ), //title
    '', //desc
    30 //priority
);


/*-----------------------------------------------------------------------------
							Contact Info Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'footer_contact_info_section', //id
    esc_html__( 'Contact Info', 'influence-blog' ), //title
    '', //desc
    'site_footer_panel', //panel
    10 //priority
);

//display footer contact info
influence_blog_add_field( 
    'display_footer_contact_info', //id
    esc_html__( "Display : Contact Info", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'footer_contact_info_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);

//footer contact info title
influence_blog_add_field( 
    'footer_contact_info_title', //id
    esc_html__( "Contact Info : Title", 'influence-blog' ), //label
    '', //desc
    'text', //type ( text, number, url, select, ios )
    'footer_contact_info_section', //section
    '', //choices
    'influence_blog_active_footer_contact_info', //active_callback
    '', //min
    '', //max
    '', //step
    '', //control ( image, toggle, slider, multiple, color, upload )
    'Get In Touch' //default
);

// footer text
$wp_customize->add_setting( 'influence_blog_footer_contact_info_description',
	array(
		'default'       		=> '',
		'sanitize_callback'		=> 'sanitize_textarea_field',
		'transport'				=> 'refresh',
	)
);
$wp_customize->add_control( 'influence_blog_footer_contact_info_description',
    array(
		'label'      			=> esc_html__( 'Contact Info : Description', 'influence-blog' ),
		'section'    			=> 'influence_blog_footer_contact_info_section',
		'type'		 			=> 'textarea',
        'active_callback'       => 'influence_blog_active_footer_contact_info',
    )
);

//display footer contact info social links
influence_blog_add_field( 
    'display_footer_contact_info_social_links', //id
    esc_html__( "Contact Info : Display Social Links", 'influence-blog' ), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'footer_contact_info_section', //section
    '', //choices
    'influence_blog_active_footer_contact_info', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);


/*-----------------------------------------------------------------------------
							Scroll Top Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section(
    'footer_scroll_top_section', //id
    esc_html__( 'Scroll Top', 'influence-blog' ), //title
    '', //desc
    'site_footer_panel', //panel
    10 //priority
);

//display footer scroll top
influence_blog_add_field(
    'display_footer_scroll_top', //id
    esc_html__( 'Display : Scroll Top', 'influence-blog'), //label
    '', //desc
    'ios', //type ( text, number, url, select, ios )
    'footer_scroll_top_section', //section
    '', //choices
    '', //active_callback
    '', //min
    '', //max
    '', //step
    'toggle', //control ( image, toggle, slider, multiple, color, upload )
    true //default
);


/*-----------------------------------------------------------------------------
							Copyright Text Section Options
-----------------------------------------------------------------------------*/

influence_blog_add_section( 
    'footer_copyright_text_section', //id
    esc_html__( 'Copyright Text', 'influence-blog' ), //title
    '', //desc
    'site_footer_panel', //panel
    10 //priority
);

//Option : Footer Copyright Text
$wp_customize->add_setting( 'influence_blog_footer_copyright_text', array(
    'sanitize_callback'        => 'influence_blog_sanitize_copyright_credit',
    'default'                  => '',
) );

$wp_customize->add_control( 'influence_blog_footer_copyright_text', array(
    'label'                    => esc_html__( 'Copyright Text', 'influence-blog' ),
    'description'		       => esc_html__( 'You can use <a> & <span> tags with the copyright and credit text.', 'influence-blog' ),
    'section'                  => 'influence_blog_footer_copyright_text_section',
    'type'                     => 'text',
) );
