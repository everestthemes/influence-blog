<?php
/**
 * Template part for displaying banner
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$banner_query = influence_blog_banner_posts_query();
if( $banner_query -> have_posts() ) {

    ?>
     <section class="mastbanner has-pattern banner-s1">
        <div class="banner-inner">
        <?php

        while( $banner_query -> have_posts() ) {

            $banner_query -> the_post();

            $banner_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
            
            $banner_background_text = influence_blog_get_mod( 'banner_background_text' );
            ?>
            <div class="bannner-outer-wrap">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8 order-md-2">
                        <div class="banner-img ">
                            <div class="slide"<?php influence_blog_has_image_url( $banner_image_url ); ?>>
                            </div>
                        </div>            
                    </div><!--//col-md-8-->
                    <div class="col-12 col-md-4 order-md-1">
                        <div class="banner-caption">
                            <?php
                            if( !empty( $banner_background_text ) ) {
                                ?>
                                <h2 class="l-title"><?php echo esc_html( $banner_background_text ); ?></h2>
                                <?php
                            }
                            ?>
                            <?php

                            $items     = influence_blog_arrange_banner_one_content_options();
                            $defaults  = influence_blog_sortable_defaults( $items );
                            $mod       = get_theme_mod( 'influence_blog_arrange_banner_content_options_one', $defaults );

                            if( ! $mod ) return;

                            $mod = explode( ',', $mod );

                            $new = influence_blog_sortable_items_to_array( $mod, $items );

                            influence_blog_sortable_items_ouput( $items, $new, $mod );

                            ?>
                        </div>
                    </div><!--col-md-4-->
                </div><!--//row-->
            </div><!--//banner-outer-->
            <?php
            }
            wp_reset_postdata();
            ?>
        </div><!--//banner-inner-->
    </section><!--banner-section-->
    <?php
}
