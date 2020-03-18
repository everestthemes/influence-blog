<?php

if( ! class_exists( 'Influence_Blog_Color_One_Control' ) ) :

    /**
	 * Color One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Color_One_Control extends WP_Customize_Control {

        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'color-one';

        /**
         * Add support for palettes to be passed in.
         *
         * Supported palette values are true, false, or an array of RGBa and Hex colors.
         */
        public $palette;

        /**
         * Add support for showing the opacity value on the slider handle.
         */
        public $show_opacity;

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'wp-color-picker' );

            wp_enqueue_style( 'influence-blog-customizer-color-one-style', get_template_directory_uri() . '/inc/customizer/controls/color/color-one/css/color-one.css' );

            wp_enqueue_script( 'wp-color-picker' );

            wp_enqueue_script( 'influence-blog-customizer-color-one-script', get_template_directory_uri() . '/inc/customizer/controls/color/color-one/js/color-one.js', array( 'jquery', 'customize-base', 'wp-color-picker' ), wp_get_theme()->get( 'Version' ) , true );

            wp_localize_script( 'influence-blog-customizer-color-one-script', 'colorOne', array(
                'colorPalettes' => color_one_default_color_palettes(),
            ) );
        }

        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json() {

            parent::to_json();

            $this->json['default'] = $this->setting->default;
            $this->json['show_opacity'] = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';
            $this->json['value']       = $this->value();
            $this->json['link']        = $this->get_link();
            $this->json['id']          = $this->id;

        }

        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template() { ?>

            <label>
                <# if ( data.label ) { #>
                    <span class="customize-control-title">{{{ data.label }}}</span>
                <# } #>
                <# if ( data.description ) { #>
                    <span class="description customize-control-description">{{{ data.description }}}</span>
                <# } #>
                <div>
                    <input class="color-one-control" type="text"  value="{{ data.value }}" data-show-opacity="{{ data.show_opacity }}" data-default-color="{{ data.default }}" {{{ data.link }}} />
                </div>
            </label>
            <?php
        }
    }
endif;

if ( !function_exists( 'color_one_default_color_palettes' ) ) :
    /**
     * Default color picker palettes
     *
     * @since 1.4.9
     */
	function color_one_default_color_palettes() {

		$palettes = array(
			'#000000',
			'#ffffff',
			'#dd3333',
			'#dd9933',
			'#eeee22',
			'#81d742',
			'#1e73be',
			'#8224e3',
		);

		// Apply filters and return
		return apply_filters( 'color_one_default_color_palettes', $palettes );

	}
endif;

if( !function_exists( 'sanitize_color_one' ) ) :
    /**
     * Sanitization callback function for color one control.
     */
    function sanitize_color_one( $color ) {

        if ( empty( $color ) || is_array( $color ) ) {
            return '';
        }

        // If string does not start with 'rgba', then treat as hex.
        // sanitize the hex color and finally convert hex to rgba
        if ( false === strpos( $color, 'rgba' ) ) {
            return sanitize_hex_color( $color );
        }

        // By now we know the string is formatted as an rgba color so we need to further sanitize it.
        $color = str_replace( ' ', '', $color );
        sscanf( $color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha );

        return 'rgba('.$red.','.$green.','.$blue.','.$alpha.')';
    }
endif;
