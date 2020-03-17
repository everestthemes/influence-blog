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

$display_image = influence_blog_image_option();
$display_title = influence_blog_title_option();
$display_category = influence_blog_category_option();
$display_date = influence_blog_date_option();
$display_content = influence_blog_content_option();
$display_button = influence_blog_button_option();
$button_text = influence_blog_button_text_option();

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
