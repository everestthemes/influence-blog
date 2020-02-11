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
 * Social links template
 */
if( ! function_exists( 'influence_blog_social_links_template' ) ) {

    function influence_blog_social_links_template( $position ) {

        if( empty( $position ) ) {

            return;
        }

        $facebook_link = ifb_get_mod( 'facebook_link', '' );
        $twitter_link = ifb_get_mod( 'twitter_link', '' );
        $instagram_link = ifb_get_mod( 'instagram_link', '' );
        $youtube_link = ifb_get_mod( 'youtube_link', '' );
        $display_rss_feed = ifb_get_mod( 'display_rss_feed', true );

        $youtube_class = '';

        if( $position == 'header' ) {

            $youtube_class = 'fa fa-youtube-play';

        }

        if( $position == 'footer' ) {

            $youtube_class = 'fa fa-youtube';

        }

        if( !empty( $facebook_link ) ) {

            ?>
            <li>
                <a href="<?php echo esc_url( $facebook_link ); ?>" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
        <?php
        }

        if( !empty( $instagram_link ) ) {
            ?>
            <li>
                <a href="<?php echo esc_url( $instagram_link ); ?>" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        <?php
        }

        if( !empty( $twitter_link ) ) {
            ?>
            <li>
                <a href="<?php echo esc_url( $twitter_link ); ?>" target="_blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
        <?php
        }

        if( !empty( $youtube_link ) ) {
            ?>
            <li>
                <a href="<?php echo esc_url( $youtube_link ); ?>" target="_blank">
                    <i class="<?php echo esc_attr( $youtube_class ); ?>"></i>
                </a>
            </li>
        <?php
        }

        if( $display_rss_feed == true ) {
            ?>
            <li>
                <a href="<?php echo esc_url( home_url( '/feed/' ) ); ?>" target="_blank">
                    <i class="fa fa-rss"></i>
                </a>
            </li>
        <?php
        }
    }
}



/**
 * Selects banner template
 */
if( ! function_exists( 'influence_blog_banner_template' ) ) {

    function influence_blog_banner_template() {

        $display_banner = ifb_get_mod( 'display_banner', true );

        if( $display_banner == true ) {

            get_template_part( 'template-parts/banner/banner', 'one' );

        }

    }
}



/**
 * Selects post listing layout template
 */
if( ! function_exists( 'influence_blog_post_listing_layout_template' ) ) {

    function influence_blog_post_listing_layout_template() {

        get_template_part( 'template-parts/layout/layout', 'grid' );

        if( is_home() ) {

            get_template_part( 'template-parts/layout/layout', 'block' );
        }
    }
}



/**
 * Function to get post and page sidebar position.
 */
if( ! function_exists( 'influence_blog_single_sidebar_position' ) ) {

	function influence_blog_single_sidebar_position() {

		global $influence_blog_prefix;

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

            if( !is_singular() ) {

                if( is_archive() ) {

                    $sidebar_position = ifb_get_mod( 'archive_page_sidebar_position', 'right' );
                }

                if( is_search() ) {

                    $sidebar_position = ifb_get_mod( 'search_page_sidebar_position', 'right' );
                }

                if( is_home() ) {

                    $sidebar_position = ifb_get_mod( 'blog_page_sidebar_position', 'right' );
                }
            } else {

                $sidebar_position = influence_blog_single_sidebar_position();
            }

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

		$sticky_enabled = ifb_get_mod( 'enable_sticky_sidebar', true );

		if( $sidebar_position == 'none' || !is_active_sidebar( 'influence-blog-sidebar' ) ) {

            $container_class = 'col-md-12 col-lg-12';

		} else {

			$container_class = 'col-12 col-md-6 col-lg-9';
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
		$sticky_enabled = ifb_get_mod( 'enable_sticky_sidebar', true );

		if( $sticky_enabled == true ) {
			$sidebar_class .= ' sticky-portion';
		}

		echo esc_attr( $sidebar_class );
	}
}



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

        echo $bg_image_style;
	}
endif;



/**
 * Breadcrumb declaration of the theme.
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_breadcrumb' ) ) :

 	function influence_blog_breadcrumb() {

        $display_breadcrumb = ifb_get_mod( 'display_breadcrumb', true );

 		if( $display_breadcrumb == true ) {
 			?>
 			<div class="breadcrumbs-sec breadcrumbs-layout1">
                <?php
                $breadcrumb_args = array(
                    'show_browse' => false,
                );
                influence_blog_breadcrumb_trail( $breadcrumb_args );
                ?>
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
 * Function to return customizer option for posted date
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_posted_date_option' ) ) :

 	function influence_blog_posted_date_option() {

        $display_posted_time = false;

        if( is_single() ) {

            $display_posted_time = ifb_get_mod( 'display_single_post_posted_date', true );
        }

        if( is_page() ) {

            $display_posted_time = ifb_get_mod( 'display_single_page_posted_date', true );
        }

        if( is_archive() ) {

            $display_posted_time = ifb_get_mod( 'display_archive_page_posted_date', true );
        }

        if( is_search() ) {

            $display_posted_time = ifb_get_mod( 'display_search_page_posted_date', true );
        }

        return $display_posted_time;
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

        if( is_single() ) {

            $display_category = ifb_get_mod( 'display_single_post_category', true );
        }

        if( is_archive() ) {

            $display_category = ifb_get_mod( 'display_archive_page_category', true );
        }

        if( is_search() ) {

            $display_category = ifb_get_mod( 'display_search_page_category', true );
        }

        return $display_category;
 	}
endif;



/**
 * Function to return customizer option for tags
 *
 * @since 1.0.0
 */
if( ! function_exists( 'influence_blog_tags_option' ) ) :

 	function influence_blog_tags_option() {

        $display_category = false;

        if( is_single() ) {

            $display_category = ifb_get_mod( 'display_single_post_tags', true );
        }

        return $display_category;
 	}
endif;