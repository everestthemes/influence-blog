<?php
/**
 * Template part for displaying related posts
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$display_related_posts_section = ifb_get_mod( 'display_single_post_related_posts_section', true );

if( $display_related_posts_section == true ) {
    
    $related_posts_post_number = ifb_get_mod( 'single_post_related_posts_section_post_no', 3 );

    $related_posts_query_args = array(
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
    );

    if( absint( $related_posts_post_number ) > 0 ) {
        
        $related_posts_query_args['posts_per_page'] = absint( $related_posts_post_number );
        
    } else {
        
        $related_posts_query_args['posts_per_page'] = 3;
    }

    $current_object = get_queried_object();

    if ( $current_object instanceof WP_Post ) {

        $current_id = $current_object->ID;

        if ( absint( $current_id ) > 0 ) {

            // Exclude current post.
            $related_posts_query_args['post__not_in'] = array( absint( $current_id ) );

            // Include current posts categories.
            $categories = wp_get_post_categories( $current_id );

            if ( ! empty( $categories ) ) {

                $related_posts_query_args['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'term_id',
                        'terms'    => $categories,
                        'operator' => 'IN',
                    )
                );
            }
        }
    }

    $related_posts_query = new WP_Query( $related_posts_query_args );
    
    if( $related_posts_query->have_posts() ) :
    
        $related_posts_section_title = ifb_get_mod( 'single_post_related_posts_section_title', esc_html__( 'Related Posts', 'influence-blog' ) );

        $display_related_category = ifb_get_mod( 'display_single_post_related_posts_section_category', true );
        
        ?>
        <div class="single-related-post">
        <?php

        if( !empty( $related_posts_section_title ) ) {

            ?>
            <div class="widget-tt">
                <h3 class="l-title"><?php echo esc_html( $related_posts_section_title ); ?></h3>             
            </div>
            <?php
            }
            ?>
            <div class="single-related-wrap">
            <?php
            while( $related_posts_query->have_posts() ) :

                $related_posts_query->the_post();
                ?>
                <div class="single-related-bdy">
                    <?php if( has_post_thumbnail() ) { ?>
                    <div class="img-holder">
                        <figure><?php the_post_thumbnail( 'influence-blog-thumbnail-two', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?></figure>
                    </div>
                    <?php } ?>
                    <div class="single-related-detail">
                        <div class="widget-in-tt">
                            <?php influence_blog_categories_meta( $display_related_category ); ?>
                            <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
            </div>
        </div>
        <?php
    endif;
}
