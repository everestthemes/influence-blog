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

$display_posted_date = true;
$display_category = true;
$display_tags = true;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single layout-bdy single-layout1-bdy">
        <?php
        if( is_single() ) {
            
            influence_blog_categories_meta( $display_category ); 
        }
        ?>
        <div class="metastyle1">
            <?php influence_blog_posted_on( $display_posted_date ); ?>
        </div> <!--metastyle1 span meta-->
        <h1 class="single-title"><?php the_title(); ?></h1>
        <?php influence_blog_post_thumbnail(); ?>
        <div class="single-post-detail single-layout1-detail entry-content">
            <?php
            
            the_content(); 
            
            influence_blog_pages_links();
            
            if ( get_edit_post_link() ) :

                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Edit <span class="screen-reader-text">%s</span>', 'influence-blog' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            endif;
            
            ?>
        </div>
        <?php
        
        if( is_single() ) {
        
            influence_blog_tags_meta( $display_tags );

            influence_blog_post_navigation();

            get_template_part( 'template-parts/content', 'author' );
            
        }
        
        ?>
    </div><!--//author-box-->
    <?php
    
    if( is_single() ) {
    
        get_template_part( 'template-parts/content', 'related' );
        
    }

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    
    ?>
</article>
