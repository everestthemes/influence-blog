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
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
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


} )( jQuery );
