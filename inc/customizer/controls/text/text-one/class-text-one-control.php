<?php

if( ! class_exists( 'Text_One_Control' ) ) :

    /**
	 * Text One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Text_One_Control extends WP_Customize_Control {

        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'text-one';

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'customizer-responsive-media-style' );

            wp_enqueue_script( 'influence-blog-customizer-text-one-script', get_template_directory_uri() . '/inc/customizer/controls/text/text-one/js/text-one.js', array( 'jquery', 'customize-base', 'customizer-responsive-media-script' ), wp_get_theme()->get( 'Version' ) , true );
        }

        /**
         * Renders the control wrapper and calls $this->render_content() for the internals.
         *
         * @see WP_Customize_Control::render()
         */
        protected function render() {
            $id    = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $this->id );
            $class = 'customize-control has-switchers customize-control-' . $this->type;

            ?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
                <?php $this->render_content(); ?>
            </li><?php
        }

        /**
         * Refresh the parameters passed to the JavaScript via JSON.
         *
         * @see WP_Customize_Control::to_json()
         */
        public function to_json() {
            parent::to_json();

            $this->json['id'] = $this->id;

            $this->json['desktop'] = array();
            $this->json['tablet']  = array();
            $this->json['mobile']  = array();

            foreach ( $this->settings as $setting_key => $setting ) {
                $this->json[ $setting_key ] = array(
                    'id'        => $setting->id,
                    'default'   => $setting->default,
                    'link'      => $this->get_link( $setting_key ),
                    'value'     => $this->value( $setting_key ),
                );
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
        protected function content_template() { ?>

            <# if ( data.label ) { #>
                <span class="customize-control-title">
                    <span>{{{ data.label }}}</span>

                    <ul class="responsive-switchers">
                        <li class="desktop">
                            <button type="button" class="preview-desktop active" data-device="desktop">
                                <i class="dashicons dashicons-desktop"></i>
                            </button>
                        </li>
                        <li class="tablet">
                            <button type="button" class="preview-tablet" data-device="tablet">
                                <i class="dashicons dashicons-tablet"></i>
                            </button>
                        </li>
                        <li class="mobile">
                            <button type="button" class="preview-mobile" data-device="mobile">
                                <i class="dashicons dashicons-smartphone"></i>
                            </button>
                        </li>
                    </ul>

                </span>
            <# } #>

            <# if ( data.description ) { #>
                <span class="description customize-control-description">{{{ data.description }}}</span>
            <# } #>

            <# if ( data.desktop ) { #>
                <div class="desktop control-wrap active">
                    <input type="text" value="{{ data.desktop.value }}" placeholder="<?php esc_html_e( '16', 'influence-blog' ); ?>" {{{ data.desktop.link }}} />
                </div>
            <# } #>

            <# if ( data.tablet ) { #>
                <div class="tablet control-wrap">
                    <input type="text" value="{{ data.tablet.value }}" placeholder="<?php esc_html_e( '14', 'influence-blog' ); ?>" {{{ data.tablet.link }}} />
                </div>
            <# } #>

            <# if ( data.mobile ) { #>
                <div class="mobile control-wrap">
                    <input type="text" value="{{ data.mobile.value }}" placeholder="<?php esc_html_e( '12', 'influence-blog' ); ?>" {{{ data.mobile.link }}} />
                </div>
            <# } #>
        <?php
        }
    }
endif;

/**
 * Sanitization callback function for info one control.
 * Uses default sanitize_text_field
 */
