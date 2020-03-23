<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function influence_blog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

    // Adds a class of no-sidebar when there is no sidebar present.
    $sidebar_position = influence_blog_sidebar_position();
	if ( ! is_active_sidebar( 'influence-blog-sidebar' ) || $sidebar_position == 'none' ) {
		$classes[] = 'no-sidebar';
	}

    $classes[] = influence_blog_site_layout_style();

    $classes[] = 'home';

	return $classes;
}
add_filter( 'body_class', 'influence_blog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function influence_blog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'influence_blog_pingback_header' );

/**
 * Arrange header one top
 */
if( ! function_exists( 'influence_blog_arrange_header_layout_one_top' ) ) {

    function influence_blog_arrange_header_layout_one_top() {

        /**
        * Hook - influence_blog_header_top
        *
        * @hooked influence_blog_header_top_action - 30
        */
        do_action( 'influence_blog_header_top' );
    }
}

/**
 * Arrange header one middle
 */
if( ! function_exists( 'influence_blog_arrange_header_layout_one_middle' ) ) {

    function influence_blog_arrange_header_layout_one_middle() {

        /**
        * Hook - influence_blog_header_middle
        *
        * @hooked influence_blog_header_middle_action - 50
        */
        do_action( 'influence_blog_header_middle' );
    }
}

/**
 * Arrange header two middle
 */
if( ! function_exists( 'influence_blog_arrange_header_layout_two_middle' ) ) {

    function influence_blog_arrange_header_layout_two_middle() {

        /**
        * Hook - influence_blog_header_middle
        *
        * @hooked influence_blog_header_middle_action - 50
        */
        do_action( 'influence_blog_header_middle' );
    }
}

/**
 * Arrange header one bottom
 */
if( ! function_exists( 'influence_blog_arrange_header_layout_one_bottom' ) ) {

    function influence_blog_arrange_header_layout_one_bottom() {

        /**
        * Hook - influence_blog_header_bottom
        *
        * @hooked influence_blog_header_bottom_action - 70
        */
        do_action( 'influence_blog_header_bottom' );
    }
}

/**
 * Arrange header two bottom
 */
if( ! function_exists( 'influence_blog_arrange_header_layout_two_bottom' ) ) {

    function influence_blog_arrange_header_layout_two_bottom() {

        /**
        * Hook - influence_blog_header_bottom
        *
        * @hooked influence_blog_header_bottom_action - 70
        */
        do_action( 'influence_blog_header_bottom' );
    }
}

/**
 * Arrange header one layout one menu
 */
if( ! function_exists( 'influence_blog_arrange_header_one_layout_one_menu' ) ) {

    function influence_blog_arrange_header_one_layout_one_menu() {

        ?>
        <div class="col-12 col-md-6">
            <?php

            /**
            * Hook - influence_blog_header_top_navigation
            *
            * @hooked influence_blog_header_top_navigation_action - 35
            */
            do_action( 'influence_blog_header_top_navigation' );

            ?>
        </div><!--//col-12 col-md-6-->
        <?php
    }
}

/**
 * Arrange header one layout one social links
 */
if( ! function_exists( 'influence_blog_arrange_header_one_layout_one_social_links' ) ) {

    function influence_blog_arrange_header_one_layout_one_social_links() {

        ?>
        <div class="col-12 col-md-6">
            <?php

            /**
            * Hook - influence_blog_header_social_links
            *
            * @hooked influence_blog_header_social_links_action - 40
            */
            do_action( 'influence_blog_header_social_links' );

            ?>
        </div><!--//col-12 col-md-6-->
        <?php
    }
}

/**
 * Arrange header two layout one logo
 */
if( ! function_exists( 'influence_blog_arrange_header_two_layout_one_two_logo' ) ) {

    function influence_blog_arrange_header_two_layout_one_two_logo() {

        $site_title_col = influence_blog_get_mod( 'header_two_advance_site_title_col' );

        $col_class = influence_blog_col_value( $site_title_col, 'md' );

        ?>
        <div class="col-12 <?php echo esc_attr( $col_class ); ?>">
            <?php
            /**
            * Hook - influence_blog_header_logo
            *
            * @hooked influence_blog_header_logo_action - 55
            */
            do_action( 'influence_blog_header_logo' );
            ?>
        </div><!--//col-md-4-->
        <?php
    }
}

/**
 * Arrange header two layout one ads
 */
if( ! function_exists( 'influence_blog_arrange_header_two_layout_one_two_ads' ) ) {

    function influence_blog_arrange_header_two_layout_one_two_ads() {

        $ads_col = influence_blog_get_mod( 'header_two_advance_ads_col' );

        $col_class = influence_blog_col_value( $ads_col, 'md' );

        ?>
        <div class="col-12 <?php echo esc_attr( $col_class ); ?>">
            <?php
            /**
            * Hook - influence_blog_header_advertisement
            *
            * @hooked influence_blog_header_advertisement_action - 60
            */
            do_action( 'influence_blog_header_advertisement' );
            ?>
        </div><!--//col-md-4-->
        <?php
    }
}

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


/**
 * Arrange header three menu
 */
if( ! function_exists( 'influence_blog_arrange_header_three_menu' ) ) {

    function influence_blog_arrange_header_three_menu() {

        /**
        * Hook - influence_blog_header_main_navigation
        *
        * @hooked influence_blog_header_main_navigation_action - 80
        */
        do_action( 'influence_blog_header_main_navigation' );
    }
}

/**
 * Arrange header three search
 */
if( ! function_exists( 'influence_blog_arrange_header_three_search' ) ) {

    function influence_blog_arrange_header_three_search() {

        /**
        * Hook - influence_blog_header_search
        *
        * @hooked influence_blog_header_search_action - 75
        */
        do_action( 'influence_blog_header_search' );
    }
}

/**
 * Arrange footer one
 */
if( ! function_exists( 'influence_blog_arrange_footer_one' ) ) {

    function influence_blog_arrange_footer_one() {

        /**
        * Hook - influence_blog_footer_top
        *
        * @hooked influence_blog_footer_top_action - 700
        */
        do_action( 'influence_blog_footer_top' );
    }
}

/**
 * Arrange footer two
 */
if( ! function_exists( 'influence_blog_arrange_footer_two' ) ) {

    function influence_blog_arrange_footer_two() {

        /**
        * Hook - influence_blog_footer_middle
        *
        * @hooked influence_blog_footer_middle_action - 800
        */
        do_action( 'influence_blog_footer_middle' );
    }
}

/**
 * Arrange footer three
 */
if( ! function_exists( 'influence_blog_arrange_footer_three' ) ) {

    function influence_blog_arrange_footer_three() {

        /**
        * Hook - influence_blog_footer_bottom
        *
        * @hooked influence_blog_footer_bottom_action - 900
        */
        do_action( 'influence_blog_footer_bottom' );
    }
}

/**
 * Arrange footer two title
 */
if( ! function_exists( 'influence_blog_arrange_footer_two_title' ) ) {

    function influence_blog_arrange_footer_two_title() {

        /**
        * Hook - influence_blog_footer_middle_title
        *
        * @hooked influence_blog_footer_middle_title_action - 805
        */
        do_action( 'influence_blog_footer_middle_title' );
    }
}

/**
 * Arrange footer two social links
 */
if( ! function_exists( 'influence_blog_arrange_footer_two_social_links' ) ) {

    function influence_blog_arrange_footer_two_social_links() {

        /**
        * Hook - influence_blog_footer_middle_social_links
        *
        * @hooked influence_blog_footer_middle_social_links_action - 810
        */
        do_action( 'influence_blog_footer_middle_social_links' );
    }
}

/**
 * Arrange footer two widget area
 */
if( ! function_exists( 'influence_blog_arrange_footer_two_widget_area' ) ) {

    function influence_blog_arrange_footer_two_widget_area() {

        /**
        * Hook - influence_blog_footer_middle_widget_area
        *
        * @hooked influence_blog_footer_middle_widget_area_action - 815
        */
        do_action( 'influence_blog_footer_middle_widget_area' );
    }
}

/**
 * Arrange banner content title
 */
if( ! function_exists( 'influence_blog_arrange_banner_content_title' ) ) {

    function influence_blog_arrange_banner_content_title() {

        ?>
        <h3 class="m-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php
    }
}

/**
 * Arrange banner content category
 */
if( ! function_exists( 'influence_blog_arrange_banner_content_category' ) ) {

    function influence_blog_arrange_banner_content_category() {

        influence_blog_categories_meta( true );
    }
}

/**
 * Arrange banner content content
 */
if( ! function_exists( 'influence_blog_arrange_banner_content_content' ) ) {

    function influence_blog_arrange_banner_content_content() {

        the_excerpt();
    }
}

/**
 * Arrange banner one content button
 */
if( ! function_exists( 'influence_blog_arrange_banner_one_content_button' ) ) {

    function influence_blog_arrange_banner_one_content_button() {

        $banner_read_more_text = influence_blog_get_mod( 'banner_read_more_text' );

        if( !empty( $banner_read_more_text ) ) {

            ?>
            <a href="<?php the_permalink(); ?>" class="btn-more">
                <?php
                echo esc_html( $banner_read_more_text );
                ?>
            </a>
            <?php
        }
    }
}

/**
 * Get pagination template
 */
if( ! function_exists( 'influence_blog_get_pagination_style' ) ) {

    function influence_blog_get_pagination_style( $style ) {

        switch( $style ) {

            case 'one':

                ?><div class="ifb-pagination"><?php
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => esc_html__( 'Prev', 'influence-blog' ),
                    'next_text' => esc_html__( 'Next', 'influence-blog' ),
                ) );

                ?></div><?php

                break;

            case 'two':

                ?><div class="ifb-pagination"><?php
                the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => false,
                    'next_text' => false,
                ) );

                ?></div><?php

                break;

            case 'three':

                influence_blog_paginator( get_pagenum_link() );

                break;

            default:
                //code is poetry
        }
    }
}



/**
 * Selects post listing layout template
 */
if( ! function_exists( 'influence_blog_post_listing_layout_template' ) ) {

    function influence_blog_post_listing_layout_template() {

        if( is_archive() ) {

            $layout = influence_blog_get_mod( 'archivepage_layout_options_select' );

            if( $layout == 'one' || $layout == 'two' || $layout == 'three' ) {

                get_template_part( 'template-parts/layout/layout', $layout );
            }

            $template = apply_filters( 'influence_blog_archivepage_layout_template', $layout );
        }

        if( is_search() ) {

            $layout = influence_blog_get_mod( 'searchpage_layout_options_select' );

            if( $layout == 'one' || $layout == 'two' || $layout == 'three' ) {

                get_template_part( 'template-parts/layout/layout', $layout );
            }

            $template = apply_filters( 'influence_blog_searchpage_layout_template', $layout );
        }
    }
}



/**
 * Function to get post and page sidebar position.
 */
if( ! function_exists( 'influence_blog_single_sidebar_position' ) ) {

	function influence_blog_single_sidebar_position() {

		$influence_blog_prefix = 'influence_blog';

		$sidebar_position_key = $influence_blog_prefix . '_sidebar_position';

		$single_sidebar_position = get_post_meta( get_the_ID(), $sidebar_position_key, true );

		return $single_sidebar_position;
	}
}



/**
 * Function to check position of sidebar.
 */
if( !function_exists( 'influence_blog_sidebar_position' ) ) {

    function influence_blog_sidebar_position() {

    	$sidebar_position = '';

        if( is_active_sidebar( 'influence-blog-sidebar' ) ) {

            $sidebar_position = influence_blog_single_sidebar_position();

            if( empty( $sidebar_position ) ) {

                $sidebar_position = 'right';
            }
        } else {

            $sidebar_position = 'none';
        }

    	return $sidebar_position;
    }
}



/**
 * Add custom class for main container containing posts.
 */
if( ! function_exists( 'influence_blog_main_container_class' ) ) {

	function influence_blog_main_container_class() {

		$container_class = '';

        $sidebar_position = influence_blog_sidebar_position();

		$sticky_enabled = apply_filters( 'influence_blog_singularpage_sticky_status', false );

		if( $sidebar_position == 'none' || !is_active_sidebar( 'influence-blog-sidebar' ) ) {

            $container_class = ' col-md-12 col-lg-12';

		} else {

			$container_class = ' col-12 col-md-6 col-lg-9';
		}

		if( $sticky_enabled == true && $sidebar_position != 'none' ) {

			$container_class .= ' sticky-portion';
		}

		echo esc_attr( $container_class );
	}
}



/**
 * Add custom class for sidebar.
 */
if( ! function_exists( 'influence_blog_sidebar_class' ) ) {

	function influence_blog_sidebar_class() {

		$sidebar_class = 'col-12 col-md-6 col-lg-3';

        $sticky_enabled = apply_filters( 'influence_blog_archivepage_sticky_status', false );

		if( $sticky_enabled == true ) {

			$sidebar_class .= ' sticky-portion';
		}

		echo esc_attr( $sidebar_class );
	}
}

if ( ! function_exists( 'influence_blog_has_header_image' ) ) :
	/*
	 * Prints style background image if post has header image
	 */
	function influence_blog_has_header_image() {

        $bg_image_style = '';

		if( has_header_image() ) {

            $bg_image_style = ' style="background-image: url(' . esc_url( get_header_image() ) . ');"';

        } else {

            $bg_image_style = '';
        }

        echo $bg_image_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;



if ( ! function_exists( 'influence_blog_has_image_url' ) ) :
	/*
	 * Prints style background image if post has thumbnail
	 */
	function influence_blog_has_image_url( $post_image_url ) {

        $bg_image_style = '';

		if( !empty( $post_image_url ) ) {

            $post_image_url = esc_url( $post_image_url );

            $bg_image_style = ' style="background-image: url(' . $post_image_url . ');"';

        } else {

            $bg_image_style = '';
        }

        echo $bg_image_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;



/**
 * Breadcrumb declaration of the theme.
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_breadcrumb' ) ) :

 	function influence_blog_breadcrumb( $display ) {

 		if( $display == true ) {
 			?>
 			<div class="breadcrumbs-sec breadcrumbs-layout1">
                <?php influence_blog_breadcrumb_trail(); ?>
            </div>
            <!--breadcdrum-->
 			<?php
 		}
 	}
endif;



/**
 * Function that defines pages links.
 */
if( ! function_exists('influence_blog_pages_links') ) {

function influence_blog_pages_links() {

        $pages_links_args = array(
            'before'    => '<div class="page-links">' . esc_html__( 'Pages:', 'influence-blog' ),
            'after'     => '</div>',
        );

        wp_link_pages( $pages_links_args );
    }
}



/**
 * Function that defines post navigation.
 */
if( ! function_exists( 'influence_blog_post_navigation' ) ) {

	function influence_blog_post_navigation() {

		$next_post = get_next_post();

	    $previous_post = get_previous_post();

        ?>
        <div class="post-navigation">
            <div class="nav-links">
              <?php
               if (!empty( $previous_post )):
                ?>
                <div class="nav-previous">
                    <span><?php echo esc_html__( 'Prev post', 'influence-blog' ); ?></span>
                    <a href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>"><?php echo esc_html( $previous_post->post_title ); ?></a>
                </div>
                <?php
                endif;

               if (!empty( $next_post )):
                ?>
                <div class="nav-next">
                    <span><?php echo esc_html__( 'Next post', 'influence-blog' ); ?></span>
                    <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_html( $next_post->post_title ); ?></a>
                </div>
                <?php
                endif;
                ?>
            </div><!-- // nav-links -->
        </div><!-- // post-navigation -->
        <?php
	}
}



/**
 * Function to return customizer option for image
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_image_option' ) ) :

 	function influence_blog_image_option() {

        $display_image = false;

        if( is_archive() ) {

            $display_image = influence_blog_get_mod( 'archivepage_content_options_image_toggle' );
        }

        if( is_search() ) {

            $display_image = influence_blog_get_mod( 'searchpage_content_options_image_toggle' );
        }

        return $display_image;
 	}
endif;

/**
 * Function to return customizer option for title
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_title_option' ) ) :

 	function influence_blog_title_option() {

        $display_title = false;

        if( is_archive() ) {

            $display_title = influence_blog_get_mod( 'archivepage_content_options_title_toggle' );
        }

        if( is_search() ) {

            $display_title = influence_blog_get_mod( 'searchpage_content_options_title_toggle' );
        }

        return $display_title;
 	}
endif;

/**
 * Function to return customizer option for category
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_category_option' ) ) :

 	function influence_blog_category_option() {

        $display_category = false;

        if( is_archive() ) {

            $display_category = influence_blog_get_mod( 'archivepage_content_options_cat_toggle' );
        }

        if( is_search() ) {

            $display_category = influence_blog_get_mod( 'searchpage_content_options_cat_toggle' );
        }

        return $display_category;
 	}
endif;

/**
 * Function to return customizer option for date
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_date_option' ) ) :

 	function influence_blog_date_option() {

        $display_date = false;

        if( is_archive() ) {

            $display_date = influence_blog_get_mod( 'archivepage_content_options_date_toggle' );
        }

        if( is_search() ) {

            $display_date = influence_blog_get_mod( 'searchpage_content_options_date_toggle' );
        }

        return $display_date;
 	}
endif;

/**
 * Function to return customizer option for content
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_content_option' ) ) :

 	function influence_blog_content_option() {

        $display_content = false;

        if( is_archive() ) {

            $display_content = influence_blog_get_mod( 'archivepage_content_options_content_toggle' );
        }

        if( is_search() ) {

            $display_content = influence_blog_get_mod( 'searchpage_content_options_content_toggle' );
        }

        return $display_content;
 	}
endif;

/**
 * Function to return customizer option for button
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_button_option' ) ) :

 	function influence_blog_button_option() {

        $display_button = false;

        if( is_archive() ) {

            $display_button = influence_blog_get_mod( 'archivepage_content_options_button_toggle' );
        }

        if( is_search() ) {

            $display_button = influence_blog_get_mod( 'searchpage_content_options_button_toggle' );
        }

        return $display_button;
 	}
endif;

/**
 * Function to return customizer option for button text
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_button_text_option' ) ) :

 	function influence_blog_button_text_option() {

        $display_button_text = false;

        if( is_archive() ) {

            $display_button_text = influence_blog_get_mod( 'archivepage_content_options_field_button_title' );
        }

        if( is_search() ) {

            $display_button_text = influence_blog_get_mod( 'searchpage_content_options_field_button_title' );
        }

        return $display_button_text;
 	}
endif;
