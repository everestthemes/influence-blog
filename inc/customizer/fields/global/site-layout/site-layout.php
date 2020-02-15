<?php
/**
 * Customizer Site layout Options Declaration
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$section  = 'influence_blog_global_site_layout_section';

$tabs     = influence_blog_tab_one_array();

$layout_styles   = influence_blog_site_layout_style_array();

$container_styles   = influence_blog_site_layout_container_style_array();

$design_options   = influence_blog_site_layout_style_design_options_array();

$button_one_array = array(
    'influence_blog_site_layout_style_heading'      => array(),
    'influence_blog_site_layout_style_info'         => array(),
    'influence_blog_site_layout_style'              => array(),
    'influence_blog_site_layout_container_heading'  => array(),
    'influence_blog_site_layout_container_info'     => array(),
    'influence_blog_site_layout_container_style'    => array(),
);

$button_one_array = apply_filters( 'influence_blog_filter_site_layout_button_one_array', $button_one_array );

$button_two_array = array(
    'influence_blog_site_layout_style_design_heading'    => array(),
    'influence_blog_site_layout_style_design_is_image_info'    => array(),
    'influence_blog_site_layout_style_design_options'    => array(),
    'background_image'    => array(),
    'background_preset'    => array(),
    'background_position'    => array(),
    'background_size'    => array(),
    'background_size'    => array(),
    'background_repeat'    => array(),
    'background_attachment'    => array(),
    'background_color'    => array(),
    'background_color'    => array(),
    'influence_blog_site_layout_style_design_outside'     => array(),
    'influence_blog_site_layout_style_design_inside'      => array(),
    'influence_blog_site_layout_style_design_box_shadow_toggle' => array(),
    'influence_blog_site_layout_container_design_heading' => array(),
    'influence_blog_site_layout_container_design_info'    => array(),
    'influence_blog_site_layout_container_design_bg'      => array(),
);

$button_two_array = apply_filters( 'influence_blog_filter_site_layout_button_two_array', $button_two_array );

$button_three_array = array(
    'influence_blog_site_layout_advance_info'              => array(),
    'influence_blog_site_layout_advance_toggle'            => array(),
    'influence_blog_site_layout_style_advance_heading'     => array(),
    'influence_blog_site_layout_style_advance_p'           => array(),
    'influence_blog_site_layout_style_advance_box_m'       => array(),
    'influence_blog_site_layout_style_advance_f_m'         => array(),
    'influence_blog_site_layout_style_advance_boxed_width' => array(),
    'influence_blog_site_layout_style_advance_boxed_border_radius' => array(),
    'influence_blog_site_layout_style_advance_boxed_border_width' => array(),
    'influence_blog_site_layout_style_advance_boxed_border_color' => array(),
    'influence_blog_site_layout_container_advance_heading' => array(),
    'influence_blog_site_layout_container_advance_b_p'     => array(),
    'influence_blog_site_layout_container_advance_b_m'     => array(),
);

$button_three_array = apply_filters( 'influence_blog_filter_site_layout_button_three_array', $button_three_array );

/*-----------------------------------------------------------------------------
							 Site layout options
-----------------------------------------------------------------------------*/

/*---------------------------------- Tabs -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_tabs', array(
    'sanitize_callback'        => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control( new Tab_One_Control( $wp_customize, 'influence_blog_site_layout_tabs', array(
    'section'                  => $section,
    'tabs'                     => $tabs,
    'controls'                 => array(
        'button_one'           => $button_one_array,
        'button_two'           => $button_two_array,
        'button_three'         => $button_three_array,
    ),
    'priority'                 => 5,
) ) );

/*-----------------------------------------------------------------------------
							 General options
-----------------------------------------------------------------------------*/

/*---------------------------------- Layout Style Heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_site_layout_style_heading', array(
    'label'                    => esc_html__( 'Layout Style Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 10,
) ) );

/*---------------------------------- Layout Style Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_site_layout_style_info', array(
    'label'                    => esc_html__( 'Layout Style', 'influence-blog' ),
    'description'              => __( 'Choose global site style on all site pages.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'align-center',
    'priority'                 => 15,
) ) );

/*---------------------------------- Layout style -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style', array(
    'sanitize_callback'        => 'sanitize_button_one',
    'default'                  => influence_blog_defaults( 'site_layout_style' ),
) );

$wp_customize->add_control( new Button_One_Control ( $wp_customize, 'influence_blog_site_layout_style', array(
    'section'                  => $section,
    'type'                     => 'button-one',
    'choices' 		           => $layout_styles,
    'priority'                 => 20,
) ) );

/*---------------------------------- Container Style Heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_site_layout_container_heading', array(
    'label'                    => esc_html__( 'Container Style Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'site-layout-container-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 30,
) ) );

/*---------------------------------- Container Style Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_site_layout_container_info', array(
    'label'                    => esc_html__( 'Container Style', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'schedule',
    'priority'                 => 40,
) ) );

/*---------------------------------- Container style -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_style', array(
    'sanitize_callback'        => 'sanitize_button_one',
    'default'                  => influence_blog_defaults( 'site_layout_container_style' ),
) );

$wp_customize->add_control( new Button_One_Control ( $wp_customize, 'influence_blog_site_layout_container_style', array(
    'section'                  => $section,
    'type'                     => 'button-one',
    'choices' 		           => $container_styles,
    'priority'                 => 45,
) ) );

/*-----------------------------------------------------------------------------
							 Design options
-----------------------------------------------------------------------------*/

/*---------------------------------- Layout style heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_design_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_site_layout_style_design_heading', array(
    'label'                    => esc_html__( 'Layout Style Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'site-layout-style-design-heading' ),
    'controls_to_wrap'         => 12,
    'expanded'                 => true,
    'priority'                 => 50,
) ) );

/*---------------------------------- Layout style is wide and selected image info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_design_is_image_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_site_layout_style_design_is_image_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => esc_html__( 'Image is only suitable for Boxed and Framed layouts.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'schedule',
    'priority'                 => 50,
    'active_callback'          => 'influence_blog_is_site_layout_design_options_image_wide',
) ) );

/*---------------------------------- Layout style for image/color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_design_options', array(
    'sanitize_callback'        => 'sanitize_button_one',
    'default'                  => influence_blog_defaults( 'site_layout_style_design_options' ),
) );

$wp_customize->add_control( new Button_One_Control ( $wp_customize, 'influence_blog_site_layout_style_design_options', array(
    'section'                  => $section,
    'type'                     => 'button-one',
    'choices' 		           => $design_options,
    'priority'                 => 55,
) ) );

/*---------------------------------- Layout style desing for outside color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_design_outside', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'site_layout_style_design_outside' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_site_layout_style_design_outside', array(
    'label'                    => esc_html__( 'Outside Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'active_callback'          => 'influence_blog_not_site_layout_style_wide',
    'priority'                 => 60,
) ) );

/*---------------------------------- Layout style design for inside color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_design_inside', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'site_layout_style_design_inside' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_site_layout_style_design_inside', array(
    'label'                    => esc_html__( 'Inside Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'active_callback'          => 'influence_blog_not_site_layout_style_wide',
    'priority'                 => 65,
) ) );

/*---------------------------------- Layout style design for box shadow color  -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_design_box_shadow_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'site_layout_style_design_box_shadow_toggle' ),
) );

$wp_customize->add_control( new Toggle_Two_Control ( $wp_customize, 'influence_blog_site_layout_style_design_box_shadow_toggle', array(
    'label'                    => esc_html__( 'Display Box Shadow', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'active_callback'          => 'influence_blog_not_site_layout_style_wide',
    'priority'                 => 67,
) ) );

/*---------------------------------- Container Style Heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_design_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_site_layout_container_design_heading', array(
    'label'                    => esc_html__( 'Container Style Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'site-layout-container-design-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 70,
) ) );

/*---------------------------------- Container Style Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_design_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_site_layout_container_design_info', array(
    'label'                    => esc_html__( 'Container Style', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'schedule',
    'priority'                 => 75,
) ) );

/*---------------------------------- Container style design background color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_design_bg', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'site_layout_container_design_bg' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_site_layout_container_design_bg', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 80,
) ) );

/*-----------------------------------------------------------------------------
							 Advance options
-----------------------------------------------------------------------------*/

/*---------------------------------- Site layout advance Info -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_advance_info', array(
    'sanitize_callback'        => 'sanitize_text_field',
) );

$wp_customize->add_control( new Info_One_Control ( $wp_customize, 'influence_blog_site_layout_advance_info', array(
    'label'                    => esc_html__( 'Note', 'influence-blog' ),
    'description'              => __( 'Recommended for experienced user.', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'info-one',
    'info_type'                => 'info',
    'priority'                 => 90,
) ) );

/*---------------------------------- Site layout advance toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_advance_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'site_layout_advance_toggle' ),
) );

$wp_customize->add_control( new Toggle_Two_Control ( $wp_customize, 'influence_blog_site_layout_advance_toggle', array(
    'label'                    => esc_html__( 'Enable Advance Settings', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-two',
    'priority'                 => 95,
) ) );

/*---------------------------------- Layout style heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_site_layout_style_advance_heading', array(
    'label'                    => esc_html__( 'Layout Style Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'site-layout-style-advance-heading' ),
    'controls_to_wrap'         => 7,
    'expanded'                 => true,
    'priority'                 => 100,
    'active_callback'          => 'influence_blog_not_site_layout_advance_toggle',
) ) );

/*---------------------------------- Layout style padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_site_layout_style_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'   => array(
        'desktop_top' 		   => 'influence_blog_site_layout_style_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_site_layout_style_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_site_layout_style_advance_d_p_bottom',
        'desktop_left' 		   => 'influence_blog_site_layout_style_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_site_layout_style_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_site_layout_style_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_site_layout_style_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_site_layout_style_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_site_layout_style_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_site_layout_style_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_site_layout_style_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_site_layout_style_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority' 				   => 110,
    'active_callback'          => 'influence_blog_not_site_layout_advance_toggle',
) ) );

/*---------------------------------- Layout style box margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_b_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_b_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_b_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_b_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_b_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_b_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_b_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_b_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_b_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_b_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_b_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_b_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_site_layout_style_advance_box_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'   => array(
        'desktop_right' 	   => 'influence_blog_site_layout_style_advance_b_d_m_right',
        'desktop_left' 		   => 'influence_blog_site_layout_style_advance_b_d_m_left',
        'tablet_right' 		   => 'influence_blog_site_layout_style_advance_b_t_m_right',
        'tablet_left' 		   => 'influence_blog_site_layout_style_advance_b_t_m_left',
        'mobile_right' 		   => 'influence_blog_site_layout_style_advance_b_m_m_right',
        'mobile_left' 		   => 'influence_blog_site_layout_style_advance_b_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -100,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority' 				   => 115,
    'active_callback'          => 'influence_blog_is_site_layout_style_box_advance',
) ) );

/*---------------------------------- Layout style framed margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_f_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_style_advance_f_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_site_layout_style_advance_f_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'   => array(
        'desktop_top' 		   => 'influence_blog_site_layout_style_advance_f_d_m_top',
        'desktop_right' 	   => 'influence_blog_site_layout_style_advance_f_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_site_layout_style_advance_f_d_m_bottom',
        'desktop_left' 		   => 'influence_blog_site_layout_style_advance_f_d_m_left',
        'tablet_top' 		   => 'influence_blog_site_layout_style_advance_f_t_m_top',
        'tablet_right' 		   => 'influence_blog_site_layout_style_advance_f_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_site_layout_style_advance_f_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_site_layout_style_advance_f_t_m_left',
        'mobile_top' 		   => 'influence_blog_site_layout_style_advance_f_m_m_top',
        'mobile_right' 		   => 'influence_blog_site_layout_style_advance_f_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_site_layout_style_advance_f_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_site_layout_style_advance_f_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -100,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority' 				   => 115,
    'active_callback'          => 'influence_blog_is_site_layout_style_framed_advance',
) ) );

/*---------------------------------- Layout style width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_boxed_width', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'site_layout_style_advance_boxed_width' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_site_layout_style_advance_boxed_width', array(
    'label'                    => esc_html__( 'Width', 'influence-blog' ) . esc_html( ' (vw) ' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 50,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_not_site_layout_style_wide_advance',
) ) );

/*---------------------------------- Layout style border radius -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_boxed_border_radius', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'site_layout_style_advance_boxed_border_radius' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_site_layout_style_advance_boxed_border_radius', array(
    'label'                    => esc_html__( 'Border Radius', 'influence-blog' ) . esc_html( ' (px) ' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 0,
        'max'                  => 50,
        'step'                 => 1,
    ),
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_not_site_layout_style_wide_advance',
) ) );

/*---------------------------------- Layout style border width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_boxed_border_width', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'site_layout_style_advance_boxed_border_width' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_site_layout_style_advance_boxed_border_width', array(
    'label'                    => esc_html__( 'Border Width', 'influence-blog' ) . esc_html( ' (px) ' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 0,
        'max'                  => 5,
        'step'                 => 1,
    ),
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_not_site_layout_style_wide_advance',
) ) );

/*---------------------------------- Layout style border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_style_advance_boxed_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'site_layout_style_advance_boxed_border_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_site_layout_style_advance_boxed_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_not_site_layout_style_wide_advance',
) ) );

/*---------------------------------- Layout container heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_site_layout_container_advance_heading', array(
    'label'                    => esc_html__( 'Container Style Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'site-layout-container-advance-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 120,
    'active_callback'          => 'influence_blog_not_site_layout_container_uniform_advance',
) ) );

/*---------------------------------- Layout container padding ( ! uniform ) -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_site_layout_container_advance_b_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_site_layout_container_advance_b_d_p_top',
        'desktop_right' 	   => 'influence_blog_site_layout_container_advance_b_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_site_layout_container_advance_b_d_p_bottom',
        'desktop_left' 		   => 'influence_blog_site_layout_container_advance_b_d_p_left',
        'tablet_top' 		   => 'influence_blog_site_layout_container_advance_b_t_p_top',
        'tablet_right' 		   => 'influence_blog_site_layout_container_advance_b_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_site_layout_container_advance_b_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_site_layout_container_advance_b_t_p_left',
        'mobile_top' 		   => 'influence_blog_site_layout_container_advance_b_m_p_top',
        'mobile_right' 		   => 'influence_blog_site_layout_container_advance_b_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_site_layout_container_advance_b_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_site_layout_container_advance_b_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority' 				   => 125,
    'active_callback'          => 'influence_blog_not_site_layout_container_uniform_advance',
) ) );

/*---------------------------------- Layout container margin ( ! uniform ) -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );
$wp_customize->add_setting( 'influence_blog_site_layout_container_advance_b_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'site_layout_container_advance_b_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_blank',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_site_layout_container_advance_b_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_site_layout_container_advance_b_d_m_top',
        'desktop_right' 	   => 'influence_blog_site_layout_container_advance_b_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_site_layout_container_advance_b_d_m_bottom',
        'desktop_left' 		   => 'influence_blog_site_layout_container_advance_b_d_m_left',
        'tablet_top' 		   => 'influence_blog_site_layout_container_advance_b_t_m_top',
        'tablet_right' 		   => 'influence_blog_site_layout_container_advance_b_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_site_layout_container_advance_b_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_site_layout_container_advance_b_t_m_left',
        'mobile_top' 		   => 'influence_blog_site_layout_container_advance_b_m_m_top',
        'mobile_right' 		   => 'influence_blog_site_layout_container_advance_b_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_site_layout_container_advance_b_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_site_layout_container_advance_b_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -100,
        'max'                  => 100,
        'step'                 => 1,
    ),
    'priority' 				   => 130,
    'active_callback'          => 'influence_blog_not_site_layout_container_uniform_advance',
) ) );











