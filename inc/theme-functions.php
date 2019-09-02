<?php
/**
 * Influence Blog functions and definitions which enhance the theme
 *
 * @package Influence_Blog
 */


/**
 * Funtion To Get Google Fonts
 */
if ( !function_exists( 'influence_blog_fonts_url' ) ) :

    /**
     * Return Font's URL.
     *
     * @since 1.0.0
     * @return string Fonts URL.
     */
    function influence_blog_fonts_url() {

        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';

        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Lato font: on or off', 'influence-blog')) {

            $fonts[] = 'Lato:400,400i,700,700i';
        }
        
        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Lobster font: on or off', 'influence-blog')) {

            $fonts[] = 'Lobster';
        }

        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */

        if ('off' !== _x('on', 'Fira Sans font: on or off', 'influence-blog')) {

            $fonts[] = 'Fira+Sans:400,400i,500,500i,600,600i,700,700i,800,800i';
        }
        
        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */

        if ('off' !== _x('on', 'Atomic Age font: on or off', 'influence-blog')) {

            $fonts[] = 'Atomic+Age';
        }

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), '//fonts.googleapis.com/css' );
        }

        return $fonts_url;
    }
endif;



/**
 * Function to get customizer options
 */
if ( !function_exists( 'ifb_mod' ) ) {
    
    function ifb_mod( $id, $default ) {

        global $influence_blog_prefix;

        if( empty( $id || $default ) ) {
            return;
        }

        $field_id = $influence_blog_prefix . '_' . $id;

        $theme_mod = '';

        if( !empty( $default ) ) {

            $theme_mod = get_theme_mod( $field_id, $default );
        } else {

            $theme_mod = get_theme_mod( $field_id );
        }

        return $theme_mod;
    }
}



/**
 * Customize Readmore Link.
 */
function post_excerpt_more( $more ) {
    
    if( is_admin() ) {
        return $more;
    }
    
  	return '...';
}
add_filter( 'excerpt_more', 'post_excerpt_more' );



/**
* Filter the except length to 40 words default.
*/
if( !function_exists( 'influence_blog_excerpt_length' ) ) {
   /*
    * Excerpt Length
    */
   function influence_blog_excerpt_length( $length ) {
       
       if( is_admin() ) {
           return $length;
       }

       $excerpt_length = ifb_mod( 'excerpt_length', 25 );

       if( absint( $excerpt_length ) > 0 ) {
           $excerpt_length = absint( $excerpt_length );
       }
       return $excerpt_length;
   }
}
add_filter( 'excerpt_length', 'influence_blog_excerpt_length' );



/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function influence_blog_search_form( $form ) {
    
    $form = '<form role="search" method="get" id="search-form" class="search-form" action="' . esc_url( home_url( '/' ) ) . '" >
        <input type="search" class="search-field" placeholder="' . esc_attr_x( 'Type Something', 'placeholder', 'influence-blog' ) . '" value="' . get_search_query() . '" name="s" />
        <input type="submit" id="submit" value="' . esc_attr_x( 'Search', 'value', 'influence-blog' ) . '">
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'influence_blog_search_form' );



/*
 * Menu Wrapper
 */
if( ! function_exists( 'influence_blog_main_navigation_wrap' ) ) {
	
	function influence_blog_main_navigation_wrap() {

	  	$wrap  = '<ul id="%1$s" class="nav-pd %2$s">';
	  	$wrap .= '<li class="current_page_item"><a href="' . esc_url( home_url( '/' ) ) . '"><i class="fa fa-home"></i></a></li>';
	  	$wrap .= '%3$s';
	  	$wrap .= '</ul>';

	  	return $wrap;
	}
}



/**
 * Fallback For Main Menu
 */
if ( !function_exists( 'influence_blog_navigation_fallback' ) ) {
	/**
     * Return unordered list.
     *
     * @since 1.0.0
     * @return unordered list.
     */
    function influence_blog_navigation_fallback() {
        ?>
        <ul class="nav-pd">
            <?php
            if( current_user_can( 'edit_theme_options' ) ) {
                ?>
                <li><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Add Menu', 'influence-blog' ); ?></a></li>
                <?php
            } else {
                wp_list_pages( array( 'title_li' => '', 'depth' => 3 ) ); 
            }
            ?>
        </ul>
        <?php
    }
}