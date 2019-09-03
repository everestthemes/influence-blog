<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Influence_Blog
 */

get_header();

$sidebar_position = influence_blog_sidebar_position();
?>
<div class="inner-single lrg-padding">
    <div class="container">
        <?php influence_blog_breadcrumb(); ?>
        <div class="row">
            <?php
                
            if( $sidebar_position == 'left' && is_active_sidebar( 'influence-blog-sidebar' ) ) {

                get_sidebar();
            }
            ?>
            <div class="<?php influence_blog_main_container_class(); ?>">
                <?php
                if( have_posts() ) :

                    while( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile;

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
            </div><!--//col-12 col-lg-9-->
            <?php
                
            if( $sidebar_position == 'right' && is_active_sidebar( 'influence-blog-sidebar' ) ) {

                get_sidebar();
            }

            ?>
        </div><!--//row-->
      </div><!--//container-->
</div><!--//single post layout 1-->

<?php
get_footer();
