<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Influence_Blog
 */

get_header();
?>
<div class="not-found">
    <div class="container">
        <div class="not-found-caption">
            <h1 class="ex-large"><?php echo esc_html__( '404', 'influence-blog' ); ?></h1>
            <h3 class="s-title"><?php echo esc_html__( 'Oops! Page not found', 'influence-blog' ); ?></h3>
            <p><?php echo esc_html__( 'Why dont you try searching changing keyword.', 'influence-blog' ); ?></p>
            <div class="search-again">
                <?php get_search_form(); ?>
            </div><!--/search-again-->
        </div><!--//not-found-caption-->
    </div><!--//container-->
</div><!--//not-found-->
<?php
get_footer();
