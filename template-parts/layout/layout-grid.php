<?php
/**
 * The template for Grid Layouot
 *
 * @package Influence_Blog
 */


?>
<div class="half-widget-left half-widget-d1">
    <div class="row">
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
    </div><!--//inner-row-->
</div><!--//half-widget-left-->