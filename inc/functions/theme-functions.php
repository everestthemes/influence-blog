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

/**
 * Function to get customizer options
 */
if ( !function_exists( 'influence_blog_get_mod' ) ) {

    function influence_blog_get_mod( $id ) {

        $influence_blog_prefix = 'influence_blog';

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

        $font = influence_blog_get_mod( $name, $name );

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
            <?php echo wp_kses_post( trim( $bg_style ) ); ?>
        }
        body.wide {
            <?php echo esc_attr( trim( $style ) ); ?>
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
    * prints dynamic sidebar
    */
    function influence_blog_blogpage_get_sidebar( $position, $area, $col, $sticky, $check ) {

        $pos = false;

        $pos = influence_blog_check_sidebar_position( $position, $check );

        if( $pos == true ) {

            $col_class = influence_blog_col_value( $col, 'lg' );

            if( $sticky ) {

                $col_class .= ' sticky-portion';
            }

            ?>
            <div class="col-12 <?php echo esc_attr( $col_class ); ?>">
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

if( !function_exists( 'influence_blog_blogpage_container_class' ) ) {
    /*
    * Returns col value
    */
    function influence_blog_blogpage_container_class( $position, $col, $sticky ) {

        $col_class = 'col-12 ';

        if( $position != 'none' ) {

            $col_class .= influence_blog_col_value( $col, 'lg' );

        } else {

            $col_class .= 'col-lg-12';
        }

        if( $sticky ) {

            $col_class .= ' sticky-portion';
        }

        echo esc_attr( $col_class );
    }
}

/**
 * Customize Readmore Link.
 */
function influene_blog_post_excerpt_more( $more ) {

    if( is_admin() ) {
        return $more;
    }

  	return '...';
}
add_filter( 'excerpt_more', 'influene_blog_post_excerpt_more' );



/**
* Filter the except length default.
*/
if( !function_exists( 'influence_blog_excerpt_length' ) ) {
   /*
    * Excerpt Length
    */
   function influence_blog_excerpt_length( $length ) {

       if( is_admin() ) {
           return $length;
       }

       $excerpt_length = influence_blog_get_mod( 'excerpt_length' );

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

add_action('wp_ajax_loadmore', 'influence_blog_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'influence_blog_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function influence_blog_loadmore_ajax_handler() {

    if( isset( $_POST['query'] ) ) {

        // prepare our arguments for the query
        $args = json_decode( sanitize_text_field( wp_unslash( $_POST['query'] ) ), true );
        $args['paged'] = isset( $_POST['page'] ) ? sanitize_text_field( wp_unslash( $_POST['page'] ) ) + 1 : ''; // we need next page to be loaded
        $args['post_status'] = 'publish';

        $section_one_query = influence_blog_get_mod( 'blogpage_section_one_content_query_toggle' );

        if( $section_one_query ) {

            $cat = influence_blog_get_mod( 'blogpage_section_one_content_category' );

            $order = influence_blog_get_mod( 'blogpage_section_one_content_orderby' );

            $sort = influence_blog_get_mod( 'blogpage_section_one_content_sort_order' );

            $num = influence_blog_get_mod( 'blogpage_section_one_content_posts_number' );

            if( !empty( $cat ) ) {

                if( is_array( $cat ) ) {

                    $args['category_name'] = implode( ',', $cat );

                } else {

                    $args['category_name'] = $cat;
                }
            }

            if( !empty( $order ) ) {

                $args['orderby'] = $order;

            } else {

                $args['orderby'] = esc_html( 'date' );

            }

            if( !empty( $sort ) ) {

                $args['order'] = $sort;

            } else {

                $args['order'] = esc_html( 'desc' );

            }

            if( !empty( $num ) ) {

                $args['posts_per_page'] = absint( $num );
            }
        }

        // it is always better to use WP_Query but not here
        query_posts( $args );

        if( have_posts() ) :

            ?>
            <div id="content" class="row">
            <?php

            // run the loop
            while( have_posts() ): the_post();

                $section_one_layout = influence_blog_get_mod( 'blogpage_section_one_layout_select' );

                if( $section_one_layout == 'one' || $section_one_layout == 'two' || $section_one_layout == 'three' ) {

                    get_template_part( 'template-parts/section-one/content/content', $section_one_layout );
                }

                $section_one_template = apply_filters( 'influence_blog_section_one_layout_template', $section_one_layout );

            endwhile;
            ?></div><?php
            if( isset( $_POST['first_page'] ) ) {
                influence_blog_paginator( sanitize_text_field( wp_unslash( $_POST['first_page'] ) ) );
            }
        endif;
        die; // here we exit the script and even no wp_reset_query() required!
    }
}

function influence_blog_paginator( $first_page_url ){

	global $wp_query;

	$first_page_url = untrailingslashit( $first_page_url );

	$first_page_url_exploded = array();

	$first_page_url_exploded = explode( "/?", $first_page_url );

	$search_query = '';

	if( isset( $first_page_url_exploded[ 1 ] ) ) {

		$search_query = "/?" . $first_page_url_exploded[ 1 ];
		$first_page_url = $first_page_url_exploded[ 0 ];
	}

	$posts_per_page = (int) $wp_query->query_vars[ 'posts_per_page' ];

	$current_page = (int) $wp_query->query_vars[ 'paged' ];

	$max_page = $wp_query->max_num_pages;

	if( $max_page <= 1 ) {

        return;
    }

	if( empty( $current_page ) || $current_page == 0 ) {

        $current_page = 1;
    }

	$links_in_the_middle = 2;

	$links_in_the_middle_minus_1 = $links_in_the_middle - 1;

	$first_link_in_the_middle = $current_page - floor( $links_in_the_middle_minus_1 / 2 );

	$last_link_in_the_middle = $current_page + ceil( $links_in_the_middle_minus_1 / 2 );

	if( $first_link_in_the_middle <= 0 ) {

        $first_link_in_the_middle = 1;
    }

	if( ( $last_link_in_the_middle - $first_link_in_the_middle ) != $links_in_the_middle_minus_1 ) {

        $last_link_in_the_middle = $first_link_in_the_middle + $links_in_the_middle_minus_1;
    }

	if( $last_link_in_the_middle > $max_page ) {

        $first_link_in_the_middle = $max_page - $links_in_the_middle_minus_1;

        $last_link_in_the_middle = (int) $max_page;
    }

	if( $first_link_in_the_middle <= 0 ) {

        $first_link_in_the_middle = 1;
    }

	// begin to generate HTML of the pagination
	$pagination = '<div class="ifb-pagination"><div class="pagination-entry"><nav id="influence_blog_pagination" class="navigation pagination" role="navigation"><div class="nav-links" style="display:none;">';

	// when to display "..." and the first page before it
	if ( $first_link_in_the_middle >= 2 && $links_in_the_middle < $max_page ) {

		$pagination.= '<a href="'. esc_url( $first_page_url ) . esc_attr( $search_query ) . '" class="page-numbers">1</a>'; // first page

		if( $first_link_in_the_middle != 2 ) {

			$pagination .= '<span class="page-numbers extend">...</span>';
        }
	}

	for( $i = $first_link_in_the_middle; $i <= $last_link_in_the_middle; $i++ ) {

		if( $i == $current_page ) {

			$pagination.= '<span class="page-numbers current">'.absint( $i ).'</span>';

		} else {

			$pagination .= '<a href="'. esc_url( $first_page_url ) . '/page/' . absint( $i ) . esc_attr( $search_query ) .'" class="page-numbers">'.absint( $i ).'</a>';
		}
	}

	if ( $last_link_in_the_middle < $max_page ) {

		if( $last_link_in_the_middle != ( $max_page-1 ) ) {

			$pagination .= '<span class="page-numbers extend">...</span>';
        }

		$pagination .= '<a href="'. esc_url( $first_page_url ) . '/page/' . esc_attr( $max_page ) . esc_attr( $search_query ) .'" class="page-numbers">'. esc_html( $max_page ) .'</a>';
	}

	// end HTML
	$pagination.= "</div></nav></div></div>\n";

	if( $current_page < $max_page ) {

		$pagination.= '<div class="loadmore"><button id="influence_blog_loadmore" class="load-more-btn">' . esc_html__( 'Load More', 'influence-blog' ) . '<span class="load-more-icon"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i></span></button>';
    }

	// replace first page before printing it
	echo str_replace( array( "/page/1?", "/page/1\"" ), array( "?", "\"" ), $pagination ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

if( !function_exists( 'influence_blog_default_archive_widget' ) ) :
    /**
    * Filter for default archive widget
    */
    function influence_blog_default_archive_widget($links) {

        $links = str_replace('</a>&nbsp;(', '</a> <span class="count">(', $links);
        $links = str_replace(')', ')</span>', $links);
        return $links;
    }
endif;
add_filter('get_archives_link', 'influence_blog_default_archive_widget');

if( !function_exists( 'influence_blog_cat_count_span' ) ) :
    /**
     * Filter the default categories widget
     */
    function influence_blog_cat_count_span( $links ) {

        $links = str_replace( '</a> (', '</a><span class="count">(', $links );
        $links = str_replace( ')', ')</span>', $links );
        return $links;
    }
endif;
add_filter( 'wp_list_categories', 'influence_blog_cat_count_span' );

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
