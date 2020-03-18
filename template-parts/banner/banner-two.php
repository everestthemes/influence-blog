<?php
/**
 * Template part for displaying banner
 *
 * @package Influence_Blog_Pro
 */

$banner_query = influence_blog_banner_posts_query();
?>
<section class="mastbanner  banner-s2">
    <div class="banner-inner2">
        <div class="container">
            <div class="row align-items-center">
                <?php
                if( $banner_query -> have_posts() ) {

                    $slider_col = influence_blog_get_mod( 'banner_content_options_two_slider_col' );

                    $col_class = influence_blog_col_value( $slider_col, 'lg' );
                    ?>
                    <div class="col-12 <?php echo esc_attr( $col_class ); ?>">
                        <div class="banner-img-wrap">
                        <?php

                        while( $banner_query -> have_posts() ) :

                            $banner_query -> the_post();

                                $banner_image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );

                                ?>
                                <div class="banner-wrapper">
                                    <div class="slide"<?php influence_blog_has_image_url( $banner_image_url ); ?>>
                                        <div class="banner-caption">
                                            <?php

                                            $items     = influence_blog_arrange_banner_two_content_options();
                                            $defaults  = influence_blog_sortable_defaults( $items );
                                            $mod       = get_theme_mod( 'influence_blog_arrange_banner_content_options_two', $defaults );

                                            if( ! $mod ) return;

                                            $mod = explode( ',', $mod );

                                            $new = influence_blog_sortable_items_to_array( $mod, $items );

                                            influence_blog_sortable_items_ouput( $items, $new, $mod );

                                            ?>
                                        </div><!--//banner-caption-->
                                    </div>
                                </div><!--//banner-wrapper-->
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div><!--//banner-img-wrap-->
                    </div><!--//col-md-8-->
                    <?php
                }
                $display_ads = influence_blog_get_mod( 'banner_content_options_two_ads_toggle' );

                if( $display_ads ) {

                    $ads_col = influence_blog_get_mod( 'banner_content_options_two_ads_col' );

                    $col_class = influence_blog_col_value( $ads_col, 'lg' );
                    ?>
                    <div class="col-12 <?php echo esc_attr( $col_class ); ?>">
                        <div class="banner-post">
                            <div class="banner-wrapper">
                                <?php
                                $ads_image = influence_blog_get_mod( 'banner_content_options_two_ads_upload_image' );

                                $ads_image_id = attachment_url_to_postid( $ads_image );

                                $ads_image_id_src = wp_get_attachment_image_src( $ads_image_id, 'full' );
                                ?>
                                <div class="slide"<?php influence_blog_has_image_url( $ads_image_id_src[0] ); ?>>
                                    <div class="banner-caption">
                                        <?php
                                        $ads_title = influence_blog_get_mod( 'banner_content_options_two_ads_title' );
                                        $ads_link = influence_blog_get_mod( 'banner_content_options_two_ads_link' );

                                        $rel_tag = '';

                                        $tab_class = '_self';

                                        $ads_link_rel = influence_blog_get_mod( 'banner_content_options_two_ads_link_rel' );

                                        if( !empty( $ads_link_rel ) ) {

                                            $rel_tag = 'rel=' . $ads_link_rel;
                                        }

                                        $ads_link_tab = influence_blog_get_mod( 'banner_content_options_two_ads_link_tab_toggle' );

                                        if( $ads_link_tab == true ) {

                                            $tab_class = '_blank';
                                        }

                                        if( !empty( $ads_link ) ) {
                                            ?>
                                            <h3 class="m-title">
                                                <a href="<?php echo esc_url( $ads_link ); ?>" <?php echo esc_attr( $rel_tag ); ?> target="<?php echo esc_attr( $tab_class ); ?>">
                                                    <?php echo esc_html( $ads_title ); ?>
                                                </a>
                                            </h3>
                                            <?php
                                        }
                                        ?>
                                    </div><!--//banner-caption-->
                                </div>
                            </div><!--//banner-wrapper -->
                        </div>
                    </div><!--//col-md-3-->
                    <?php
                }
                ?>
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//banner-inner2-->
</section><!--banner-section-->
