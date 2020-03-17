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
    
    $display_blog_page_grid_three_col_layout = infb_blog_get_mod( 'display_blog_page_grid_three_col_layout', false );
    
    if( $display_blog_page_grid_three_col_layout == true ) {
    
        ?>
        <div class="half-widget-left half-widget-d3">
            <?php
            $blog_page_grid_three_col_layout_title = infb_blog_get_mod( 'blog_page_grid_three_col_layout_title', 'Most Recent' );
        
            if( !empty( $blog_page_grid_three_col_layout_title ) ) {
                
                ?>
                <div class="widget-tt">
                    <h3 class="l-title"><?php echo esc_html( $blog_page_grid_three_col_layout_title ); ?></h3>
                </div>
                <?php
            }
            ?>
            <div class="row">
            <?php

            $homepage_block_query = influence_blog_homepage_block_layout_posts_query();

            if( $homepage_block_query -> have_posts() ) :

                /* Start the Loop */
                while( $homepage_block_query -> have_posts() ) :

                    $homepage_block_query -> the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */

                    get_template_part( 'template-parts/content', 'block' );

                endwhile;

            else :

            get_template_part( 'template-parts/content', 'none' );

            endif;

            ?> 
            </div><!--//inn-row-->
        </div><!--//half-widget-left-d3-->
    <?php
    }
}
