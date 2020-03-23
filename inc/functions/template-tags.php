<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if ( ! function_exists( 'influence_blog_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function influence_blog_posted_on( $display_meta ) {

        if( true == $display_meta ) {

            $time_string = '<em datetime="%1$s">%2$s</em><br><i class="yrs">%3$s</i>';
            if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
                $time_string = '<em datetime="%1$s">%2$s</em><br><i class="yrs">%3$s</i><em class="updated" datetime="%4$s">%5$s</em>';
            }

            $time_string = sprintf( $time_string,
                esc_attr( get_the_date( DATE_W3C ) ),
                esc_html( get_the_date( 'd' ) ),
                esc_html( get_the_date( 'F, Y' ) ),
                esc_attr( get_the_modified_date( DATE_W3C ) ),
                esc_html( get_the_modified_date() )
            );

            echo '<span class="date-meta">' . $time_string . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        }
	}
endif;

if ( ! function_exists( 'influence_blog_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function influence_blog_posted_by( $display_meta ) {

        if( true == $display_meta ) {

            $byline = sprintf(
                /* translators: %s: post author. */
                esc_html_x( 'By %s', 'post author', 'influence-blog' ), esc_html( get_the_author() ) );

            echo '<span class="editor-meta"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        }
	}
endif;

if ( ! function_exists( 'influence_blog_comments_no' ) ) :
	/**
	 * Prints HTML with meta information for no of comments.
	 */
	function influence_blog_comments_no( $display_meta ) {

		if( $display_meta == true ) {

        	if( ( comments_open() || get_comments_number() ) ) {
        		?>
        		<span class="comment-meta"><i class="fa fa-comment">
        		    <?php echo esc_html( absint( get_comments_number() ) ); ?>
                </i></span>
	          	<?php
	        }
	    }
	}
endif;

if( ! function_exists( 'influence_blog_categories_meta' ) ) :
	/*
	 * Prints HTML with meta information for post categories.
	 */
	function influence_blog_categories_meta( $display_meta ) {

		if( $display_meta == true ) {

			// Hide category and tag text for pages.
			if ( 'post' === get_post_type() ) {

				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list();

				if ( $categories_list ) {
					echo '<div class="ifb-sub-cate">' . wp_kses_post( $categories_list ) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
			}
		}
	}
endif;

if( ! function_exists( 'influence_blog_tags_meta' ) ) :
	/*
	 * Prints HTML with meta information for post categories.
	 */
	function influence_blog_tags_meta( $display_meta ) {

		if( $display_meta == true  ) {

			// Hide category and tag text for pages.
			if ( 'post' === get_post_type() ) {

				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list();

				if ( $tags_list ) {
					echo '<div class="entry-tags"><div class="post-tags">' . wp_kses_post( $tags_list ) . '</div></div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
			}
		}
	}
endif;

if ( ! function_exists( 'influence_blog_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function influence_blog_post_thumbnail() {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :

			?>
			<div class="img-holder">
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure><!-- .post-thumbnail -->
            </div>
		    <?php

        else :

            ?>
            <div class="img-holder">
                <figure>
                    <?php the_post_thumbnail( 'influence-blog-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                </figure>
            </div>
		    <?php
		endif; // End is_singular().
	}
endif;
