<?php
/**
 * The template for Grid Layouot
 *
 * @package Influence_Blog
 */

if( is_home() ) {
    
    ?>
    <div class="half-widget-left half-widget-d1">
        <div class="widget-tt">
            <h3 class="l-title"><?php echo esc_html__( 'Most Recent', 'influence-blog' ); ?></h3>             
        </div>
        <div class="row">
        <?php
    
        $homepage_grid_query = influence_blog_homepage_grid_layout_posts_query();
    
        if( $homepage_grid_query -> have_posts() ) :

            /* Start the Loop */
            while( $homepage_grid_query -> have_posts() ) :

                $homepage_grid_query -> the_post();

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
        </div><!--//inner-row-->
        <?php influence_blog_pagination(); ?>
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
        <?php influence_blog_pagination(); ?>
    </div><!--//archive-bdy-d1-->
    <?php
}