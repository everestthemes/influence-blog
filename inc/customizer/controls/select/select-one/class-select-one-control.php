<?php

if( ! class_exists( 'Influence_Blog_Select_One_Control' ) ) :

	/**
	 * Select One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
	class Influence_Blog_Select_One_Control extends WP_Customize_Control {

		/**
		 * Control type
		 *
		 * @access public
		 */
		public $type = 'select-one';

		/**
		 * Other needed vars
		 *
		 * @access public
		 */

        public $placeholder = '';

        public function __construct( $manager, $id, $args = array() ) {

            parent::__construct( $manager, $id, $args );
        }

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-select-one-style', get_template_directory_uri() . '/inc/customizer/controls/select/select-one/css/select-one.css' );
        }

		/**
		 * Render the control.
		 *
		 * @return string HTML code
		 * @access public
		 */
        public function render_content() {

            if ( empty( $this->choices ) ) {
                return;
            }
            ?>
            <label class="select-one-wrap">
                <span class="customize-control-title">
                    <?php echo esc_html( $this->label ); ?>
                </span>
                <?php if($this->description) { ?>
                    <span class="description customize-control-description">
                        <?php echo wp_kses_post($this->description); ?>
                    </span>
                <?php } ?>
                <select multiple="multiple" class="select-one-chosen" <?php $this->link(); ?>>
                    <?php
                    foreach ( $this->choices as $value => $label ) {
                        $selected = '';
                        if(in_array($value, $this->value())){
                            $selected = 'selected="selected"';
                        }
                        echo '<option value="' . esc_attr( $value ) . '"' . esc_attr( $selected ) . '>' . esc_html($label) . '</option>';
                    }
                    ?>
                </select>
            </label>
            <?php
        }
	}
endif;

if( !function_exists( 'influence_blog_sanitize_select_one' ) ) :
    /**
     * Sanitization callback function for select one control.
     */
    function influence_blog_sanitize_select_one( $input ) {

        if( !empty( $input ) ) {

            $input = array_map( 'sanitize_text_field', $input );
        }

        return $input;
    }
endif;
