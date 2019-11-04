<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Influence_Blog
 */


$display_category = ifb_mod( 'display_blog_page_grid_two_col_layout_category', true );
$display_posted_date = ifb_mod( 'display_blog_page_grid_two_col_layout_posted_date', true );

?>
<div class="col-12 col-lg-6">
    <div class="half-content-bdy">
        <?php influence_blog_post_thumbnail(); ?>
        <div class="inner-detail">
            <div class="widget-in-tt">
                <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <?php influence_blog_categories_meta( $display_category ); ?>
            <div class="metastyle1">
                <?php influence_blog_posted_on( $display_posted_date ); ?>
            </div>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn-more-side"><?php echo esc_html__( 'Read More...', 'influence-blog' ); ?></a>
        </div>
    </div>
</div><!--col-lg-6 inner-->
