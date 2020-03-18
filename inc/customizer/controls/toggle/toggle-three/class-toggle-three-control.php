<?php

if( ! class_exists( 'Influence_Blog_Toggle_Three_Control' ) ) :

    /**
	 * Toggle Three Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Toggle_Three_Control extends WP_Customize_Control {

        /**
		 * Declare the control type.
		 *
		 * @access public
		 * @var string
		 */
        public $type = 'toggle-three';

        /**
		 * Other needed vars
		 *
		 * @access public
		 */
        public $tooltip = '';

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-toggle-three-style', get_template_directory_uri() . '/inc/customizer/controls/toggle/toggle-three/css/toggle-three.css' );

            wp_enqueue_script( 'influence-blog-customizer-toggle-three-script', get_template_directory_uri() . '/inc/customizer/controls/toggle/toggle-three/js/toggle-three.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ) , true );
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

            $this->json['value']   = $this->value();
			$this->json['link']    = $this->get_link();
            $this->json['id']      = $this->id;
            $this->json['tooltip'] = $this->tooltip;

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
			<# if ( data.tooltip ) { #>
				<a href="#" class="tooltip hint--left" data-hint="{{ data.tooltip }}"><span class='dashicons dashicons-info'></span></a>
			<# } #>
			<label for="toggle_three_{{ data.id }}">
				<span class="customize-control-title">
					{{{ data.label }}}
				</span>
				<# if ( data.description ) { #>
					<span class="description customize-control-description">{{{ data.description }}}</span>
				<# } #>
				<input {{{ data.inputAttrs }}} name="toggle_three_{{ data.id }}" id="toggle_three_{{ data.id }}" type="checkbox" value="{{ data.value }}" {{{ data.link }}}<# if ( '1' == data.value ) { #> checked<# } #> hidden />
				<span class="switch"></span>
			</label>
			<?php
		}
    }
endif;

/**
 * Sanitization callback function for toggle two control.
 * Uses default wp_validate_boolean
 */
