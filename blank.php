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
