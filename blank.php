/*---------------------------------- Footer two social links advance margin -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_m_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_m_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_social_links_advance_m', array(
    'label'	   				   => esc_html__( 'Margin', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_social_links_advance_d_m_top',
        'desktop_right' 	   => 'influence_blog_footer_two_social_links_advance_d_m_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_social_links_advance_d_m_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_social_links_advance_d_m_left',
        'tablet_top' 		   => 'influence_blog_footer_two_social_links_advance_t_m_top',
        'tablet_right' 		   => 'influence_blog_footer_two_social_links_advance_t_m_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_social_links_advance_t_m_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_social_links_advance_t_m_left',
        'mobile_top' 		   => 'influence_blog_footer_two_social_links_advance_m_m_top',
        'mobile_right' 		   => 'influence_blog_footer_two_social_links_advance_m_m_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_social_links_advance_m_m_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_social_links_advance_m_m_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => -200,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 365,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two social links advance padding -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_d_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_d_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_t_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_t_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_top', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_top' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_right', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_right' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_bottom', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_bottom' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );
$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_m_p_left', array(
    'transport' 			   => 'postMessage',
    'default'           	   => influence_blog_defaults( 'footer_two_social_links_advance_m_p_left' ),
    'sanitize_callback' 	   => 'sanitize_dimension_one_number',
) );

$wp_customize->add_control( new Dimension_One_Control( $wp_customize, 'influence_blog_footer_two_social_links_advance_p', array(
    'label'	   				   => esc_html__( 'Padding', 'influence-blog' ) . ' (px) ',
    'section'  				   => $section,
    'settings'                 => array(
        'desktop_top' 		   => 'influence_blog_footer_two_social_links_advance_d_p_top',
        'desktop_right' 	   => 'influence_blog_footer_two_social_links_advance_d_p_right',
        'desktop_bottom' 	   => 'influence_blog_footer_two_social_links_advance_d_p_bottom',
        'desktop_left' 	       => 'influence_blog_footer_two_social_links_advance_d_p_left',
        'tablet_top' 		   => 'influence_blog_footer_two_social_links_advance_t_p_top',
        'tablet_right' 		   => 'influence_blog_footer_two_social_links_advance_t_p_right',
        'tablet_bottom' 	   => 'influence_blog_footer_two_social_links_advance_t_p_bottom',
        'tablet_left' 		   => 'influence_blog_footer_two_social_links_advance_t_p_left',
        'mobile_top' 		   => 'influence_blog_footer_two_social_links_advance_m_p_top',
        'mobile_right' 		   => 'influence_blog_footer_two_social_links_advance_m_p_right',
        'mobile_bottom' 	   => 'influence_blog_footer_two_social_links_advance_m_p_bottom',
        'mobile_left' 		   => 'influence_blog_footer_two_social_links_advance_m_p_left',
    ),
    'input_attrs' 			   => array(
        'min'                  => 0,
        'max'                  => 200,
        'step'                 => 1,
    ),
    'priority' 				   => 370,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );

/*---------------------------------- Footer two title advance border -----------------------------------*/

$wp_customize->add_setting( 'influence_blog_footer_two_social_links_advance_border', array(
    'transport'                => 'postMessage',
    'sanitize_callback'        => 'sanitize_range_slider_one',
    'default'                  => influence_blog_defaults( 'footer_two_social_links_advance_border' ),
) );

$wp_customize->add_control( new Range_Slider_One_Control ( $wp_customize, 'influence_blog_footer_two_social_links_advance_border', array(
    'label'                    => esc_html__( 'Border', 'influence-blog' ) . '( px)',
    'section'                  => $section,
    'type'                     => 'range-slider-one',
    'input_attrs'              => array(
        'min'                  => 1,
        'max'                  => 10,
        'step'                 => 0.5,
    ),
    'priority'                 => 375,
    'active_callback'          => 'influence_blog_is_footer_two_advance_enable',
) ) );
