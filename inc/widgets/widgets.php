<?php
/**
 * Register widget area.
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
 * Load Widgets.
 */
require IFB_INC_WIDGETS_PATH . 'ifb-author-widget.php';
require IFB_INC_WIDGETS_PATH . 'ifb-fullwidth-post-widget.php';
require IFB_INC_WIDGETS_PATH . 'ifb-sidebar-post-widget.php';

function influence_blog_custom_widgets_init() {

    register_widget( 'Influence_Blog_Author_Widget' );

    register_widget( 'Influence_Blog_Fullwidth_Post_Widget' );

    register_widget( 'Influence_Blog_Sidebar_Post_Widget' );
}
add_action( 'widgets_init', 'influence_blog_custom_widgets_init', 10 );
