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


} )( jQuery );
