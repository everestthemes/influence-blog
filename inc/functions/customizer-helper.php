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

    return influence_blog_get_mod( 'site_layout_style' );
}

/**
* Returns site layout container style mod
*/
function influence_blog_site_layout_container_style() {

    return influence_blog_get_mod( 'site_layout_container_style' );
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
* Options used with the Sortable Items control for header one layout one
*/
function influence_blog_arrange_header_one_layout_one_options() {

    $options = array();

    $options['headerOneMenu'] = [
        'id'       => 'headerOneMenu',
        'label'    => esc_html_x( 'Menu', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_one_layout_one_menu'
    ];

    $options['headerOneSocial'] = [
        'id'       => 'headerOneSocial',
        'label'    => esc_html_x( 'Social Links', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_one_layout_one_social_links'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for header two layout one two
*/
function influence_blog_arrange_header_two_layout_one_two_options() {

    $options = array();

    $options['headerOneTwoLogo'] = [
        'id'       => 'headerOneTwoLogo',
        'label'    => esc_html_x( 'Site Title', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_two_layout_one_two_logo'
    ];

    $options['headerOneTwoAds'] = [
        'id'       => 'headerOneTwoAds',
        'label'    => esc_html_x( 'Advertisement', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_two_layout_one_two_ads'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for header three
*/
function influence_blog_arrange_header_three_options() {

    $options = array();

    $options['headerThreeIcon'] = [
        'id'       => 'headerThreeIcon',
        'label'    => esc_html_x( 'Icon', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_three_icon'
    ];

    $options['headerThreeMenu'] = [
        'id'       => 'headerThreeMenu',
        'label'    => esc_html_x( 'Menu', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_three_menu'
    ];

    $options['headerThreeSearch'] = [
        'id'       => 'headerThreeSearch',
        'label'    => esc_html_x( 'Search', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_header_three_search'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for banner one content
*/
function influence_blog_arrange_banner_one_content_options() {

    $options = array();

    $options['bannerOneTitle'] = [
        'id'       => 'bannerOneTitle',
        'label'    => esc_html_x( 'Title', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_banner_content_title'
    ];

    $options['bannerOneCategory'] = [
        'id'       => 'bannerOneCategory',
        'label'    => esc_html_x( 'Category', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_banner_content_category'
    ];

    $options['bannerOneContent'] = [
        'id'       => 'bannerOneContent',
        'label'    => esc_html_x( 'Content', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_banner_content_content'
    ];

    $options['bannerOneButton'] = [
        'id'       => 'bannerOneButton',
        'label'    => esc_html_x( 'Button', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_banner_one_content_button'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for banner two content
*/
function influence_blog_arrange_banner_two_content_options() {

    $options = array();

    $options['bannerTwoCategory'] = [
        'id'       => 'bannerTwoCategory',
        'label'    => esc_html_x( 'Category', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_banner_content_category'
    ];

    $options['bannerTwoTitle'] = [
        'id'       => 'bannerTwoTitle',
        'label'    => esc_html_x( 'Title', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_banner_content_title'
    ];

    $options['bannerTwoContent'] = [
        'id'       => 'bannerTwoContent',
        'label'    => esc_html_x( 'Content', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_banner_content_content'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for footer
*/
function influence_blog_arrange_footer_options() {

    $options = array();

    $options['footerOne'] = [
        'id'       => 'footerOne',
        'label'    => esc_html_x( 'Footer One', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_footer_one'
    ];

    $options['footerTwo'] = [
        'id'       => 'footerTwo',
        'label'    => esc_html_x( 'Footer Two', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_footer_two'
    ];

    $options['footerThree'] = [
        'id'       => 'footerThree',
        'label'    => esc_html_x( 'Footer Three', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_footer_three'
    ];

    return $options;
}

/**
* Options used with the Sortable Items control for footer two
*/
function influence_blog_arrange_footer_two_options() {

    $options = array();

    $options['footerThreeTitle'] = [
        'id'       => 'footerThreeTitle',
        'label'    => esc_html_x( 'Main Title', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_footer_two_title'
    ];

    $options['footerThreeSocial'] = [
        'id'       => 'footerThreeSocial',
        'label'    => esc_html_x( 'Social Links', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_footer_two_social_links'
    ];

    $options['footerThreeWidget'] = [
        'id'       => 'footerThreeWidget',
        'label'    => esc_html_x( 'Widget Area', 'Customizer sortable options', 'influence-blog' ),
        'callback' => 'influence_blog_arrange_footer_two_widget_area'
    ];

    return $options;
}

/**
 * Function to reset date with respect to condition
 */
function influence_blog_customizer_reset_data() {

	if ( influence_blog_get_mod( 'reset_toggle' ) ) {

		remove_theme_mods();

		return;
	}
}
add_action( 'customize_save_after', 'influence_blog_customizer_reset_data' );
