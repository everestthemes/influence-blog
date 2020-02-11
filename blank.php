c( 'influence_blog_site_layout_style_advance_m_p_mop', function( value ) {
        value.bind( function( to ) {
            var $child = $( '.customizer-influence_blog_site_layout_style_advance_m_p_mop' );
            if ( to ) {
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_mop">body.wide { padding-top: ' + to + 'px; }</style>';
                if ( $child.length ) {
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
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_right">body.wide { padding-right: ' + to + 'px; }</style>';
                if ( $child.length ) {
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
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_bottom">body.wide { padding-bottom: ' + to + 'px; }</style>';
                if ( $child.length ) {
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
                var style = '<style class="customizer-influence_blog_site_layout_style_advance_m_p_left">body.wide { padding-left: ' + to + 'px; }</style>';
                if ( $child.length ) {
                    $child.replaceWith( style );
                } else {
                    $( 'head' ).append( style );
                }
            } else {
                $child.remove();
            }
        } );
    } );
