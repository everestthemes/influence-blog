<?php

if( ! class_exists( 'Influence_Blog_Radio_Image_One_Control' ) ) :

    /**
	 * Radio Image One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Radio_Image_One_Control extends WP_Customize_Control {

        /**
		 * Declare the control type.
		 *
		 * @access public
		 * @var string
		 */
        public $type = 'radio-image-one';

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-radio-image-one-style', get_template_directory_uri() . '/inc/customizer/controls/radio-image/radio-image-one/css/radio-image-one.css' );
        }

        /**
         * Render the control's content.
         */
        public function render_content() {

            $name = $this->id;
            ?>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>
            <?php if($this->description) { ?>
                <span class="description customize-control-description">
                    <?php echo wp_kses_post($this->description); ?>
                </span>
            <?php } ?>
            <div id="<?php echo esc_attr( $this->id ); ?>" class="radio-image-one">
                <?php
                foreach ( $this->choices as $value => $label ) :
                    ?>
                    <label for="<?php echo esc_attr( $this->id ) . '_' . esc_attr( $value ); ?>">
                        <input class="radio-image-one-select" type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $this->id ) . '_' . esc_attr( $value ); ?>" <?php esc_url( $this->link() ); checked( $this->value(), $value ); ?>>
                        <img src="<?php echo esc_url( $label ); ?>"/>
                    </label>
                    <?php
                endforeach;
                ?>
            </div>
            <?php
        }
    }
endif;

if( !function_exists( 'influence_blog_sanitize_radio_image_one' ) ) :
    /**
     * Sanitization callback function for radio image one control.
     */
    function influence_blog_sanitize_radio_image_one( $input, $setting ) {

        $input = sanitize_key( $input );

        $choices = $setting->manager->get_control( $setting->id )->choices;

        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
endif;
