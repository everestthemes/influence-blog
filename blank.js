c( 'influence_blog_footer_two_design_widget_content_color', function( value ) {
    value.bind( function( to ) {
        var $child = $( '.customizer-influence_blog_footer_two_design_widget_content_color' );
        if ( to ) {
            var style = '<style class="customizer-influence_blog_footer_two_design_widget_content_color">.footer-mid-sec .widget, .footer-mid-sec .widget a, .footer-mid-sec .widget ul li a, .footer-mid-sec .widget_tag_cloud .tagcloud a, .footer-mid-sec input[type="text"], .footer-mid-sec input[type="email"], .footer-mid-sec input[type="url"], .footer-mid-sec input[type="password"], .footer-mid-sec input[type="search"], .footer-mid-sec input[type="number"], .footer-mid-sec input[type="tel"], .footer-mid-sec input[type="range"], .footer-mid-sec input[type="date"], .footer-mid-sec input[type="month"], .footer-mid-sec input[type="week"], .footer-mid-sec input[type="time"], .footer-mid-sec input[type="datetime"], .footer-mid-sec input[type="datetime-local"], .footer-mid-sec input[type="color"], .footer-mid-sec textarea, .footer-mid-sec .textwidget p, .footer-mid-sec .widget_recent_entries .post-date, .footer-mid-sec .widget.widget_recent_comments li, .footer-mid-sec .textwidget, .footer-mid-sec .textwidget.custom-html-widget h4, .footer-mid-sec .widget .gallery-caption, .footer-mid-sec .calendar_wrap caption, .footer-mid-sec form.search-form input[type="search"], .footer-mid-sec .widget_product_search form input[type="search"], .footer-mid-sec .widget_pages ul li .sub-menu>li>.sub-menu li:before, .footer-mid-sec .widget_nav_menu ul li .sub-menu>li>.sub-menu li:before, .footer-mid-sec .widget select { color: ' + to + '; }</style>';
            if ( $child.length ) {
                $child.replaceWith( style );
            } else {
                $( 'head' ).append( style );
            }
        } else {
            $child.remove();
        }
    } );
} );

c( 'influence_blog_footer_two_design_widget_content_hover_color', function( value ) {
    value.bind( function( to ) {
        var $child = $( '.customizer-influence_blog_footer_two_design_widget_content_hover_color' );
        if ( to ) {
            var style = '<style class="customizer-influence_blog_footer_two_design_widget_content_hover_color">.footer-mid-sec .widget a:hover, .footer-mid-sec .widget ul li a:hover, .footer-mid-sec .widget_tag_cloud .tagcloud a:hover { color: ' + to + '; }</style>';
            if ( $child.length ) {
                $child.replaceWith( style );
            } else {
                $( 'head' ).append( style );
            }
        } else {
            $child.remove();
        }
    } );
} );

c( 'influence_blog_footer_two_design_widget_content_bg_color', function( value ) {
    value.bind( function( to ) {
        var $child = $( '.customizer-influence_blog_footer_two_design_widget_content_bg_color' );
        if ( to ) {
            var style = '<style class="customizer-influence_blog_footer_two_design_widget_content_bg_color">.footer-mid-sec .widget_tag_cloud .tagcloud a { background-color: ' + to + '; }</style>';
            if ( $child.length ) {
                $child.replaceWith( style );
            } else {
                $( 'head' ).append( style );
            }
        } else {
            $child.remove();
        }
    } );
} );

c( 'influence_blog_footer_two_design_widget_content_border_color', function( value ) {
    value.bind( function( to ) {
        var $child = $( '.customizer-influence_blog_footer_two_design_widget_content_border_color' );
        if ( to ) {
            var style = '<style class="customizer-influence_blog_footer_two_design_widget_content_border_color">.footer-mid-sec .calendar_wrap table th, .footer-mid-sec .widget_tag_cloud .tagcloud a, .footer-mid-sec .widget_product_tag_cloud .tagcloud a { border: 1px solid ' + to + '; }</style>';
            if ( $child.length ) {
                $child.replaceWith( style );
            } else {
                $( 'head' ).append( style );
            }
        } else {
            $child.remove();
        }
    } );
} );

c( 'influence_blog_footer_two_design_widget_content_border_color', function( value ) {
    value.bind( function( to ) {
        var $child = $( '.customizer-influence_blog_footer_two_design_widget_content_border_color' );
        if ( to ) {
            var style = '<style class="customizer-influence_blog_footer_two_design_widget_content_border_color">.footer-mid-sec .widget.widget_recent_entries li, .footer-mid-sec .widget.widget_recent_comments li, .footer-mid-sec .widget.widget_meta li { border-bottom: 1px solid ' + to + '; }</style>';
            if ( $child.length ) {
                $child.replaceWith( style );
            } else {
                $( 'head' ).append( style );
            }
        } else {
            $child.remove();
        }
    } );
} );
