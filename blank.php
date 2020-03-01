/**
 * Arrange header three menu icon
 */
if( ! function_exists( 'influence_blog_arrange_header_three_icon' ) ) {

    function influence_blog_arrange_header_three_icon() {

        /**
        * Hook - influence_blog_header_menu_icon
        *
        * @hooked influence_blog_header_menu_icon_action - 75
        */
        do_action( 'influence_blog_header_menu_icon' );
    }
}
