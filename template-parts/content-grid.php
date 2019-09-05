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
    <div class="col-12 col-lg-6">
        <div class="half-content-bdy">
            <?php influence_blog_post_thumbnail(); ?>
            <div class="inner-detail">
                <div class="widget-in-tt">
                    <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <?php influence_blog_categories_meta( true ); ?>
                <div class="metastyle1">
                    <?php influence_blog_posted_on( true ); ?>
                </div>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn-more-side"><?php echo esc_html__( 'Read More...', 'influence-blog' ); ?></a>
            </div>
        </div>
    </div><!--col-lg-6 inner-->
    <?php
}

if( is_archive() || is_search() ) {
    
    ?>
    <div class="col-12 col-lg-6 archive-content-bdy">
        <?php influence_blog_post_thumbnail(); ?>
        <div class="inner-detail">
            <div class="widget-in-tt">
                <?php influence_blog_categories_meta( true ); ?>
                <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div><!--widget-in-tt-->
            <div class="metastyle1">
                <?php influence_blog_posted_on( true ); ?>
            </div><!--meta-style1-->
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn-more-side"><?php echo esc_html__( 'Read More...', 'influence-blog' ); ?></a>
        </div><!--inner-title-->
    </div><!-- col-12 col-lg-6 archive-content-bdy-->
    <?php
}