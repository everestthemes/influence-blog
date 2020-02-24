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
			'site_layout_container_style'      => 'uniform',
			'site_layout_style_design_options' => 'color',
			'site_layout_style_design_outside' => '#ffffff',
			'site_layout_style_design_inside'  => '#ffffff',
			'site_layout_style_design_box_shadow_toggle'=> true,
			'site_layout_container_design_bg'  => '#f1f1f1',
			'site_layout_advance_toggle'       => false,
            //Site layout - style -padding
            'site_layout_style_advance_d_p_top' => 0,
            'site_layout_style_advance_d_p_right' => 0,
            'site_layout_style_advance_d_p_bottom' => 0,
            'site_layout_style_advance_d_p_left' => 0,
            'site_layout_style_advance_t_p_top' => 0,
            'site_layout_style_advance_t_p_right' => 0,
            'site_layout_style_advance_t_p_bottom' => 0,
            'site_layout_style_advance_t_p_left' => 0,
            'site_layout_style_advance_m_p_top' => 0,
            'site_layout_style_advance_m_p_right' => 0,
            'site_layout_style_advance_m_p_bottom' => 0,
            'site_layout_style_advance_m_p_left' => 0,
            //Site layout - style -boxed - margin
            'site_layout_style_advance_b_d_m_right' => 0,
            'site_layout_style_advance_b_d_m_left' => 0,
            'site_layout_style_advance_b_t_m_right' => 0,
            'site_layout_style_advance_b_t_m_left' => 0,
            'site_layout_style_advance_b_m_m_right' => 0,
            'site_layout_style_advance_b_m_m_left' => 0,
            //Site layout - style - boxed - border radius
            'site_layout_style_advance_boxed_width' => 70,
            'site_layout_style_advance_boxed_border_radius' => 0,
            'site_layout_style_advance_boxed_border_width' => 1,
            'site_layout_style_advance_boxed_border_color' => '#eee',
            //Site layout - style - framed - margin
            'site_layout_style_advance_f_d_m_top' => 0,
            'site_layout_style_advance_f_d_m_right' => 0,
            'site_layout_style_advance_f_d_m_bottom' => 0,
            'site_layout_style_advance_f_d_m_left' => 0,
            'site_layout_style_advance_f_t_m_top' => 0,
            'site_layout_style_advance_f_t_m_right' => 0,
            'site_layout_style_advance_f_t_m_bottom' => 0,
            'site_layout_style_advance_f_t_m_left' => 0,
            'site_layout_style_advance_f_m_m_top' => 0,
            'site_layout_style_advance_f_m_m_right' => 0,
            'site_layout_style_advance_f_m_m_bottom' => 0,
            'site_layout_style_advance_f_m_m_left' => 0,
            //Site layout - container - padding ( !uniform)
            'site_layout_container_advance_b_d_p_top' => 15,
            'site_layout_container_advance_b_d_p_right' => 15,
            'site_layout_container_advance_b_d_p_bottom' => 15,
            'site_layout_container_advance_b_d_p_left' => 15,
            'site_layout_container_advance_b_t_p_top' => 15,
            'site_layout_container_advance_b_t_p_right' => 15,
            'site_layout_container_advance_b_t_p_bottom' => 15,
            'site_layout_container_advance_b_t_p_left' => 15,
            'site_layout_container_advance_b_m_p_top' => 15,
            'site_layout_container_advance_b_m_p_right' => 15,
            'site_layout_container_advance_b_m_p_bottom' => 15,
            'site_layout_container_advance_b_m_p_left' => 15,
            //Site layout - container - margin ( !uniform)
            'site_layout_container_advance_b_d_m_top' => 30,
            'site_layout_container_advance_b_d_m_right' => 30,
            'site_layout_container_advance_b_d_m_bottom' => 30,
            'site_layout_container_advance_b_d_m_left' => 30,
            'site_layout_container_advance_b_t_m_top' => 30,
            'site_layout_container_advance_b_t_m_right' => 30,
            'site_layout_container_advance_b_t_m_bottom' => 30,
            'site_layout_container_advance_b_t_m_left' => 30,
            'site_layout_container_advance_b_m_m_top' => 30,
            'site_layout_container_advance_b_m_m_right' => 30,
            'site_layout_container_advance_b_m_m_bottom' => 30,
            'site_layout_container_advance_b_m_m_left' => 30,
            //Typography - body
			'typo_body_font' => json_encode(
				array(
					'font' => 'Lato',
					'variantlist' => array( 'regular', '100', '300', '700', '900' ),
					'fontweight' => 'regular',
					'category' => 'sans-serif'
				)
			),
            'typo_body_transform' => 'none',
            'typo_body_size_d' => 16,
            'typo_body_size_t' => 14,
            'typo_body_size_m' => 12,
            'typo_body_height_d' => 1.5,
            'typo_body_height_t' => 1,
            'typo_body_height_m' => 1,
            'typo_body_spacing_d' => 1,
            'typo_body_spacing_t' => 1,
            'typo_body_spacing_m' => 1,
            //Typography - heading
			'typo_heading_font' => json_encode(
				array(
					'font' => 'Lato',
					'variantlist' => array( 'regular', '100', '300', '700', '900' ),
					'fontweight' => 'regular',
					'category' => 'sans-serif'
				)
			),
            //Typography - heading -h1
            'typo_heading_H1_transform' => 'none',
            'typo_heading_H1_size_d' => 48,
            'typo_heading_H1_size_t' => 30,
            'typo_heading_H1_size_m' => 30,
            'typo_heading_H1_height_d' => 1.5,
            'typo_heading_H1_height_t' => 1,
            'typo_heading_H1_height_m' => 1,
            'typo_heading_H1_spacing_d' => 1,
            'typo_heading_H1_spacing_t' => 1,
            'typo_heading_H1_spacing_m' => 1,
            //Typography - heading -h2
            'typo_heading_H2_transform' => 'none',
            'typo_heading_H2_size_d' => 40,
            'typo_heading_H2_size_t' => 28,
            'typo_heading_H2_size_m' => 28,
            'typo_heading_H2_height_d' => 1.5,
            'typo_heading_H2_height_t' => 1,
            'typo_heading_H2_height_m' => 1,
            'typo_heading_H2_spacing_d' => 1,
            'typo_heading_H2_spacing_t' => 1,
            'typo_heading_H2_spacing_m' => 1,
            //Typography - heading -h3
            'typo_heading_H3_transform' => 'none',
            'typo_heading_H3_size_d' => 36,
            'typo_heading_H3_size_t' => 18,
            'typo_heading_H3_size_m' => 18,
            'typo_heading_H3_height_d' => 1.5,
            'typo_heading_H3_height_t' => 1,
            'typo_heading_H3_height_m' => 1,
            'typo_heading_H3_spacing_d' => 1,
            'typo_heading_H3_spacing_t' => 1,
            'typo_heading_H3_spacing_m' => 1,
            //Typography - heading -h4
            'typo_heading_H4_transform' => 'none',
            'typo_heading_H4_size_d' => 24,
            'typo_heading_H4_size_t' => 16,
            'typo_heading_H4_size_m' => 16,
            'typo_heading_H4_height_d' => 1.5,
            'typo_heading_H4_height_t' => 1,
            'typo_heading_H4_height_m' => 1,
            'typo_heading_H4_spacing_d' => 1,
            'typo_heading_H4_spacing_t' => 1,
            'typo_heading_H4_spacing_m' => 1,
            //Typography - heading -h5
            'typo_heading_H5_transform' => 'none',
            'typo_heading_H5_size_d' => 20,
            'typo_heading_H5_size_t' => 14,
            'typo_heading_H5_size_m' => 14,
            'typo_heading_H5_height_d' => 1.5,
            'typo_heading_H5_height_t' => 1,
            'typo_heading_H5_height_m' => 1,
            'typo_heading_H5_spacing_d' => 1,
            'typo_heading_H5_spacing_t' => 1,
            'typo_heading_H5_spacing_m' => 1,
            //Typography - heading -h6
            'typo_heading_H6_transform' => 'none',
            'typo_heading_H6_size_d' => 18,
            'typo_heading_H6_size_t' => 12,
            'typo_heading_H6_size_m' => 12,
            'typo_heading_H6_height_d' => 1.5,
            'typo_heading_H6_height_t' => 1,
            'typo_heading_H6_height_m' => 1,
            'typo_heading_H6_spacing_d' => 1,
            'typo_heading_H6_spacing_t' => 1,
            'typo_heading_H6_spacing_m' => 1,
            //Color
            'color_theme' => '#eeeeee',
            'color_text' => '#000000',
            'color_link' => '#183244',
            'color_link_hover' => '#e9b105',
            //Header - layout options
            'header_layout_options_select' => 'one',
            'header_layout_options_hedader_bg_color' => 'rgb(0, 0, 0, 0.36)',
            'header_layout_options_advance_toggle' => false,
            'header_layout_options_advance_bg_image_size' => 'cover',
            'header_layout_options_advance_bg_image_position_x' => 'center',
            'header_layout_options_advance_bg_image_position_y' => 'center',
            //Header - Header one
            'header_one_layout_one_menu_select' => 'menu-2',
            'header_one_layout_one_menu_alignment' => 'left',
            'header_one_layout_one_social_links_tab_toggle' => true,
            'header_one_layout_one_social_links_alignment' => 'right',
            //Header - Header one - Color
            'header_one_layout_one_design_bg_color' => '#183244',
            //Header - Header one - Menu Color
            'header_one_layout_one_design_menu_color' => '#fff',
            'header_one_layout_one_design_menu_hover_color' => '#e9b105',
            'header_one_layout_one_design_menu_sep_color' => '#666',
            //Header - Header one - Menu Typography
			'typo_header_one_layout_one_design_menu_font' => json_encode(
				array(
					'font' => 'Lato',
					'variantlist' => array( 'regular', '100', '300', '700', '900' ),
					'fontweight' => 'regular',
					'category' => 'sans-serif'
				)
			),
            'typo_header_one_layout_one_design_menu_transform' => 'none',
            'typo_header_one_layout_one_design_menu_size_d' => '12',
            'typo_header_one_layout_one_design_menu_size_t' => '12',
            'typo_header_one_layout_one_design_menu_size_m' => '12',
            'typo_header_one_layout_one_design_menu_height_d' => '1.2',
            'typo_header_one_layout_one_design_menu_height_t' => '1.2',
            'typo_header_one_layout_one_design_menu_height_m' => '1.2',
            'typo_header_one_layout_one_design_menu_spacing_d' => '1.2',
            'typo_header_one_layout_one_design_menu_spacing_t' => '1.2',
            'typo_header_one_layout_one_design_menu_spacing_m' => '1.2',
            //Header - Header one - Social Links Color
            'header_one_layout_one_design_social_links_color' => '#e9b105',
            'header_one_layout_one_design_social_links_hover_color' => '#ffffff',
            'header_one_layout_one_design_social_links_sep_color' => '#666',
            //Header - Header one - Social Links Typography
            'typo_header_one_layout_one_design_social_links_size_d' => '16',
            'typo_header_one_layout_one_design_social_links_size_t' => '14',
            'typo_header_one_layout_one_design_social_links_size_m' => '12',
            //Header - Header one - Advance
            'header_one_layout_one_advance_toggle' => false,
            //Header - Header one - Advance - Padding
            'header_one_layout_one_advance_d_p_top' => '5',
            'header_one_layout_one_advance_d_p_right' => '0',
            'header_one_layout_one_advance_d_p_bottom' => '5',
            'header_one_layout_one_advance_d_p_left' => '0',
            'header_one_layout_one_advance_t_p_top' => '5',
            'header_one_layout_one_advance_t_p_right' => '0',
            'header_one_layout_one_advance_t_p_bottom' => '5',
            'header_one_layout_one_advance_t_p_left' => '0',
            'header_one_layout_one_advance_m_p_top' => '5',
            'header_one_layout_one_advance_m_p_right' => '0',
            'header_one_layout_one_advance_m_p_bottom' => '5',
            'header_one_layout_one_advance_m_p_left' => '0',
            //Reset
            'reset_toggle' => false,
		);

        $defaults = apply_filters( 'influence_blog_filter_defaults_array', $defaults );

		return isset( $defaults[ $theme_mod ] ) ? $defaults[ $theme_mod ] : '';
	}
}

if( ! function_exists( 'influence_blog_sortable_defaults' ) ) {
	/**
	 * Creates a string of default items for a sortable control
	 *
	 * @since  1.0.0
	 * @param  array  $items Default items
	 * @return string
	 */
	function influence_blog_sortable_defaults( $items = array() ){

		$default = array();

		foreach( $items as $item ) {

            $default[] = $item[ 'id' ] . ':1';
        }

		return $default = implode( ',', $default );
	}
}
