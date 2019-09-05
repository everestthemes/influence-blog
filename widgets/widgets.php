<?php
/**
 * Register widget area.
 *
 * @package Influence_Blog
 */

/**
 * Load Widgets.
 */
require get_template_directory() . '/widgets/ifb-author-widget.php';
require get_template_directory() . '/widgets/ifb-fullwidth-post-widget.php';
require get_template_directory() . '/widgets/ifb-sidebar-post-widget.php';

function grace_mag_custom_widgets_init() {
	
    register_widget( 'Influence_Blog_Author_Widget' );
    
    register_widget( 'Influence_Blog_Fullwidth_Post_Widget' );
    
    register_widget( 'Influence_Blog_Sidebar_Post_Widget' );
}
add_action( 'widgets_init', 'grace_mag_custom_widgets_init', 10 );