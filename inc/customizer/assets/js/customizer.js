/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

    var c = wp.customize;

	// Site title and description.
	c( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	c( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	c( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

    // Header tagline.
	c( 'influence_blog_display_tagline', function( value ) {
		value.bind( function( to ) {
			if ( false === to ) {
				$( '.site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
			}
		} );
	} );

    /*-----------------------------------------------------------------------------
							 Site layout
    -----------------------------------------------------------------------------*/

    /*---------------------------------- Site layout design -----------------------------------*/

    c( 'influence_blog_site_layout_style_design_outside', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_design_outside' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_design_outside">body.framed, body.boxed { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_design_inside', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_design_inside' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_design_inside">body.boxed .page-wrap, body.framed .page-wrap { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_design_bg', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_design_bg' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_design_bg">.container-style-content-boxed .primary-widget-area, .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Site layout advance -----------------------------------*/

    c( 'influence_blog_site_layout_style_advance_d_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_d_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_d_p_top">body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_d_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_d_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_d_p_right">body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-right: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_d_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_d_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_d_p_bottom">body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_d_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_d_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_d_p_left">body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-left: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_t_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_t_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_t_p_top">@media (max-width: 768px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_t_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_t_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_t_p_right">@media (max-width: 768px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_t_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_t_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_t_p_bottom">@media (max-width: 768px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_t_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_t_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_t_p_left">@media (max-width: 768px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_m_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_m_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_top">@media (max-width: 480px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_m_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_m_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_right">@media (max-width: 480px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_m_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_m_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_bottom">@media (max-width: 480px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_m_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_m_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_left">@media (max-width: 480px) { body.wide, body.boxed .page-wrap, body.framed .page-wrap { padding-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_boxed_width', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_boxed_width' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_boxed_width">body.boxed .page-wrap, body.framed .page-wrap { width: ' + to + 'vw; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_boxed_border_radius', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_boxed_border_radius' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_boxed_border_radius">body.boxed .page-wrap, body.framed .page-wrap { border-radius: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_boxed_border_width', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_boxed_border_width' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_boxed_border_width">body.boxed .page-wrap, body.framed .page-wrap { border-width: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_boxed_border_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_boxed_border_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_boxed_border_color">body.boxed .page-wrap, body.framed .page-wrap { border-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_b_d_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_b_d_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_b_d_m_right">body.boxed .page-wrap { margin-right: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_b_d_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_b_d_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_b_d_m_left">body.boxed .page-wrap { margin-left: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_b_t_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_b_t_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_b_t_m_right">@media (max-width: 768px) { body.boxed .page-wrap { margin-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_b_t_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_b_t_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_b_t_m_left">@media (max-width: 768px) { body.boxed .page-wrap { margin-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_b_m_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_b_m_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_b_m_m_right">@media (max-width: 480px) { body.boxed .page-wrap { margin-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_b_m_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_b_m_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_b_m_m_left">@media (max-width: 480px) { body.boxed .page-wrap { margin-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_d_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_d_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_d_m_top">body.framed .page-wrap { margin-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_d_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_d_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_d_m_right">body.framed .page-wrap { margin-right: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_d_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_d_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_d_m_bottom">body.framed .page-wrap { margin-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_d_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_d_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_d_m_left">body.framed .page-wrap { margin-left: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_t_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_t_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_t_m_top">@media (max-width: 768px) { body.framed .page-wrap { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_t_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_t_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_t_m_right">@media (max-width: 768px) { body.framed .page-wrap { margin-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_t_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_t_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_t_m_bottom">@media (max-width: 768px) { body.framed .page-wrap { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_t_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_t_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_t_m_left">@media (max-width: 768px) { body.framed .page-wrap { margin-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_m_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_m_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_m_m_top">@media (max-width: 480px) { body.framed .page-wrap { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_m_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_m_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_m_m_right">@media (max-width: 480px) { body.framed .page-wrap { margin-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_m_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_m_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_m_m_bottom">@media (max-width: 480px) { body.framed .page-wrap { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_style_advance_f_m_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_f_m_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_f_m_m_left">@media (max-width: 480px) { body.framed .page-wrap { margin-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*--------------------------Site layout container ------------------------------------*/

    c( 'influence_blog_site_layout_container_advance_b_d_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_p_top">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_d_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_p_right">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-right: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_d_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_p_bottom">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_d_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_p_left">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-left: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_p_top">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_p_right">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_p_bottom">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_p_left">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_p_top">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_p_right">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_p_bottom">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_p_left">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { padding-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_d_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_m_top">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_d_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_m_right">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-right: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_d_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_m_bottom">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_d_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_d_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_d_m_left">.container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-left: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_m_top">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_m_right">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_m_bottom">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_t_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_t_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_t_m_left">@media (max-width: 768px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_m_top">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_m_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_m_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_m_right">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_m_bottom">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_site_layout_container_advance_b_m_m_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_container_advance_b_m_m_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_container_advance_b_m_m_left">@media (max-width: 480px) { .container-style-boxed .primary-widget-area, .container-style-boxed .secondary-widget-area .widget, .container-style-content-boxed .primary-widget-area { margin-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*-----------------------------------------------------------------------------
							 Global typography
    -----------------------------------------------------------------------------*/

    /*---------------------------------- Body typography -----------------------------------*/

    c( 'influence_blog_typo_body_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_transform">body { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_size_d">body { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_size_t">@media (max-width: 768px) { body { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_size_m">@media (max-width: 480px) { body { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_height_d">body { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_height_t">@media (max-width: 768px) { body { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_height_m">@media (max-width: 480px) { body { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_spacing_d">body { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_spacing_t">@media (max-width: 768px) { body { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_body_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_body_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_body_spacing_m">@media (max-width: 480px) { body { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Heading typography -----------------------------------*/

    c( 'influence_blog_typo_heading_H1_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_transform">h1 { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_size_d">h1 { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_height_d">h1 { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_spacing_d">h1 { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_transform">h2 { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_size_d">h2 { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_height_d">h2 { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_spacing_d">h2 { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_transform">h3 { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_size_d">h3 { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_height_d">h3 { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_spacing_d">h3 { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_transform">h4 { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_size_d">h4 { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_height_d">h4 { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_spacing_d">h4 { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_transform">h5 { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_size_d">h5 { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_height_d">h5 { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_spacing_d">h5 { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_transform">h6 { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_size_d">h6 { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_height_d">h6 { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_spacing_d">h6 { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_size_t">@media (max-width: 768px) { h1 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_height_t">@media (max-width: 768px) { h1 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_spacing_t">@media (max-width: 768px) { h1 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_size_t">@media (max-width: 768px) { h2 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_height_t">@media (max-width: 768px) { h2 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_spacing_t">@media (max-width: 768px) { h2 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_size_t">@media (max-width: 768px) { h3 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_height_t">@media (max-width: 768px) { h3 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_spacing_t">@media (max-width: 768px) { h3 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_size_t">@media (max-width: 768px) { h4 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_height_t">@media (max-width: 768px) { h4 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_spacing_t">@media (max-width: 768px) { h4 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_size_t">@media (max-width: 768px) { h5 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_height_t">@media (max-width: 768px) { h5 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_spacing_t">@media (max-width: 768px) { h5 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_size_t">@media (max-width: 768px) { h6 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_height_t">@media (max-width: 768px) { h6 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_spacing_t">@media (max-width: 768px) { h6 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_size_m">@media (max-width: 480px) { h1 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_height_m">@media (max-width: 480px) { h1 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H1_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H1_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H1_spacing_m">@media (max-width: 480px) { h1 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_size_m">@media (max-width: 480px) { h2 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_height_m">@media (max-width: 480px) { h2 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H2_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H2_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H2_spacing_m">@media (max-width: 480px) { h2 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_size_m">@media (max-width: 480px) { h3 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_height_m">@media (max-width: 480px) { h3 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H3_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H3_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H3_spacing_m">@media (max-width: 480px) { h3 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_size_m">@media (max-width: 480px) { h4 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_height_m">@media (max-width: 480px) { h4 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H4_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H4_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H4_spacing_m">@media (max-width: 480px) { h4 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_size_m">@media (max-width: 480px) { h5 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_height_m">@media (max-width: 480px) { h5 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H5_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H5_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H5_spacing_m">@media (max-width: 480px) { h5 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_size_m">@media (max-width: 480px) { h6 { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_height_m">@media (max-width: 480px) { h6 { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_heading_H6_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_heading_H6_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_heading_H6_spacing_m">@media (max-width: 480px) { h6 { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*-----------------------------------------------------------------------------
							 Global color
    -----------------------------------------------------------------------------*/

    /*---------------------------------- theme color -----------------------------------*/

    c( 'influence_blog_color_theme', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_color_theme' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_color_theme">.foot-top-sec { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- text color -----------------------------------*/

    c( 'influence_blog_color_text', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_color_text' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_color_text">p { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- link color -----------------------------------*/

    c( 'influence_blog_color_link', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_color_link' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_color_link">a { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- link hover color -----------------------------------*/

    c( 'influence_blog_color_link_hover', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_color_link_hover' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_color_link_hover">a:hover { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*-----------------------------------------------------------------------------
							 Header settings
    -----------------------------------------------------------------------------*/

    /*-----------------------------------------------------------------------------
							 Header layout options
    -----------------------------------------------------------------------------*/

    /*---------------------------------- Design - Header background color -----------------------------------*/

    c( 'influence_blog_header_layout_options_hedader_bg_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_layout_options_hedader_bg_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_layout_options_hedader_bg_color">.header-layout1 .header-top-block:before, .header-layout2:before { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Advance - Header background image -----------------------------------*/

    c( 'influence_blog_header_layout_options_advance_bg_image_size', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_layout_options_advance_bg_image_size' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_layout_options_advance_bg_image_size">.header-layout1 .header-top-block, .header-layout2 { background-size: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_layout_options_advance_bg_image_position_x', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_layout_options_advance_bg_image_position_x' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_layout_options_advance_bg_image_position_x">.header-layout1 .header-top-block, .header-layout2 { background-position-x: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_layout_options_advance_bg_image_position_y', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_layout_options_advance_bg_image_position_y' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_layout_options_advance_bg_image_position_y">.header-layout1 .header-top-block, .header-layout2 { background-position-y: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_layout_options_advance_header_height', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_layout_options_advance_header_height' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_layout_options_advance_header_height">.header-layout1 .header-top-block, .header-layout2 { height: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*-----------------------------------------------------------------------------
							 Header one options
    -----------------------------------------------------------------------------*/

    /*---------------------------------- General -----------------------------------*/

    c( 'influence_blog_header_one_layout_one_menu_alignment', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_menu_alignment' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_menu_alignment">.top-bar-menu { text-align: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_social_links_alignment', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_social_links_alignment' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_social_links_alignment">.top-social-icon { text-align: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Design -----------------------------------*/

    c( 'influence_blog_header_one_layout_one_design_bg_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_design_bg_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_design_bg_color">.header-topbar-block { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header one layout one design menu color -----------------------------------*/

    c( 'influence_blog_header_one_layout_one_design_menu_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_design_menu_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_design_menu_color">.top-bar-menu ul li a { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_design_menu_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_design_menu_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_design_menu_hover_color">.top-bar-menu ul li a:hover { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_design_menu_sep_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_design_menu_sep_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_design_menu_sep_color">.top-bar-menu ul li a { border-right: 1px solid ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header one layout one design menu typo typography -----------------------------------*/

    c( 'influence_blog_typo_header_one_layout_one_design_menu_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_transform">.top-bar-menu ul li a { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_size_d">.top-bar-menu ul li a { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_size_t">@media (max-width: 768px) { .top-bar-menu ul li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_size_m">@media (max-width: 480px) { .top-bar-menu ul li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_height_d">.top-bar-menu ul li a { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_height_t">@media (max-width: 768px) { .top-bar-menu ul li a { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_height_m">@media (max-width: 480px) { .top-bar-menu ul li a { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_spacing_d">.top-bar-menu ul li a { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_spacing_t">@media (max-width: 768px) { .top-bar-menu ul li a { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_menu_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_menu_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_menu_spacing_m">@media (max-width: 480px) { .top-bar-menu ul li a { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header one layout one design social links color -----------------------------------*/

    c( 'influence_blog_header_one_layout_one_design_social_links_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_design_social_links_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_design_social_links_color">.top-social-icon li a { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_design_social_links_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_design_social_links_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_design_social_links_hover_color">.top-social-icon li a:hover { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_design_social_links_sep_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_design_social_links_sep_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_design_social_links_sep_color">.top-social-icon li a { border-left: 1px solid ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header one layout one design social links typography -----------------------------------*/

    c( 'influence_blog_typo_header_one_layout_one_design_social_links_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_social_links_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_social_links_size_d">.top-social-icon li a { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_social_links_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_social_links_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_social_links_size_t">@media (max-width: 768px) { .top-social-icon li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_one_layout_one_design_social_links_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_one_layout_one_design_social_links_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_one_layout_one_design_social_links_size_m">@media (max-width: 480px) { .top-social-icon li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header one layout one advance -----------------------------------*/

    c( 'influence_blog_header_one_layout_one_advance_d_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_d_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_d_p_top">.header-topbar-block { padding-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_d_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_d_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_d_p_right">.header-topbar-block { padding-right: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_d_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_d_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_d_p_bottom">.header-topbar-block { padding-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_d_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_d_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_d_p_left">.header-topbar-block { padding-left: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_t_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_t_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_t_p_top">@media (max-width: 768px) { .header-topbar-block { padding-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_t_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_t_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_t_p_right">@media (max-width: 768px) { .header-topbar-block { padding-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_t_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_t_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_t_p_bottom">@media (max-width: 768px) { .header-topbar-block { padding-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_t_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_t_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_t_p_left">@media (max-width: 768px) { .header-topbar-block { padding-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_m_p_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_m_p_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_m_p_top">@media (max-width: 480px) { .header-topbar-block { padding-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_m_p_right', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_m_p_right' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_m_p_right">@media (max-width: 480px) { .header-topbar-block { padding-right: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_m_p_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_m_p_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_m_p_bottom">@media (max-width: 480px) { .header-topbar-block { padding-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_one_layout_one_advance_m_p_left', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_one_layout_one_advance_m_p_left' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_one_layout_one_advance_m_p_left">@media (max-width: 480px) { .header-topbar-block { padding-left: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*-----------------------------------------------------------------------------
							 Header Two
    -----------------------------------------------------------------------------*/

    /*---------------------------------- Header two General -----------------------------------*/

    c( 'influence_blog_header_two_site_title_alignment', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_site_title_alignment' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_site_title_alignment">.logo-sec { text-align: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_ads_alignment', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_ads_alignment' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_ads_alignment">.side-img { text-align: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header two Design -----------------------------------*/

    c( 'influence_blog_typo_header_two_design_site_title_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_transform">.site-title { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_size_d">.site-title { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_size_t">@media (max-width: 768px) { .site-title { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_size_m">@media (max-width: 480px) { .site-title { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_height_d">.site-title { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_height_t">@media (max-width: 768px) { .site-title { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_height_m">@media (max-width: 480px) { .site-title { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_spacing_d">.site-title { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_spacing_t">@media (max-width: 768px) { .site-title { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_two_design_site_title_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_two_design_site_title_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_two_design_site_title_spacing_m">@media (max-width: 480px) { .site-title { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header two advance -----------------------------------*/

    c( 'influence_blog_header_two_advance_site_title_d_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_site_title_d_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_site_title_d_m_top">.logo-sec { margin-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_site_title_d_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_site_title_d_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_site_title_d_m_bottom">.logo-sec { margin-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_site_title_t_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_site_title_t_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_site_title_t_m_top">@media (max-width: 768px) { .logo-sec { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_site_title_t_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_site_title_t_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_site_title_t_m_bottom">@media (max-width: 768px) { .logo-sec { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_site_title_m_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_site_title_m_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_site_title_m_m_top">@media (max-width: 480px) { .logo-sec { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_site_title_m_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_site_title_m_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_site_title_m_m_bottom">@media (max-width: 480px) { .logo-sec { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_ads_d_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_ads_d_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_ads_d_m_top">.side-img { margin-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_ads_d_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_ads_d_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_ads_d_m_bottom">.side-img { margin-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_ads_t_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_ads_t_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_ads_t_m_top">@media (max-width: 768px) { .side-img { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_ads_t_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_ads_t_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_ads_t_m_bottom">@media (max-width: 768px) { .side-img { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_ads_m_m_top', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_ads_m_m_top' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_ads_m_m_top">@media (max-width: 480px) { .side-img { margin-top: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_two_advance_ads_m_m_bottom', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_two_advance_ads_m_m_bottom' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_two_advance_ads_m_m_bottom">@media (max-width: 480px) { .side-img { margin-bottom: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*-----------------------------------------------------------------------------
							 Header Three
    -----------------------------------------------------------------------------*/

    /*---------------------------------- Header three General -----------------------------------*/

    c( 'influence_blog_header_three_menu_icon_alignment', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_menu_icon_alignment' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_menu_icon_alignment">.home-icon { text-align: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_menu_alignment', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_menu_alignment' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_menu_alignment">.main_navigation { text-align: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_search_icon_alignment', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_search_icon_alignment' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_search_icon_alignment">.mobile-search.search-icon { text-align: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    /*---------------------------------- Header three Design -----------------------------------*/

    c( 'influence_blog_header_three_design_bg_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_bg_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_bg_color">.header-layout1 .header-medium-block, .header-layout2 .header-medium-block { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_border_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_border_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_border_color">.menu-bg-wrap { border-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_menu_icon_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_menu_icon_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_menu_icon_color">.home-icon a { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_menu_icon_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_menu_icon_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_menu_icon_hover_color">.home-icon a:hover { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_menu_icon_bg_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_menu_icon_bg_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_menu_icon_bg_color">.home-icon a { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_menu_icon_bg_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_menu_icon_bg_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_menu_icon_bg_hover_color">.home-icon a:hover { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_menu_icon_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_menu_icon_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_menu_icon_size_d">.home-icon a { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_menu_icon_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_menu_icon_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_menu_icon_size_t">@media (max-width: 768px) { .home-icon a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_menu_icon_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_menu_icon_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_menu_icon_size_m">@media (max-width: 480px) { .home-icon a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_main_menu_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_main_menu_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_main_menu_color">.main_navigation ul li a, .header-layout1 .main_navigation ul li a, .header-layout2 .main_navigation ul li a { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_main_menu_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_main_menu_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_main_menu_hover_color">.main_navigation ul li a:hover, .header-layout1 .main_navigation ul li a:hover, .header-layout2 .main_navigation ul li a:hover { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_main_menu_bg_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_main_menu_bg_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_main_menu_bg_color">.menu-bg-wrap { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_main_menu_bg_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_main_menu_bg_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_main_menu_bg_hover_color">.main_navigation ul li:before, .header-layout2 .main_navigation ul li.current_page_item a, .header-layout2 .main_navigation ul li:before { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_transform">.main_navigation ul li a { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_size_d">.main_navigation ul li a { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_size_t">@media (max-width: 768px) { .main_navigation ul li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_size_m">@media (max-width: 480px) { .main_navigation ul li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_height_d">.main_navigation ul li a { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_height_t">@media (max-width: 768px) { .main_navigation ul li a { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_height_m">@media (max-width: 480px) { .main_navigation ul li a { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_spacing_d">.main_navigation ul li a { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_spacing_t">@media (max-width: 768px) { .main_navigation ul li a { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_main_menu_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_main_menu_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_main_menu_spacing_m">@media (max-width: 480px) { .main_navigation ul li a { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_sub_menu_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_sub_menu_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_sub_menu_color">.main_navigation ul li.menu-item-has-children, .main_navigation ul li.menu-item-has-children ul.sub-menu li a, .main_navigation ul li.menu-item-has-children .sub-menu li.menu-item-has-children>.sub-menu li a { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_sub_menu_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_sub_menu_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_sub_menu_hover_color">.main_navigation ul li.menu-item-has-children ul.sub-menu li a:hover, .main_navigation ul li.menu-item-has-children .sub-menu li.menu-item-has-children>.sub-menu li a:hover { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_sub_menu_bg_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_sub_menu_bg_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_sub_menu_bg_color">.main_navigation ul li.menu-item-has-children .sub-menu, .main_navigation ul li.menu-item-has-children .sub-menu li.menu-item-has-children>.sub-menu li a, .main_navigation ul li.current_page_item a:hover, .main_navigation ul li.menu-item-has-children:hover .sub-menu li a { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_sub_menu_sep_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_sub_menu_sep_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_sub_menu_sep_color">.main_navigation ul li.menu-item-has-children ul.sub-menu li { border-bottom: 1px solid ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_transform', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_transform' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_transform">.main_navigation ul li.menu-item-has-children .sub-menu li a { text-transform: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_size_d">.main_navigation ul li.menu-item-has-children .sub-menu li a { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_size_t">@media (max-width: 768px) { .main_navigation ul li.menu-item-has-children .sub-menu li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_size_m">@media (max-width: 480px) { .main_navigation ul li.menu-item-has-children .sub-menu li a { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_height_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_height_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_height_d">.main_navigation ul li.menu-item-has-children .sub-menu li a { line-height: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_height_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_height_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_height_t">@media (max-width: 768px) { .main_navigation ul li.menu-item-has-children .sub-menu li a { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_height_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_height_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_height_m">@media (max-width: 480px) { .main_navigation ul li.menu-item-has-children .sub-menu li a { line-height: ' + to + '; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_spacing_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_spacing_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_spacing_d">.main_navigation ul li.menu-item-has-children .sub-menu li a { letter-spacing: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_spacing_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_spacing_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_spacing_t">@media (max-width: 768px) { .main_navigation ul li.menu-item-has-children .sub-menu li a { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_sub_menu_spacing_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_sub_menu_spacing_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_sub_menu_spacing_m">@media (max-width: 480px) { .main_navigation ul li.menu-item-has-children .sub-menu li a { letter-spacing: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_search_icon_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_search_icon_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_search_icon_color">.header-layout1 .search-icon .btn-search, .search-icon .btn-search { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_search_icon_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_search_icon_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_search_icon_hover_color">.header-layout1 .search-icon .btn-search:hover, .search-icon .btn-search:hover { color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_search_icon_bg_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_search_icon_bg_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_search_icon_bg_color">.header-layout1 .search-icon .btn-search, .search-icon .btn-search { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_header_three_design_search_icon_bg_hover_color', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_header_three_design_search_icon_bg_hover_color' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_header_three_design_search_icon_bg_hover_color">.header-layout1 .search-icon .btn-search:hover, .search-icon .btn-search:hover { background-color: ' + to + '; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_search_icon_size_d', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_search_icon_size_d' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_search_icon_size_d">.header-layout1 .search-icon .btn-search, .search-icon .btn-search { font-size: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_search_icon_size_t', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_search_icon_size_t' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_search_icon_size_t">@media (max-width: 768px) { .header-layout1 .search-icon .btn-search, .search-icon .btn-search { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );

    c( 'influence_blog_typo_header_three_design_search_icon_size_m', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_typo_header_three_design_search_icon_size_m' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_typo_header_three_design_search_icon_size_m">@media (max-width: 480px) { .header-layout1 .search-icon .btn-search, .search-icon .btn-search { font-size: ' + to + 'px; } }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );


} )( jQuery );
