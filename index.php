<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Influence_Blog
 */

get_header();

/**
* Hook - influence_blog_banner
*
* @hooked influence_blog_banner_action - 100
*/
do_action( 'influence_blog_banner' );

if( is_active_sidebar( 'influence-blog-top-widget-area' ) ) {
    
    dynamic_sidebar( 'influence-blog-top-widget-area' );
}

/**
* Hook - influence_blog_blogpage
*
* @hooked iinfluence_blog_blogpage_action - 300
*/
do_action( 'influence_blog_blogpage' );

$display_blog_page_about_info = ifb_get_mod( 'display_blog_page_about_info', true );

if( $display_blog_page_about_info == true ) {

    ?>
    <div class="footer-about-sec center">
        <div class="container">
            <div class="foot-abt">
                <?php
                $about_info_logo = ifb_get_mod( 'blog_page_about_info_logo', '' );
                
                if( !empty( $about_info_logo ) ) {
                    ?>
                    <figure><img src="<?php echo esc_url( $about_info_logo ); ?>" alt="logo"></figure>
                    <?php
                }
    
                $about_info_description = ifb_get_mod( 'blog_page_about_info_description', '' );
    
                if( !empty( $about_info_description ) ) {
                    ?>
                    <p><?php echo esc_html( $about_info_description ); ?></p>
                    <?php
                }
    
                $about_info_contact_title = ifb_get_mod( 'blog_page_about_info_contact_title', 'Contact us :' );
                
                $about_info_contact_email = ifb_get_mod( 'blog_page_about_info_contact_email', '' );
    
                if( !empty( $about_info_contact_title ) && !empty( $about_info_contact_email ) ) {
                    ?>
                    <div class="email-ad"><?php echo esc_html( $about_info_contact_title ); ?><a href="mailto:<?php echo esc_html( $about_info_contact_email ); ?>"><?php echo esc_html( $about_info_contact_email ); ?></a></div>
                    <?php
                }
                ?>
            </div><!--foot-abt-->
        </div>
    </div>
    <?php
}


if( is_active_sidebar( 'influence-blog-bottom-widget-area' ) ) {
    
    dynamic_sidebar( 'influence-blog-bottom-widget-area' );
}
get_footer();
