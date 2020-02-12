<?php
/**
 * Customizer Options Declaration
 *
 * @package Influence_Blog
 */

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

/**
 * Load customizer panels
 */
require IFB_INC_CUSTOMIZER_PANELS_PATH . 'panel-global.php';

/**
 * Load customizer sections
 */
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-global.php';

/**
 * Load customizer fields
 */
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'homepage/homepage.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/site-layout/site-layout.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/typography/typography.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/color/color.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'reset/reset.php';
