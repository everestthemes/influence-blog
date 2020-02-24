<?php
/**
 * The template for Grid Layouot
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( is_home() ) {
    
    ?>
    <div class="half-widget-left half-widget-d1">
        <?php
        $blog_page_grid_two_col_layout_title = ifb_get_mod( 'blog_page_grid_two_col_layout_title', 'Most Recent' );

        if( !empty( $blog_page_grid_two_col_layout_title ) ) {

            ?>
            <div class="widget-tt">
                <h3 class="l-title"><?php echo esc_html( $blog_page_grid_two_col_layout_title ); ?></h3>
            </div>
            <?php
        }
        ?>
        <div class="row ifb-home-posts">
        <?php

        if( have_posts() ) :

            /* Start the Loop */
            while( have_posts() ) :

                the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */

                get_template_part( 'template-parts/content', 'home-grid' );

            endwhile;

        else :

        get_template_part( 'template-parts/content', 'none' );

        endif;

        ?>
        </div><!--//inner-row-->
        <?php

        /**
        * Hook - influence_blog_pagination_default_template.
        *
        * @hooked influence_blog_pagination_default_template_action - 510
        */
        do_action( 'influence_blog_pagination_default_template' );

        ?>
    </div><!--//half-widget-left-->
    <?php
} 

if( is_archive() || is_search() ) {
    
    ?>
    <div class="archive-bdy-d1">
        <div class="widget-tt">
            <?php
    
            if( is_archive() ) {

                the_archive_title( '<h3 class="l-title">', '</h3>' );
            }

            if( is_search() ) {

                ?>
                <h3 class="l-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'influence-blog' ), get_search_query() );
                    ?>
                </h3>
                <?php
            }
            ?>             
        </div>
        <div class="row archive-detail-wrap">
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

                    get_template_part( 'template-parts/content', 'grid' );

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
