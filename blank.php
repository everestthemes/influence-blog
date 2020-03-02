c( 'influence_blog_header_three_design_search_icon_color', function( value ) {
    value.bind( function( to ) {
        var $child = $( '.customizer-influence_blog_header_three_design_search_icon_color' );
        if ( to ) {
            var style = '<style class="customizer-influence_blog_header_three_design_search_icon_color">.header-layout1 .search-icon .btn-search { color: ' + to + '; }</style>';
            if ( $child.length ) {
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
            var style = '<style class="customizer-influence_blog_header_three_design_search_icon_hover_color">.header-layout1 .search-icon .btn-search:hover { color: ' + to + '; }</style>';
            if ( $child.length ) {
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
            var style = '<style class="customizer-influence_blog_header_three_design_search_icon_bg_color">.header-layout1 .search-icon .btn-search { background-color: ' + to + '; }</style>';
            if ( $child.length ) {
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
            var style = '<style class="customizer-influence_blog_header_three_design_search_icon_bg_hover_color">.header-layout1 .search-icon .btn-search:hover { background-color: ' + to + '; }</style>';
            if ( $child.length ) {
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
            var style = '<style class="customizer-influence_blog_typo_header_three_design_search_icon_size_d">.header-layout1 .search-icon .btn-search { font-size: ' + to + 'px; }</style>';
            if ( $child.length ) {
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
            var style = '<style class="customizer-influence_blog_typo_header_three_design_search_icon_size_t">@media (max-width: 768px) { .header-layout1 .search-icon .btn-search { font-size: ' + to + 'px; } }</style>';
            if ( $child.length ) {
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
            var style = '<style class="customizer-influence_blog_typo_header_three_design_search_icon_size_m">@media (max-width: 480px) { .header-layout1 .search-icon .btn-search { font-size: ' + to + 'px; } }</style>';
            if ( $child.length ) {
                $child.replaceWith( style );
            } else {
                $( 'head' ).append( style );
            }
        } else {
            $child.remove();
        }
    } );
} );
