<?php
/**
 * Customizer Options Declaration
 *
 * @package Influence_Blog
 */

$categories = influence_blog_categories_array();
$sidebar_position = influence_blog_sidebar_position_array( 'image' );
$post_types = influence_blog_post_types_array();
$pagination_type = influence_blog_pagination_type_array();

/**
 * Load customizer fields
 */
require get_template_directory() . '/inc/customizer/fields/site-header.php';
require get_template_directory() . '/inc/customizer/fields/site-banner.php';
require get_template_directory() . '/inc/customizer/fields/site-blog-page.php';
require get_template_directory() . '/inc/customizer/fields/site-archive-search-page.php';
require get_template_directory() . '/inc/customizer/fields/site-single-post-page.php';
require get_template_directory() . '/inc/customizer/fields/site-breadcrumb.php';
require get_template_directory() . '/inc/customizer/fields/site-sidebar.php';
require get_template_directory() . '/inc/customizer/fields/site-footer.php';
require get_template_directory() . '/inc/customizer/fields/site-social-links.php';
require get_template_directory() . '/inc/customizer/fields/site-excerpt-length.php';
