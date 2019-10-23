<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Influence_Blog
 */

?>

    <?php
    /**
    * Hook - influence_blog_header
    *
    * @hooked influence_blog_header_action - 999
    */
    do_action( 'influence_blog_footer' );
    ?>
    
</div>

<?php wp_footer(); ?>
<a href="#" class="scrollup"><i class="fa fa-long-arrow-up"></i></a>

</body>
</html>
