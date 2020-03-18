<?php
/**
 * The template for Layout three
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( is_archive() || is_search() ) {

    ?>
    <div class="half-widget-left half-widget-d2">
        <div class="widget-tt">
            <?php

            if( is_archive() ) {

                the_archive_title( '<h1 class="l-title">', '</h1>' );
            }

            if( is_search() ) {

                ?>
                <h1 class="l-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'influence-blog' ), get_search_query() );
                    ?>
                </h1>
                <?php
            }
            ?>
        </div>
        <div id="content" class="row">
            <?php

            if( have_posts() ) :

                /* Start the Loop */
                while ( have_posts() ) :

                    the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */

                    get_template_part( 'template-parts/content/content', 'three' );

                endwhile;

            else :

            get_template_part( 'template-parts/content', 'none' );

            endif;

            ?>
        </div><!--//row archive-detail-wrap-->
        <?php
        /**
	    * Hook - influence_blog_pagination_default_template.
	    *
	    * @hooked influence_blog_pagination_default_template_action - 510
	    */
	    do_action( 'influence_blog_pagination_default_template' );
        ?>
    </div><!--//archive-bdy-d1-->
    <?php
}
