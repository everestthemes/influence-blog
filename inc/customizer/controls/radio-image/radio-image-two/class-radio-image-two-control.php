<?php

if ( ! class_exists( 'Influence_Blog_Radio_Image_Two_Control' ) ) :

    /**
     * Radio Image Two Custom Control Class
     *
     * All section widgets can extend this class
     *
     * @since 1.0.0
     */
	class Influence_Blog_Radio_Image_Two_Control extends WP_Customize_Control {

		/**
		 * Declare the control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'radio-image-two';

		/**
         * Enqueue scripts and styles
         */
		public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-radio-image-two-style', get_template_directory_uri() . '/inc/customizer/controls/radio-image/radio-image-two/css/radio-image-two.css' );
		}

		/**
		 * Render the control to be displayed in the Customizer.
		 */
		public function render_content() {

            ?>
			<div class="radio_image_two_style">
				<?php if( !empty( $this->label ) ) { ?>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php } ?>
				<?php if( !empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>

				<?php foreach ( $this->choices as $key => $value ) { ?>
					<label class="radio-image-two-label">
						<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( esc_attr( $key ), $this->value() ); ?>/>
						<img src="<?php echo esc_attr( $value['image'] ); ?>" alt="<?php echo esc_attr( $value['name'] ); ?>" title="<?php echo esc_attr( $value['name'] ); ?>" />
					</label>
				<?php } ?>
			</div>
 		<?php
 		}
	}
endif;

if( !function_exists( 'influence_blog_sanitize_radio_image_two' ) ) :
    /**
     * Sanitization callback function for radio image one control.
     */
    function influence_blog_sanitize_radio_image_two( $input, $setting ) {

        $input = sanitize_key( $input );

        $choices = $setting->manager->get_control( $setting->id )->choices;

        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
endif;
