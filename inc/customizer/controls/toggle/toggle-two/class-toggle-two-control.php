<?php

if( ! class_exists( 'Influence_Blog_Toggle_Two_Control' ) ) :

    /**
	 * Toggle Two Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Toggle_Two_Control extends WP_Customize_Control {

        /**
		 * Declare the control type.
		 *
		 * @access public
		 * @var string
		 */
        public $type = 'toggle-two';

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-toggle-two-style', get_template_directory_uri() . '/inc/customizer/controls/toggle/toggle-two/css/toggle-two.css' );
        }

        /**
         * Render the control in the customizer
         */
        public function render_content() {

            ?>
            <div class="toggle-two-control">
                <div class="toggle-two">
                    <input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="toggle-two-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
                    <label class="toggle-two-label" for="<?php echo esc_attr( $this->id ); ?>">
                        <span class="toggle-two-inner"></span>
                        <span class="toggle-two-switch"></span>
                    </label>
                </div>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <?php if( !empty( $this->description ) ) { ?>
                    <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
                <?php } ?>
            </div>
            <?php
        }
    }
endif;

/**
 * Sanitization callback function for toggle two control.
 * Uses default wp_validate_boolean
 */
