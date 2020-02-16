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
* Options used with the Sortable Items control for header layout one
*/
function influence_blog_arrange_header_layout_one_options() {

    $options = array();

    $options['headerOneTop'] = [
        'id'       => 'headerOneTop',
        'label'    => esc_html_x( 'Header One', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_layout_one_top'
    ];

    $options['headerOneMiddle'] = [
        'id'       => 'headerOneMiddle',
        'label'    => esc_html_x( 'Main Header', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_layout_one_middle'
    ];

    $options['headerOneBottom'] = [
        'id'       => 'headerOneBottom',
        'label'    => esc_html_x( 'Header Two', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_layout_one_bottom'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for header layout two
*/
function influence_blog_arrange_header_layout_two_options() {

    $options = array();

    $options['headerTwoMiddle'] = [
        'id'       => 'headerTwoMiddle',
        'label'    => esc_html_x( 'Main Header', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_layout_two_middle'
    ];

    $options['headerTwoBottom'] = [
        'id'       => 'headerTwoBottom',
        'label'    => esc_html_x( 'Header Two', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_layout_two_bottom'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for header one
*/
function influence_blog_arrange_header_one_options() {

    $options = array();

    $options['headerOneMenu'] = [
        'id'       => 'headerOneMenu',
        'label'    => esc_html_x( 'Menu', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_one_menu'
    ];

    $options['headerOneSocial'] = [
        'id'       => 'headerOneSocial',
        'label'    => esc_html_x( 'Social Links', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_one_social_links'
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
