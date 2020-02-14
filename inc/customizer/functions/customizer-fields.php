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
require IFB_INC_CUSTOMIZER_PANELS_PATH . 'panel-header.php';

/**
 * Load customizer sections
 */
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-global.php';
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-header.php';
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-reset.php';

/**
 * Load customizer fields
 */
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'homepage/homepage.php';

require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/site-layout/site-layout.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/typography/typography.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/color/color.php';

require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/arrange/arrange.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/top/top.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/middle/middle.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/bottom/bottom.php';

require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'reset/reset.php';
