<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Influence_Blog
 */

if( is_home() ) {
    
    ?>
    <div class="col-12 col-lg-4">
        <div class="half-content-bdy">
            <?php influence_blog_post_thumbnail(); ?>
            <div class="widget-in-tt">
                <?php influence_blog_categories_meta( true ); ?>
                <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
        </div><!--//half-content-bdy-->
    </div><!--//col-12 col-lg-4-->
    <?php
}