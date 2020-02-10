<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if( is_archive() || is_search() ) {
    
    $display_category = influence_blog_category_option();
    $display_posted_date = influence_blog_posted_date_option();
    
    ?>
    <div class="col-12 col-lg-6 archive-content-bdy">
        <?php influence_blog_post_thumbnail(); ?>
        <div class="inner-detail">
            <div class="widget-in-tt">
                <?php influence_blog_categories_meta( $display_category ); ?>
                <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div><!--widget-in-tt-->
            <div class="metastyle1">
                <?php influence_blog_posted_on( $display_posted_date ); ?>
            </div><!--meta-style1-->
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn-more-side"><?php echo esc_html__( 'Read More...', 'influence-blog' ); ?></a>
        </div><!--inner-title-->
    </div><!-- col-12 col-lg-6 archive-content-bdy-->
    <?php
}
