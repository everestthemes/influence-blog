<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Influence_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>
<div class="page-wrap">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'influence-blog' ); ?></a>
<?php
/**
* Hook - influence_blog_header
*
* @hooked influence_blog_header_action - 100
*/
do_action( 'influence_blog_header' );

/**
* Hook - influence_blog_header_widget_area
*
* @hooked influence_blog_header_widget_area_action - 99
*/
do_action( 'influence_blog_header_widget_area' );
?>
<div class="container-style-<?php echo esc_attr( influence_blog_site_layout_container_style() ); ?>">

