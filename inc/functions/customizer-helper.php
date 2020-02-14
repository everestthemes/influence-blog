<?php
/**
 * Influence Blog customizer helper functions
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
* Returns site layout style mod
*/
function influence_blog_site_layout_style() {

    return ifb_get_mod( 'site_layout_style' );
}

/**
* Returns site layout container style mod
*/
function influence_blog_site_layout_container_style() {

    return ifb_get_mod( 'site_layout_container_style' );
}

/**
* Returns sortable items to array
*/
function influence_blog_sortable_items_to_array( $mod, $items ) {

    $new = [];

    foreach( $mod as $val ) {

        $val = explode( ':', $val );

        if( isset( $val[ 0 ] ) && isset( $val[ 1 ] ) && array_key_exists( $val[ 0 ], $items ) && '1' == $val[ 1 ] ) {

            $new[] = $val[ 0 ];
        }
    }

    return $new;
}

/**
* Output sortable items
*/
function influence_blog_sortable_items_ouput( $items, $new, $mod ) {

    if( ! $new ) return;

    foreach( $new as $key => $item ) {

        $func = $items[ $item ][ 'callback' ];

        $args = array_key_exists( 'args', $items[ $item ] ) ? $items[ $item ][ 'args' ] : array();

        if( function_exists( $func ) ) {

            if( ! empty( $args ) ) {

                call_user_func( $func, $args );

            } else {

                call_user_func( $func );
            }
        }
    }
}

/**
* Options used with the Sortable Items control
*/
function influence_blog_arrange_header_options() {

    $options = array();

    $options['headerTop'] = [
        'id'       => 'headerTop',
        'label'    => esc_html_x( 'Top Header', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_top'
    ];

    $options['headerMiddle'] = [
        'id'       => 'headerMiddle',
        'label'    => esc_html_x( 'Main Header', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_middle'
    ];

    $options['headerBottom'] = [
        'id'       => 'headerBottom',
        'label'    => esc_html_x( 'Bottom Header', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_bottom'
    ];

    return $options;
}

/**
 * Function to reset date with respect to condition
 */
function influence_blog_customizer_reset_data() {

	if ( ifb_get_mod( 'reset_toggle' ) ) {

		remove_theme_mods();

		return;
	}
}
add_action( 'customize_save_after', 'influence_blog_customizer_reset_data' );
