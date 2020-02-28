<?php

// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {

    exit;
}

if ( !class_exists( 'Influence_Blog_Google_Fonts' ) ) :
    /**
     * Handle Google Fonts options and URL enqueue construction
     */
	class Influence_Blog_Google_Fonts {

		/* --------------------------------------------------------------------
		   SET DEFAULT FONTS
        -------------------------------------------------------------------- */

		public static $default_headings_font = '';

		public static $default_body_font = '';
		public static $variants = '400';


		/* --------------------------------------------------------------------
		   GET GOOGLE FONTS ENQUEUE URL
		   Get the enqueue URL for the fonts selected
        -------------------------------------------------------------------- */

		public static function get_google_fonts_url() {

            $body_font_family = influence_blog_get_font_data( 'typo_body_font' );
            $body_font_variants = influence_blog_get_font_data( 'typo_body_font', 'variants' );

            $heading_font_family = influence_blog_get_font_data( 'typo_heading_font' );
            $heading_font_variants = influence_blog_get_font_data( 'typo_heading_font', 'variants' );

            $header_one_layout_one_design_menu_font_family = influence_blog_get_font_data( 'typo_header_one_layout_one_design_menu_font' );
            $header_one_layout_one_design_menu_font_variants = influence_blog_get_font_data( 'typo_header_one_layout_one_design_menu_font', 'variants' );

            $typo_header_two_design_site_title_font_family = influence_blog_get_font_data( 'typo_header_two_design_site_title_font' );
            $typo_header_two_design_site_title_font_variants = influence_blog_get_font_data( 'typo_header_two_design_site_title_font', 'variants' );

			// Check for web safe fonts, since they don't require enqueues
			$web_safe_fonts = array( 'web-safe-sans-serif', 'web-safe-serif' );

			// Prepare the font options for looping
			$font_options = array(
				'body'			=> array(
                    'family'   => $body_font_family,
                    'variants' => $body_font_variants ? $body_font_variants : self::$variants,
                ),
                'heading'			=> array(
                    'family'   => $heading_font_family,
                    'variants' => $heading_font_variants ? $heading_font_variants : self::$variants,
                ),
                'headerOneMenu'			=> array(
                    'family'   => $header_one_layout_one_design_menu_font_family,
                    'variants' => $header_one_layout_one_design_menu_font_variants ? $header_one_layout_one_design_menu_font_variants : self::$variants,
                ),
                'siteTitle'			=> array(
                    'family'   => $typo_header_two_design_site_title_font_family,
                    'variants' => $typo_header_two_design_site_title_font_variants ? $typo_header_two_design_site_title_font_variants : self::$variants,
                ),
			);

			$google_fonts_families = array();

			// Loop over the fonts and get the enqueue values (name:styles)
			foreach ( $font_options as $font_option => $font ) {

				// Continue if the font name is empty, or matches one of the web safe fonts
				if ( ! $font['family'] || in_array( $font['family'], self::$web_safe_fonts ) ) {

					continue;
				}

				// Get the font value (name|styles) from the font name
				$font_value = self::get_font_value_from_name( $font['family'], $font_option, $font['variants'] );

				if ( $font_value && ! in_array( $font_value, $web_safe_fonts ) ) {

					$google_fonts_families[] = urlencode( $font_value );
				}

			}

			// If we have font families set, construct an URL from them and return it
			if ( $google_fonts_families ) {

				$google_fonts_url = '//fonts.googleapis.com/css?family=';

				foreach ( $google_fonts_families as $family ) {

					$google_fonts_url .= $family . '|';
				}

				$google_fonts_url = rtrim( $google_fonts_url, '|' );

				return $google_fonts_url;
			}

			return;

		}

		/* --------------------------------------------------------------------
		   GET FONT VALUE
		   Get the font value from a font name
        -------------------------------------------------------------------- */

		public static function get_font_value_from_name( $font_name, $font_option, $variants ) {

			// Different styles for body and headings

            if ( $variants ) {

                $styles = apply_filters( 'influence_blog_filter_google_font_value_styles', ':' . $variants );

            } else {

                $styles = apply_filters( 'influence_blog_filter_google_font_value_styles', ':400' );
            }

			return $font_name . $styles;
		}

		/* --------------------------------------------------------------------
		   GET FONT FALLBACKS
		   Get the font fallback stack
        -------------------------------------------------------------------- */

		public static function get_font_fallbacks( $font ) {

			$sans_serif_stack = '-apple-system, BlinkMacSystemFont, \'Helvetica Neue\', Helvetica, sans-serif';
			$serif_stack = 'Georgia, \'Times New Roman\', Times, serif';
			$mono_stack = 'Menlo, monospace';

			// Start with the simple checks
			if ( strpos( $font, ' Mono' ) !== false ) {

				return $mono_stack;

			} else if ( strpos( $font, ' Sans' ) !== false ) {

				return $sans_serif_stack;

			} else if ( strpos( $font, ' Serif' ) !== false || strpos( $font, ' Slab' ) !== false ) {

				return $serif_stack;
			}

			// Continue with font-specific checks for common serif/mono font families without serif/mono in their name
			$serif_fonts = array( 'Merriweather', 'Literata', 'Slabo 27px', 'Playfair Display', 'Lora', 'Crimson Text', 'Libre Baskerville', 'Bitter', 'Arvo', 'EB Garamond', 'Domine', 'Amiri', 'Vollkorn', 'Noticia Text', 'Alegreya', 'Martel', 'Cardo', 'Neuton', 'Gentium Book Basic' );

			$mono_fonts = array( 'Inconsolata', 'Source Code Pro', 'Cousine', 'Nanum Gothic Coding', 'Anonymous Pro' );

			if ( in_array( $font, $serif_fonts ) ) {

				return $serif_stack;

			} else if ( in_array( $font, $mono_fonts ) ) {

				return $mono_stack;
			}

			// Finally, default to sans-serif
			return $sans_serif_stack;
		}

		/* --------------------------------------------------------------------
		   WEB SAFE FONTS
		   Store a list of web safe fonts that don't need Google Fonts
        -------------------------------------------------------------------- */

		public static $web_safe_fonts = array(
            '--apple-system',
            'Arial',
            'Comic Sans',
            'Courier New',
            'Courier',
            'Garamond',
            'Georgia',
            'Helvetica',
            'Impact',
            'Palatino',
            'Times New Roman',
            'Times', 'Trebuchet',
            'Verdana'
        );
	}
endif;
