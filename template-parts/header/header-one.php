<?php
/**
 * Template part for displaying header layout one
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

?>
<header id="header1" class="header header-layout1"<?php influence_blog_has_header_image(); ?>>
<?php

$items     = influence_blog_arrange_header_layout_one_options();
$defaults  = influence_blog_sortable_defaults( $items );
$mod       = get_theme_mod( 'influence_blog_arrange_header_layout_one', $defaults );

if( ! $mod ) return;

$mod = explode( ',', $mod );

$new = influence_blog_sortable_items_to_array( $mod, $items );

influence_blog_sortable_items_ouput( $items, $new, $mod );

?>
</header>
