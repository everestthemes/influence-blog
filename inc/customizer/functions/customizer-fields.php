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
require IFB_INC_CUSTOMIZER_PANELS_PATH . 'panel-footer.php';

/**
 * Load customizer sections
 */
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-global.php';
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-header.php';
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-footer.php';
require IFB_INC_CUSTOMIZER_SECTIONS_PATH . 'section-reset.php';

/**
 * Load customizer fields
 */
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'homepage/homepage.php';

require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/site-layout/site-layout.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/typography/typography.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'global/color/color.php';

require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/layout-options/layout-options.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/header-one/header-one.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/header-two/header-two.php';
require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'header/header-three/header-three.php';

require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'footer/layout-options/layout-options.php';

require IFB_INC_CUSTOMIZER_FIELDS_PATH . 'reset/reset.php';
