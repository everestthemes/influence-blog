<?php
/**
 * Collection of default values for customizer fields.
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if ( !function_exists( 'influence_blog_defaults' ) ) {
    /**
     * Default Customizer Values
     */
	function influence_blog_defaults( $theme_mod ) {

		$defaults = array(
            //Site layout
			'site_layout_style'                => 'wide',
			'site_layout_container_width'      => 1200,
			'site_layout_container_style'      => 'uniform',
			'site_layout_content_width'        => 80,
			'site_layout_sidebar_width'        => 20,
			'site_layout_style_design_options' => 'image',
			'site_layout_style_design_outside' => '#000000',
			'site_layout_style_design_inside'  => '#ffffff',
			'site_layout_container_design_bg'  => 'rgba(255,255,255,0)',
			'site_layout_advance_toggle'       => false,
            //Site layout - style -padding
            'site_layout_style_advance_d_p_top' => 10,
            'site_layout_style_advance_d_p_right' => 20,
            'site_layout_style_advance_d_p_bottom' => 30,
            'site_layout_style_advance_d_p_left' => 40,
            'site_layout_style_advance_t_p_top' => 40,
            'site_layout_style_advance_t_p_right' => 30,
            'site_layout_style_advance_t_p_bottom' => 20,
            'site_layout_style_advance_t_p_left' => 10,
            'site_layout_style_advance_m_p_top' => 10,
            'site_layout_style_advance_m_p_right' => 20,
            'site_layout_style_advance_m_p_bottom' => 30,
            'site_layout_style_advance_m_p_left' => 40,
            //Site layout- style -boxed - margin
            'site_layout_style_advance_b_d_m_right' => 10,
            'site_layout_style_advance_b_d_m_left' => 30,
            'site_layout_style_advance_b_t_m_right' => 30,
            'site_layout_style_advance_b_t_m_left' => 10,
            'site_layout_style_advance_b_m_m_right' => 10,
            'site_layout_style_advance_b_m_m_left' => 30,
            //Site layout - style - framed - margin
            'site_layout_style_advance_f_d_m_top' => 50,
            'site_layout_style_advance_f_d_m_right' => 0,
            'site_layout_style_advance_f_d_m_bottom' => 40,
            'site_layout_style_advance_f_d_m_left' => 4,
            'site_layout_style_advance_f_t_m_top' => 5,
            'site_layout_style_advance_f_t_m_right' => 55,
            'site_layout_style_advance_f_t_m_bottom' => 60,
            'site_layout_style_advance_f_t_m_left' => 70,
            'site_layout_style_advance_f_m_m_top' => 100,
            'site_layout_style_advance_f_m_m_right' => 120,
            'site_layout_style_advance_f_m_m_bottom' => 130,
            'site_layout_style_advance_f_m_m_left' => 110,
            //Site layout - container - padding ( !uniform)
            'site_layout_container_advance_b_d_p_top' => 200,
            'site_layout_container_advance_b_d_p_right' => 300,
            'site_layout_container_advance_b_d_p_bottom' => 400,
            'site_layout_container_advance_b_d_p_left' => 500,
            'site_layout_container_advance_b_t_p_top' => 500,
            'site_layout_container_advance_b_t_p_right' => 400,
            'site_layout_container_advance_b_t_p_bottom' => 300,
            'site_layout_container_advance_b_t_p_left' => 200,
            'site_layout_container_advance_b_m_p_top' => 100,
            'site_layout_container_advance_b_m_p_right' => 200,
            'site_layout_container_advance_b_m_p_bottom' => 300,
            'site_layout_container_advance_b_m_p_left' => 400,
            //Site layout - container - margin ( !uniform)
            'site_layout_container_advance_b_d_m_top' => 1000,
            'site_layout_container_advance_b_d_m_right' => 2000,
            'site_layout_container_advance_b_d_m_bottom' => 3000,
            'site_layout_container_advance_b_d_m_left' => 4000,
            'site_layout_container_advance_b_t_m_top' => 100,
            'site_layout_container_advance_b_t_m_right' => 200,
            'site_layout_container_advance_b_t_m_bottom' => 300,
            'site_layout_container_advance_b_t_m_left' => 400,
            'site_layout_container_advance_b_m_m_top' => 10,
            'site_layout_container_advance_b_m_m_right' => 20,
            'site_layout_container_advance_b_m_m_bottom' => 30,
            'site_layout_container_advance_b_m_m_left' => 40,
            //Typography - body
			'typo_body_font' => json_encode(
				array(
					'font' => 'Roboto',
					'variantlist' => array( 'regular', '100', '200', '300', '500', '700' ),
					'fontweight' => 'regular',
					'category' => 'sans-serif'
				)
			),
            'typo_body_transform' => 'none',
            'typo_body_size_d' => 16,
            'typo_body_size_t' => 14,
            'typo_body_size_m' => 12,
            'typo_body_height_d' => 1.2,
            'typo_body_height_t' => 1,
            'typo_body_height_m' => 1,
            'typo_body_spacing_d' => 3,
            'typo_body_spacing_t' => 1,
            'typo_body_spacing_m' => 1,
            //Typography - heading
			'typo_heading_font' => json_encode(
				array(
					'font' => 'Roboto',
					'variantlist' => array( 'regular', '100', '200', '300', '500', '700' ),
					'fontweight' => 'regular',
					'category' => 'sans-serif'
				)
			),
            //Typography - heading -h1
            'typo_heading_H1_transform' => 'none',
            'typo_heading_H1_size_d' => 16,
            'typo_heading_H1_size_t' => 14,
            'typo_heading_H1_size_m' => 12,
            'typo_heading_H1_height_d' => 1.2,
            'typo_heading_H1_height_t' => 1,
            'typo_heading_H1_height_m' => 1,
            'typo_heading_H1_spacing_d' => 3,
            'typo_heading_H1_spacing_t' => 1,
            'typo_heading_H1_spacing_m' => 1,
            //Typography - heading -h2
            'typo_heading_H2_transform' => 'none',
            'typo_heading_H2_size_d' => 16,
            'typo_heading_H2_size_t' => 14,
            'typo_heading_H2_size_m' => 12,
            'typo_heading_H2_height_d' => 1.2,
            'typo_heading_H2_height_t' => 1,
            'typo_heading_H2_height_m' => 1,
            'typo_heading_H2_spacing_d' => 3,
            'typo_heading_H2_spacing_t' => 1,
            'typo_heading_H2_spacing_m' => 1,
            //Typography - heading -h3
            'typo_heading_H3_transform' => 'none',
            'typo_heading_H3_size_d' => 16,
            'typo_heading_H3_size_t' => 14,
            'typo_heading_H3_size_m' => 12,
            'typo_heading_H3_height_d' => 1.2,
            'typo_heading_H3_height_t' => 1,
            'typo_heading_H3_height_m' => 1,
            'typo_heading_H3_spacing_d' => 3,
            'typo_heading_H3_spacing_t' => 1,
            'typo_heading_H3_spacing_m' => 1,
            //Typography - heading -h4
            'typo_heading_H4_transform' => 'none',
            'typo_heading_H4_size_d' => 16,
            'typo_heading_H4_size_t' => 14,
            'typo_heading_H4_size_m' => 12,
            'typo_heading_H4_height_d' => 1.2,
            'typo_heading_H4_height_t' => 1,
            'typo_heading_H4_height_m' => 1,
            'typo_heading_H4_spacing_d' => 3,
            'typo_heading_H4_spacing_t' => 1,
            'typo_heading_H4_spacing_m' => 1,
            //Typography - heading -h5
            'typo_heading_H5_transform' => 'none',
            'typo_heading_H5_size_d' => 16,
            'typo_heading_H5_size_t' => 14,
            'typo_heading_H5_size_m' => 12,
            'typo_heading_H5_height_d' => 1.2,
            'typo_heading_H5_height_t' => 1,
            'typo_heading_H5_height_m' => 1,
            'typo_heading_H5_spacing_d' => 3,
            'typo_heading_H5_spacing_t' => 1,
            'typo_heading_H5_spacing_m' => 1,
            //Typography - heading -h6
            'typo_heading_H6_transform' => 'none',
            'typo_heading_H6_size_d' => 16,
            'typo_heading_H6_size_t' => 14,
            'typo_heading_H6_size_m' => 12,
            'typo_heading_H6_height_d' => 1.2,
            'typo_heading_H6_height_t' => 1,
            'typo_heading_H6_height_m' => 1,
            'typo_heading_H6_spacing_d' => 3,
            'typo_heading_H6_spacing_t' => 1,
            'typo_heading_H6_spacing_m' => 1,
            //Color
            'color_theme' => '#eeeeee',
            'color_text' => '#000000',
            'color_link' => '#ffffff',
            'color_link_hover' => '#000000',
		);

        $defaults = apply_filters( 'influence_blog_filter_defaults_array', $defaults );

		return isset( $defaults[ $theme_mod ] ) ? $defaults[ $theme_mod ] : '';
	}
}
