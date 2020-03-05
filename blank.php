/*---------------------------------- Sixth widget area heading -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_heading', array(
    'sanitize_callback' 	   => 'sanitize_text_field',
) );

$wp_customize->add_control( new Heading_One_Control( $wp_customize, 'influence_blog_footer_one_sixth_widget_area_heading', array(
    'label'                    => esc_html__( 'Sixth Widget Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'heading-one',
    'accordion'                => true,
    'class'                    => esc_attr( 'footer-one-sixth-widget-area-heading' ),
    'controls_to_wrap'         => 3,
    'expanded'                 => false,
    'priority'                 => 10,
) ) );

/*---------------------------------- Sixth widget area toggle -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_toggle', array(
    'sanitize_callback'        => 'wp_validate_boolean',
    'default'                  => influence_blog_defaults( 'footer_one_sixth_widget_area_toggle' ),
) );

$wp_customize->add_control( new Toggle_Three_Control ( $wp_customize, 'influence_blog_footer_one_sixth_widget_area_toggle', array(
    'label'                    => esc_html__( 'Display Area', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'toggle-three',
    'priority'                 => 15,
) ) );

/*---------------------------------- Sixth widget area select -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_select', array(
    'transport'                => 'refresh',
    'sanitize_callback'        => 'influence_blog_sanitize_select',
    'default'                  => influence_blog_defaults( 'footer_one_sixth_widget_area_select' ),
) );

$wp_customize->add_control( 'influence_blog_footer_one_sixth_widget_area_select', array(
    'label'                    => esc_html__( 'Select Widget Area', 'influence-blog' ),
	'section'				   => $section,
    'choices'                  => $area_lists,
    'type'                     => 'select',
    'priority'                 => 20,
    'active_callback'          => 'influence_blog_is_footer_one_sixth_widget_enable',
) );

/*---------------------------------- Sixth widget area column width -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_one_sixth_widget_area_col', array(
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_one_sixth_widget_area_col' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_one_sixth_widget_area_col', array(
    'label'                    => esc_html__( 'Column Width', 'influence-blog' ),
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 12,
        'step'                 => 1,
    ),
    'priority'                 => 25,
    'active_callback'          => 'influence_blog_is_footer_one_sixth_widget_enable',
) ) );
