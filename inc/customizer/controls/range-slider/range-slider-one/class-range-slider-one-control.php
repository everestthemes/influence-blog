<?php

if( ! class_exists( 'Influence_Blog_Range_Slider_One_Control' ) ) :
    /**
	 * Range Slider One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Range_Slider_One_Control extends WP_Customize_Control {

        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'range-slider-one';

        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-range-slider-one-style', get_template_directory_uri() . '/inc/customizer/controls/range-slider/range-slider-one/css/range-slider-one.css' );

            wp_enqueue_script( 'influence-blog-customizer-range-slider-one-script', get_template_directory_uri() . '/inc/customizer/controls/range-slider/range-slider-one/js/range-slider-one.js', array( 'jquery', 'customize-base' ), wp_get_theme()->get( 'Version' ) , true );
        }

        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json() {

            parent::to_json();

            if ( isset( $this->default ) ) {
                $this->json['default'] = $this->default;
            } else {
                $this->json['default'] = $this->setting->default;
            }
            $this->json['value']       = $this->value();
            $this->json['choices']     = $this->choices;
            $this->json['link']        = $this->get_link();
            $this->json['id']          = $this->id;

            $this->json['inputAttrs'] = '';
            foreach ( $this->input_attrs as $attr => $value ) {
                $this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
            }

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
        protected function content_template() {

            ?>
            <label>
                <# if ( data.label ) { #>
                    <span class="customize-control-title">{{{ data.label }}}</span>
                <# } #>
                <# if ( data.description ) { #>
                    <span class="description customize-control-description">{{{ data.description }}}</span>
                <# } #>
                <div class="control-wrap">
                    <input type="range" {{{ data.inputAttrs }}} value="{{ data.value }}" {{{ data.link }}} data-reset_value="{{ data.default }}" />
                    <input type="number" {{{ data.inputAttrs }}} class="range-slider-one-input" value="{{ data.value }}" />
                    <span class="range-slider-one-reset-slider"><span class="dashicons dashicons-image-rotate"></span></span>
                    </div>
            </label>
            <?php
        }
    }
endif;

if( !function_exists( 'influence_blog_sanitize_range_slider_one' ) ) :
    /**
     * Sanitization callback function for range slider one control.
     */
    function influence_blog_sanitize_range_slider_one( $input, $setting ) {

        return is_numeric( $input ) ? $input : 0;
    }
endif;
