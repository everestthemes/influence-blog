<?php

if( ! class_exists( 'Influence_Blog_Info_One_Control' ) ) :

	/**
	 * Information One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
	class Influence_Blog_Info_One_Control extends WP_Customize_Control {

		/**
		 * Control type
		 *
		 * @access public
		 */
		public $type = 'info-one';

		/**
		 * Other needed vars
		 *
		 * @access public
		 */
		public $info_type, $css_class, $html;

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-info-one-style', get_template_directory_uri() . '/inc/customizer/controls/info/info-one/css/info-one.css' );
        }

		/**
		 * Render the control.
		 *
		 * @return string HTML code
		 * @access public
		 */
		public function render_content() {

			// Validate
			$icon   = isset( $this->info_type ) ? sprintf( '<span class="dashicons dashicons-%s"></span>', esc_attr( $this->info_type ) ) : '';
			$bottom = isset( $this->html ) ? sprintf( '<div class="control-info-one-bottom">%s</div>', $this->html ) : '';

			// Begin the output. ?>
			<div class="control-info-one <?php echo esc_attr( $this->css_class ); ?>">
				<?php
				// Output label
				if ( isset( $this->label ) && '' !== $this->label ) {
					printf(
						'<span class="customize-control-title control-info-one-label">%1$s%2$s</span>',
						wp_kses_post( $this->label ),
						wp_kses_post( $icon )
					);
				}

				// Output description
				if ( isset( $this->description ) && '' !== $this->description ) {
					printf(
						'<div class="description customize-control-description control-info-one-description">%s</div>',
						wp_kses_post( $this->description )
					);
				}

				// Echo bottom HTML
				echo wp_kses_post( $bottom );
				?>
			</div>
			<?php
		}
	}
endif;

/**
 * Sanitization callback function for info one control.
 * Uses default sanitize_text_field
 */
