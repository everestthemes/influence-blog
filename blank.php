/*---------------------------------- Footer two design widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_heading', array(
    'label'                    => esc_html__( 'Widget Area Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-widget-area-heading' ),
    'controls_to_wrap'         => 2,
    'expanded'                 => false,
    'priority'                 => 155,
) ) );

/*---------------------------------- Footer two design widget area bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_area_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 157,
) ) );

/*---------------------------------- Footer two design widget area border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_area_border_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 158,
) ) );

/*---------------------------------- Footer two design widget area title heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_title_heading', array(
    'label'                    => esc_html__( 'Widget Title Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-widget-area-title-heading' ),
    'controls_to_wrap'         => 10,
    'expanded'                 => false,
    'priority'                 => 160,
) ) );

/*---------------------------------- Footer two widget area alignment -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_alignment', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_area_title_alignment' ),
) );

$wp_customize->add_control( 'influence_blog_footer_two_design_widget_area_title_alignment', array(
    'label'                    => esc_html__( 'Alignment', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $alignment,
    'type'                     => 'select',
    'priority'                 => 160,
) );

/*---------------------------------- Footer two design widget area title color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_title_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 160,
) ) );

/*---------------------------------- Footer two design widget title color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_title_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_title_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_title_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 165,
) ) );

/*---------------------------------- Footer two design widget title bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_title_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_title_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_title_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 170,
) ) );

/*---------------------------------- Footer two design widget area title typo heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_title_typo_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_title_typo_heading', array(
    'label'                    => esc_html__( 'Typography Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 175,
) ) );

/*---------------------------------- Footer two widget area design title typo font family -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_font', array(
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_font' ),
    'sanitize_callback'        => 'sanitize_typography_one'
) );

$wp_customize->add_control( new Typography_One_Control( $wp_customize, 'influence_blog_typo_footer_two_widget_area_design_title_font', array(
    'label'                    => __( 'Font Family', 'influence-blog' ),
    'section'                  => $section,
    'input_attrs'              => $font_attrs,
    'priority'                 => 180,
) ) );

/*---------------------------------- Footer two widget area design title typo text transform -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_transform', array(
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_transform' ),
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'transport' 		       => 'postMessage',
) );

$wp_customize->add_control( 'influence_blog_typo_footer_two_widget_area_design_title_transform', array(
    'label'                    => __( 'Text Transform', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'select',
    'choices'                  => $text_transform,
    'priority'                 => 185,
) );

/*---------------------------------- Footer two widget area design title typo font size -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_size_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_size_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_size_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_size_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_size_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_size_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_widget_area_design_title_size', array(
    'label'                    => esc_html__( 'Font Size', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_size_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_size_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_size_m',
    ),
    'input_attrs' 		       => $size_attrs,
    'priority' 			       => 190,
) ) );

/*---------------------------------- Footer two widget area design title typo line height -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_height_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_height_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_height_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_height_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_height_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_height_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_widget_area_design_title_line_height', array(
    'label'                    => esc_html__( 'Line Height', 'influence-blog' ),
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_height_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_height_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_height_m',
    ),
    'input_attrs' 		       => $line_height,
    'priority' 			       => 195,
) ) );

/*---------------------------------- Footer two widget area design title typo letter spacing -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_spacing_d', array(
    'sanitize_callback'        => 'sanitize_range_slider_two_number',
    'transport' 		       => 'postMessage',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_spacing_d' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_spacing_t', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_spacing_t' ),
) );

$wp_customize->add_setting( 'influence_blog_typo_footer_two_widget_area_design_title_spacing_m', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_range_slider_two_number',
    'default'                  => influence_blog_defaults( 'typo_footer_two_widget_area_design_title_spacing_m' ),
) );

$wp_customize->add_control( new Range_Slider_Two_Control ( $wp_customize,'influence_blog_typo_footer_two_widget_area_design_title_spacing', array(
    'label'                    => esc_html__( 'Letter Spacing', 'influence-blog' ) . ' (px) ',
    'section' 			       => $section,
    'type'                     => 'range-slider-two',
    'settings' 			       => array(
        'desktop' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_spacing_d',
        'tablet' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_spacing_t',
        'mobile' 	           => 'influence_blog_typo_footer_two_widget_area_design_title_spacing_m',
    ),
    'input_attrs' 		       => $letter_spacing,
    'priority' 			       => 200,
) ) );

/*---------------------------------- Footer two design widget area content heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_content_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_content_heading', array(
    'label'                    => esc_html__( 'Widget Content Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-two-design-widget-area-content-heading' ),
    'controls_to_wrap'         => 8,
    'expanded'                 => false,
    'priority'                 => 210,
) ) );

/*---------------------------------- Footer two design widget area content color heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_area_content_color_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_area_content_color_heading', array(
    'label'                    => esc_html__( 'Color Options', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'priority'                 => 215,
) ) );

/*---------------------------------- Footer two design widget content color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_color', array(
    'label'                    => esc_html__( 'Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 220,
) ) );

/*---------------------------------- Footer two design widget content hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_hover_color', array(
    'label'                    => esc_html__( 'Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 225,
) ) );

/*---------------------------------- Footer two design widget content bg color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_bg_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_bg_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_bg_color', array(
    'label'                    => esc_html__( 'Background Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 230,
) ) );

/*---------------------------------- Footer two design widget content bg hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_bg_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_bg_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_bg_hover_color', array(
    'label'                    => esc_html__( 'Background Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 235,
) ) );

/*---------------------------------- Footer two design widget content border color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_border_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_border_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_border_color', array(
    'label'                    => esc_html__( 'Border Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 235,
) ) );

/*---------------------------------- Footer two design widget content button color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_button_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_button_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_button_color', array(
    'label'                    => esc_html__( 'Button Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 240,
) ) );

/*---------------------------------- Footer two design widget content button hover color -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_design_widget_content_button_hover_color', array(
    'transport' 			   => 'postMessage',
    'sanitize_callback' 	   => 'sanitize_color_one',
    'default'                  => influence_blog_defaults( 'footer_two_design_widget_content_button_hover_color' ),
) );

$wp_customize->add_control( new Color_One_Control( $wp_customize, 'influence_blog_footer_two_design_widget_content_button_hover_color', array(
    'label'                    => esc_html__( 'Button Hover Color', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'color-one',
    'priority'                 => 245,
) ) );
