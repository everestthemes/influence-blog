<?php
/**
 * The template for Content three
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

$display_image = infb_blog_get_mod( 'blogpage_section_one_content_image_toggle' );
$display_title = infb_blog_get_mod( 'blogpage_section_one_content_title_toggle' );
$display_category = infb_blog_get_mod( 'blogpage_section_one_content_cat_toggle' );
$display_date = infb_blog_get_mod( 'blogpage_section_one_content_date_toggle' );
$display_content = infb_blog_get_mod( 'blogpage_section_one_content_content_toggle' );
$display_button = infb_blog_get_mod( 'blogpage_section_one_content_button_toggle' );
$button_text = infb_blog_get_mod( 'blogpage_section_one_content_button_text' );

?>
<div class="half-content-bdy">
    <?php if( $display_image ) { ?>
        <div class="img-holder">
            <figure>
                <?php the_post_thumbnail( 'influence-blog-thumbnail-one', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
            </figure>
        </div>
    <?php } ?>
    <div class="inner-detail">
        <?php if( $display_title ) { ?>
            <div class="widget-in-tt">
                <h3 class="sub-cate"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
        <?php } ?>
        <?php influence_blog_categories_meta( $display_category ); ?>
        <div class="metastyle1">
            <?php influence_blog_posted_on( $display_date ); ?>
        </div>
        <?php if( $display_content ) { the_excerpt(); } ?>
    </div>
</div>
