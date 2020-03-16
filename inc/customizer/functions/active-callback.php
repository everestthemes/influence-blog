<?php
/**
 * Collection of active callback functions for customizer fields.
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
 * Active callback function for homepage front page is selected.
 */
if( ! function_exists( 'influence_blog_is_homepage_front_page' ) ) {

	function influence_blog_is_homepage_front_page( $control ) {

		if ( $control->manager->get_setting( 'show_on_front' )->value() == 'page' ) {

			return true;

		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for site layout design options image is selected.
 */
if( ! function_exists( 'influence_blog_is_site_layout_design_options_image' ) ) {

	function influence_blog_is_site_layout_design_options_image( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_style_design_options' )->value() == 'image' && $control->manager->get_setting( 'influence_blog_site_layout_style' )->value() !== 'wide' ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for site layout design options image and wide layout is selected.
 */
if( ! function_exists( 'influence_blog_is_site_layout_design_options_image_wide' ) ) {

	function influence_blog_is_site_layout_design_options_image_wide( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_style_design_options' )->value() == 'image' && $control->manager->get_setting( 'influence_blog_site_layout_style' )->value() == 'wide' ) {

			return true;

		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for site layout style wide is selected.
 */
if( ! function_exists( 'influence_blog_is_site_layout_style_wide' ) ) {

	function influence_blog_is_site_layout_style_wide( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_style' )->value() == 'wide' && $control->manager->get_setting( 'influence_blog_site_layout_style_design_options' )->value() == 'color' ) {

			return true;

		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for site layout style wide is not selected.
 */
if( ! function_exists( 'influence_blog_not_site_layout_style_wide' ) ) {

	function influence_blog_not_site_layout_style_wide( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_style' )->value() !== 'wide' && $control->manager->get_setting( 'influence_blog_site_layout_style_design_options' )->value() == 'color' ) {

			return true;

		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for site layout advance toggle true is not selected.
 */
if( ! function_exists( 'influence_blog_not_site_layout_advance_toggle' ) ) {

	function influence_blog_not_site_layout_advance_toggle( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_advance_toggle' )->value() == true ) {

			return true;

		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for site layout style wide and advance true is selected.
 */
if( ! function_exists( 'influence_blog_not_site_layout_style_wide_advance' ) ) {

	function influence_blog_not_site_layout_style_wide_advance( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_style' )->value() !== 'wide' && $control->manager->get_setting( 'influence_blog_site_layout_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for site layout style box and advance true is selected.
 */
if( ! function_exists( 'influence_blog_is_site_layout_style_box_advance' ) ) {

	function influence_blog_is_site_layout_style_box_advance( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_style' )->value() == 'boxed' && $control->manager->get_setting( 'influence_blog_site_layout_advance_toggle' )->value() == true ) {

			return true;

		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for site layout style framed and advance true is selected.
 */
if( ! function_exists( 'influence_blog_is_site_layout_style_framed_advance' ) ) {

	function influence_blog_is_site_layout_style_framed_advance( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_style' )->value() == 'framed' && $control->manager->get_setting( 'influence_blog_site_layout_advance_toggle' )->value() == true ) {

			return true;

		} else {
			
			return false;
		}		
	}
}

/**
 * Active callback function for site layout container is not uniform and advance true is selected.
 */
if( ! function_exists( 'influence_blog_not_site_layout_container_uniform_advance' ) ) {

	function influence_blog_not_site_layout_container_uniform_advance( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_site_layout_container_style' )->value() !== 'uniform' && $control->manager->get_setting( 'influence_blog_site_layout_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for header layout options select one is selected.
 */
if( ! function_exists( 'influence_blog_is_header_layout_options_select_one' ) ) {

	function influence_blog_is_header_layout_options_select_one( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_header_layout_options_select' )->value() == 'one' ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for header layout options select two is selected.
 */
if( ! function_exists( 'influence_blog_is_header_layout_options_select_two' ) ) {

	function influence_blog_is_header_layout_options_select_two( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_header_layout_options_select' )->value() == 'two' ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for header layout options advance toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_header_layout_options_advance_enable' ) ) {

	function influence_blog_is_header_layout_options_advance_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_header_layout_options_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for header one layout one advance toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_header_one_layout_one_advance_enable' ) ) {

	function influence_blog_is_header_one_layout_one_advance_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_header_one_layout_one_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for header two advance toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_header_two_advance_enable' ) ) {

	function influence_blog_is_header_two_advance_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_header_two_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for header three advance toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_header_three_advance_enable' ) ) {

	function influence_blog_is_header_three_advance_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_header_three_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for banner display toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_banner_display_enable' ) ) {

	function influence_blog_is_banner_display_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_banner_display_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for banner layout options one is selected.
 */
if( ! function_exists( 'influence_blog_is_banner_layout_options_one' ) ) {

	function influence_blog_is_banner_layout_options_one( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_banner_layout_options_select' )->value() == 'one' ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for banner layout options two is selected.
 */
if( ! function_exists( 'influence_blog_is_banner_layout_options_two' ) ) {

	function influence_blog_is_banner_layout_options_two( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_banner_layout_options_select' )->value() == 'two' ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for banner content options query toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_banner_content_options_query_enable' ) ) {

	function influence_blog_is_banner_content_options_query_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_banner_content_options_query_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for blog page section one toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_blogpage_section_one_display_enable' ) ) {

	function influence_blog_is_blogpage_section_one_display_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_blogpage_section_one_display_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for blog page section one query toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_blogpage_section_one_query_enable' ) ) {

	function influence_blog_is_blogpage_section_one_query_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_blogpage_section_one_content_query_toggle' )->value() == true && $control->manager->get_setting( 'influence_blog_blogpage_section_one_display_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for blog page section one pagination toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_blogpage_section_one_pagination_enable' ) ) {

	function influence_blog_is_blogpage_section_one_pagination_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_blogpage_section_one_pagination_toggle' )->value() == true && $control->manager->get_setting( 'influence_blog_blogpage_section_one_display_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer one first widget toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_one_first_widget_enable' ) ) {

	function influence_blog_is_footer_one_first_widget_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_one_first_widget_area_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer one second widget toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_one_second_widget_enable' ) ) {

	function influence_blog_is_footer_one_second_widget_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_one_second_widget_area_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer one third widget toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_one_third_widget_enable' ) ) {

	function influence_blog_is_footer_one_third_widget_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_one_third_widget_area_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer one fourth widget toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_one_fourth_widget_enable' ) ) {

	function influence_blog_is_footer_one_fourth_widget_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_one_fourth_widget_area_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer one fifth widget toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_one_fifth_widget_enable' ) ) {

	function influence_blog_is_footer_one_fifth_widget_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_one_fifth_widget_area_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer one sixth widget toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_one_sixth_widget_enable' ) ) {

	function influence_blog_is_footer_one_sixth_widget_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_one_sixth_widget_area_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer one advance toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_one_advance_enable' ) ) {

	function influence_blog_is_footer_one_advance_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_one_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for footer two advance toggle true is selected.
 */
if( ! function_exists( 'influence_blog_is_footer_two_advance_enable' ) ) {

	function influence_blog_is_footer_two_advance_enable( $control ) {

		if ( $control->manager->get_setting( 'influence_blog_footer_two_advance_toggle' )->value() == true ) {

			return true;

		} else {

			return false;
		}
	}
}

/**
 * Active callback function for header one is enabled.
 */
if( ! function_exists( 'influence_blog_is_header_one' ) ) {

	function influence_blog_is_header_one( $control ) {

        $layout = $control->manager->get_setting( 'influence_blog_header_layout_options_select' )->value();

        if( $layout == 'one' ) {

            $value = $control->manager->get_setting( 'influence_blog_arrange_header_layout_one' )->value();

            $value = explode( ',', $value );

            foreach( $value as $v ) {

                $top = array( 'headerOneTop' );

                $v = explode( ':', $v );

                foreach( $top as $t ) {

                    if( $t == $v[0] ) {

                        if( $v[1] == 1 ) {

                            return true;

                        } else {

                            return false;
                        }
                    }
                }
            }
        }
	}
}

/**
 * Active callback function for middle header is enabled.
 */
if( ! function_exists( 'influence_blog_is_header_two' ) ) {

	function influence_blog_is_header_two( $control ) {

        $layout = $control->manager->get_setting( 'influence_blog_header_layout_options_select' )->value();

        if( $layout == 'one' ) {

            $value = $control->manager->get_setting( 'influence_blog_arrange_header_layout_one' )->value();

            $top = array( 'headerOneMiddle' );
        }

        if( $layout == 'two' ) {

            $value = $control->manager->get_setting( 'influence_blog_arrange_header_layout_two' )->value();

            $top = array( 'headerTwoMiddle' );
        }

        $value = explode( ',', $value );

        foreach( $value as $v ) {

            $v = explode( ':', $v );

            foreach( $top as $t ) {

                if( $t == $v[0] ) {

                    if( $v[1] == 1 ) {

                        return true;

                    } else {

                        return false;
                    }
                }
            }
        }
	}
}

/**
 * Active callback function for bottom header is enabled.
 */
if( ! function_exists( 'influence_blog_is_bottom_header' ) ) {

	function influence_blog_is_bottom_header( $control ) {

        $value = $control->manager->get_setting( 'influence_blog_arrange_header_layout_one' )->value();

        $value = explode( ',', $value );

        foreach( $value as $v ) {

            $top = array( 'headerOneBottom' );

            $v = explode( ':', $v );

            foreach( $top as $t ) {

                if( $t == $v[0] ) {

                    if( $v[1] == 1 ) {

                        return true;

                    } else {

                        return false;
                    }
                }
            }
        }
	}
}
