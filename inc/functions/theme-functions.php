<?php
/**
 * Influence Blog functions and definitions which enhance the theme
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

function debug( $var ) {
    echo '<pre>';
    var_dump( $var );
    echo '</pre>';
}

/**
 * Function to get customizer options
 */
if ( !function_exists( 'ifb_get_mod' ) ) {

    function ifb_get_mod( $id ) {

        global $influence_blog_prefix;

        if( empty( $id ) ) {
            return;
        }

        $field_id = $influence_blog_prefix . '_' . $id;

        $default = influence_blog_defaults( $id );

        if( !empty( $default ) ) {

            $theme_mod = get_theme_mod( $field_id, $default );

        } else {

            $theme_mod = get_theme_mod( $field_id );
        }

        return $theme_mod;
    }
}

if ( !function_exists( 'influence_blog_default_fonts' ) ) {
    /**
     * Theme Default Fonts Load
     */
    function influence_blog_default_fonts() {

        $fonts = array(
            'Poppins:600,600i,700,700i,800,800i,900,900i',
            'Roboto:100,100i,300,300i,500,500i,700,700i',
        );

        $fonts_collection = add_query_arg(
            array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            ),
            'https://fonts.googleapis.com/css'
        );

        return $fonts_collection;
    }
}

if ( !function_exists( 'influence_blog_get_font_data' ) ) {
    /**
     * Function to get font data
     */
    function influence_blog_get_font_data( $name, $value='family' ) {

        $font = ifb_get_mod( $name, $name );

        $font = ! is_array( $font ) ? json_decode( $font, true ) : $font;

        $output;

        switch ( $value ) {

            case "family":
                $output = $font['font'];
                break;

            case "variants":
                $output = isset( $font[ 'variantlist' ] ) && is_array( $font[ 'variantlist' ] ) ? implode( ',', $font[ 'variantlist' ] ) : '';
                break;

            case "fontweight":
                $weight = $font['fontweight'];
                $output = 'regular' == $weight ? "normal" : $weight;
              break;
        }

        return $output;
    }
}

/**
 * Parse CSS
 */
if ( !function_exists( 'influence_blog_parse_css' ) ) {

	/**
	 * Parse CSS
	 *
	 * @param  array  $css_output Array of CSS.
	 * @param  string $min_media  Min Media breakpoint.
	 * @param  string $max_media  Max Media breakpoint.
	 * @return string             Generated CSS.
	 */
	function influence_blog_parse_css( $css_output = array(), $min_media = '', $max_media = '' ) {

		$parse_css = '';

		if ( is_array( $css_output ) && count( $css_output ) > 0 ) {

			foreach ( $css_output as $selector => $properties ) {

				if ( ! count( $properties ) ) {

					continue;
                }

				$temp_parse_css   = $selector . '{';

				$properties_added = 0;

				foreach ( $properties as $property => $value ) {

					if ( '' === $value ) {

						continue;
                    }

					$properties_added++;

					$temp_parse_css .= $property . ':' . $value . ';';
				}

				$temp_parse_css .= '}';

				if ( $properties_added > 0 ) {

					$parse_css .= $temp_parse_css;
				}
			}

			if ( '' != $parse_css && ( '' !== $min_media || '' !== $max_media ) ) {

				$media_css       = '@media ';
				$min_media_css   = '';
				$max_media_css   = '';
				$media_separator = '';

				if ( '' !== $min_media ) {

					$min_media_css = '(min-width:' . $min_media . 'px)';
				}

				if ( '' !== $max_media ) {

					$max_media_css = '(max-width:' . $max_media . 'px)';
				}

				if ( '' !== $min_media && '' !== $max_media ) {
					$media_separator = ' and ';
				}

				$media_css .= $min_media_css . $media_separator . $max_media_css . '{' . $parse_css . '}';

				return $media_css;
			}
		}

		return $parse_css;
	}
}

if ( !function_exists( 'influence_blog_trim_css' ) ) {
    /**
     * Trim CSS
     *
     * @since 1.0.0
     * @param string $css CSS content to trim.
     * @return string
     */
    function influence_blog_trim_css( $css = '' ) {

        // Trim white space for faster page loading.
        if ( ! empty( $css ) ) {

            $css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );

            $css = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $css );

            $css = str_replace( ', ', ',', $css );
        }

        return $css;
    }
}

if( !function_exists( 'influence_blog_custom_bg_image' ) ) :

    function influence_blog_custom_bg_image() {

        // $background is the saved custom image, or the default image.
        $background = set_url_scheme( get_background_image() );

        // $color is the saved custom color.
        // A default has to be specified in style.css. It will not be printed here.
        $color = get_background_color();

        if ( $color === get_theme_support( 'custom-background', 'default-color' ) ) {
            $color = false;
        }

        if ( ! $background && ! $color )
            return;

        $style = $color ? "background-color: #$color;" : '';

        $bg_style = '';

        if ( $background ) {
            $image = " background-image: url('$background');";

            $repeat = get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) );
            if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
                $repeat = 'repeat';
            $repeat = " background-repeat: $repeat;";

            $position = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) );
            if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
                $position = 'left';
            $position = " background-position: top $position;";

            $attachment = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) );
            if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
                $attachment = 'scroll';
            $attachment = " background-attachment: $attachment;";

            $bg_style = $image . $repeat . $position . $attachment;
        }
    ?>
    <style type="text/css" id="custom-background-css">
        body.boxed,
        body.framed {
            <?php echo trim( $bg_style ); ?>
        }
        body.wide {
            <?php echo trim( $style ); ?>
        }
    </style>
    <?php
    }
endif;

if( !function_exists( 'influence_blog_col_value' ) ) {
   /*
    * Returns col value
    */
   function influence_blog_col_value( $value, $size = null ) {

       $col_class = '';

       if( $size !== null && !empty( $size ) ) {

           $size = '-' . $size;

       } else {

           $size = '';
       }

       if( !empty( $value ) && absint( $value ) ) {

           $value = '-' . $value;

           $col_class = 'col' . $size . $value;
       }

       return $col_class;
   }
}

if( !function_exists( 'influence_blog_check_sidebar_position' ) ) {
    /*
    * Returns bool value
    */
    function influence_blog_check_sidebar_position( $position, $check ) {

        $status = false;

        if( $position === $check ) {

            $status = true;
        }

        return $status;
    }
}

if( !function_exists( 'influence_blog_blogpage_get_sidebar' ) ) {
    /*
    * Returns col value
    */
    function influence_blog_blogpage_get_sidebar( $position, $area, $col, $check ) {

        $pos = false;

        $pos = influence_blog_check_sidebar_position( $position, $check );

        if( $pos == true ) {

            $col_class = influence_blog_col_value( $col, 'lg' );

            ?>
            <div class="col-12 col-md-6 <?php echo esc_attr( $col_class ); ?>">
                <aside id="secondary" class="secondary-widget-area">
                    <?php
                    if( is_active_sidebar( $area ) ) {

                        dynamic_sidebar( $area );
                    }
                    ?>
                </aside><!-- // aside -->
            </div><!--side-bar col-3-->
            <?php
        }
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

       $excerpt_length = ifb_get_mod( 'excerpt_length', 25 );

       if( absint( $excerpt_length ) > 0 ) {
           $excerpt_length = absint( $excerpt_length );
       }
       return $excerpt_length;
   }
}
//add_filter( 'excerpt_length', 'influence_blog_excerpt_length' );



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



add_action('wp_ajax_load_posts_by_ajax', 'influence_blog_load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'influence_blog_load_posts_by_ajax_callback');

function influence_blog_load_posts_by_ajax_callback() {

    check_ajax_referer('load_more_posts', 'security');

    $paged = $_POST['page'];

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $paged,
    );

    $home_grid_posts_query = new WP_Query( $args );

    if ( $home_grid_posts_query->have_posts() ) :

        while ( $home_grid_posts_query->have_posts() ) :

            $home_grid_posts_query->the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */

            get_template_part( 'template-parts/content', 'home-grid' );

        endwhile;

    endif;

    wp_die();
}



/*
 * Hook - Plugin Recommendation
 */
if ( ! function_exists( 'influence_blog_recommended_plugins' ) ) :
    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function influence_blog_recommended_plugins() {

        $plugins = array(
            array(
                'name'     => esc_html__( 'Everest Toolkit', 'influence-blog' ),
                'slug'     => 'everest-toolkit',
                'required' => false,
            ),
        );

        tgmpa( $plugins );
    }

endif;
add_action( 'tgmpa_register', 'influence_blog_recommended_plugins' );
