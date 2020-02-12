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
