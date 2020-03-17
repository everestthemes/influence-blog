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

/**
* Hook - influence_blog_blogpage
*
* @hooked iinfluence_blog_blogpage_action - 300
*/
do_action( 'influence_blog_blogpage' );

get_footer();
