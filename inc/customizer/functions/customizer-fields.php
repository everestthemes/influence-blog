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
require INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH . 'panel-global.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH . 'panel-header.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH . 'panel-banner.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH . 'panel-blogpage.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH . 'panel-archivepage.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH . 'panel-searchpage.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_PANELS_PATH . 'panel-footer.php';

/**
 * Load customizer sections
 */
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-global.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-header.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-banner.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-blogpage.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-archivepage.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-searchpage.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-footer.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_SECTIONS_PATH . 'section-reset.php';

/**
 * Load customizer fields
 */
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'homepage/homepage.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'global/site-layout/site-layout.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'global/typography/typography.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'global/color/color.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'header/layout-options/layout-options.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'header/header-one/header-one.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'header/header-two/header-two.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'header/header-three/header-three.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'banner/layout-options/layout-options.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'banner/content-options/content-options.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'blogpage/section-one/section-one.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'archivepage/layout-options/layout-options.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'archivepage/content-options/content-options.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'searchpage/layout-options/layout-options.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'searchpage/content-options/content-options.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'footer/arrange-footer/arrange-footer.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'footer/footer-one/footer-one.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'footer/footer-two/footer-two.php';
require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'footer/footer-three/footer-three.php';

require INFLUENCE_BLOG_INC_CUSTOMIZER_FIELDS_PATH . 'reset/reset.php';
