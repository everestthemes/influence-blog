<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_middle_header_section';

/*---------------------------------- Top header info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_middle_header_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_middle_header_info', array(
    'label'                    => esc_html__( 'Notice', 'influence-blog' ),
    'description'              => __( 'Rearrange and enable or disable to display heading sections.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'active_callback'          => 'influence_blog_is_middle_header',
    'priority'                 => 10,
) ) );

/**
 * Customizer Repeater for add payment icon
 */
$wp_customize->add_setting( 'footer_Payment_icon',
    array(
     'sanitize_callback' => 'sanitize_repeater_two',
    )
);

$wp_customize->add_control(
    new Repeater_Two_Control( $wp_customize,
        'footer_Payment_icon',
            array(
                'label'   => esc_html__('Payment Icon','startkit'),
                'section' => $section,
                'add_field_label'                   => esc_html__( 'Add New Icon', 'startkit' ),
                'item_name'                         => esc_html__( 'Icon', 'startkit' ),
                'priority' => 2,

                'customizer_repeater_two_icon_control' => true,
                'customizer_repeater_two_link_control' => true,
            )
        )
    );
