$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_widget_area_advance_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_widget_area_advance_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_widget_area_advance_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_widget_area_advance_d_m_top',
        'desktop_right' 	   => 'influence_blog_footer_two_widget_area_advance_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_d_m_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_widget_area_advance_d_m_left',
        'tablet_top' 		   => 'influence_blog_footer_two_widget_area_advance_t_m_top',
        'tablet_right' 		   => 'influence_blog_footer_two_widget_area_advance_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_widget_area_advance_t_m_left',
        'mobile_top' 		   => 'influence_blog_footer_two_widget_area_advance_m_m_top',
        'mobile_right' 		   => 'influence_blog_footer_two_widget_area_advance_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_widget_area_advance_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_widget_area_advance_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -200,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 402,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );
