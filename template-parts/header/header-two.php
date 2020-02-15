<?php
/**
 * Template part for displaying header layout two
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

?>
<header id="header" class="header header-layout2" style="background-image: url( <?php header_image(); ?> );">
<?php

$items     = influence_blog_arrange_header_layout_two_options();
$defaults  = influence_blog_sortable_defaults( $items );
$mod       = get_theme_mod( 'influence_blog_arrange_header_layout_two', $defaults );

if( ! $mod ) return;

$mod = explode( ',', $mod );

$new = influence_blog_sortable_items_to_array( $mod, $items );

influence_blog_sortable_items_ouput( $items, $new, $mod );

?>
</header>
