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

influence_blog_banner_template();

$sidebar_position = influence_blog_sidebar_position();

?>
<div class="half-widget-area">
    <div class="half-widget-area-inner lrg-padding">
        <div class="container">
            <div class="row">
                <?php
                
                if( $sidebar_position == 'left' && is_active_sidebar( 'influence-blog-sidebar' ) ) {
                    
                    get_sidebar();
                }
                
                ?>
                <div class="<?php influence_blog_main_container_class(); ?>">
                    <?php influence_blog_post_listing_layout_template(); ?>
                </div><!--//col-12 col-md-6 col-lg-9-->
                <?php
                
                if( $sidebar_position == 'right' && is_active_sidebar( 'influence-blog-sidebar' ) ) {
                    
                    get_sidebar();
                }
                
                ?>
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//half-widget-area-->
</div>


<div class="footer-about-sec center">
  <div class="container">
        <div class="foot-abt">
      <figure><img src="assets/images/logo-img.png" alt="logo"></figure>
      <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque<br> corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,<br> velit...</p>
      <div class="email-ad">Contact us: <a href="mailto:contact@yoursite.com">contact@yoursite.com</a></div>
    </div><!--foot-abt-->
  </div>
</div>

<div class="newsletter-sec center">
      <div class="side-tt">
          <h3 class="s-title">Get Newsletter</h3>
          <form>
            <div class="substribe-sec">
              <input class="email-n" type="email" placeholder="your e-mail address here">
              <input class="submit-n" type="submit" value="Subscribe">
            </div>
          </form>
        </div>
</div>
<?php
get_footer();
