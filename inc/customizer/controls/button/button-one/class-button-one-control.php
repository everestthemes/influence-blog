<?php

if( ! class_exists( 'Influence_Blog_Button_One_Control' ) ) :

    /**
	 * Button One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Button_One_Control extends WP_Customize_Control {

		/**
		 * The control type.
		 *
		 * @since  1.0.0
		 * @access public
		 * @var string
		 */
		public $type = 'button-one';

		/**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-button-one-style', get_template_directory_uri() . '/inc/customizer/controls/button/button-one/css/button-one.css' );

            wp_enqueue_script( 'influence-blog-customizer-button-one-script', get_template_directory_uri() . '/inc/customizer/controls/button/button-one/js/button-one.js', array( 'jquery', 'customize-base' ), wp_get_theme()->get( 'Version' ) , true );

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
            <# if ( data.label ) { #>
                <span class="customize-control-title">{{{ data.label }}}</span>
            <# } #>
            <# if ( data.description ) { #>
                <span class="description customize-control-description">{{{ data.description }}}</span>
            <# } #>
            <div id="input_{{ data.id }}" class="button-one">
                <# for ( key in data.choices ) { #>
                    <input {{{ data.inputAttrs }}} class="switch-input" type="radio" value="{{ key }}" name="_customize-radio-{{{ data.id }}}" id="{{ data.id }}{{ key }}" {{{ data.link }}}<# if ( key === data.value ) { #> checked="checked" <# } #>>
                        <label class="switch-label switch-label-<# if ( key === data.value ) { #>on <# } else { #>off<# } #>" for="{{ data.id }}{{ key }}">
                            {{ data.choices[ key ] }}
                        </label>
                    </input>
                <# } #>
            </div>
            <?php
        }
	}
endif;

if( !function_exists( 'sanitize_button_one' ) ) :
    /**
     * Sanitization callback function for button one control.
     */
    function sanitize_button_one( $input, $setting ) {
        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
endif;
