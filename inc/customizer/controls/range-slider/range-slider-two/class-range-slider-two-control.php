<?php

if( ! class_exists( 'Influence_Blog_Range_Slider_Two_Control' ) ) :
    /**
	 * Range Slider Two Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Range_Slider_Two_Control extends WP_Customize_Control {

        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'range-slider-two';

        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-range-slider-two-style', get_template_directory_uri() . '/inc/customizer/controls/range-slider/range-slider-two/css/range-slider-two.css', array( 'influence-blog-customizer-responsive-media-style' ) );

            wp_enqueue_script( 'influence-blog-customizer-range-slider-two-script', get_template_directory_uri() . '/inc/customizer/controls/range-slider/range-slider-two/js/range-slider-two.js', array( 'jquery', 'customize-base', 'jquery-ui-slider', 'influence-blog-customizer-responsive-media-script' ), wp_get_theme()->get( 'Version' ) , true );
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

            $this->json['id'] 		= $this->id;

            $this->json['inputAttrs'] = '';
            foreach ( $this->input_attrs as $attr => $value ) {
                $this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
            }

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
        protected function content_template() {
            ?>
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
                    <div class="range-slider-two desktop-slider"></div>
                    <div class="range-slider-two-input">
                        <input {{{ data.inputAttrs }}} type="number" class="slider-input desktop-input" value="{{ data.desktop.value }}" {{{ data.desktop.link }}} />
                    </div>
                </div>
            <# } #>

            <# if ( data.tablet ) { #>
                <div class="tablet control-wrap">
                    <div class="range-slider-two tablet-slider"></div>
                    <div class="range-slider-two-input">
                        <input {{{ data.inputAttrs }}} type="number" class="slider-input tablet-input" value="{{ data.tablet.value }}" {{{ data.tablet.link }}} />
                    </div>
                </div>
            <# } #>

            <# if ( data.mobile ) { #>
                <div class="mobile control-wrap">
                    <div class="range-slider-two mobile-slider"></div>
                    <div class="range-slider-two-input">
                        <input {{{ data.inputAttrs }}} type="number" class="slider-input mobile-input" value="{{ data.mobile.value }}" {{{ data.mobile.link }}} />
                    </div>
                </div>
            <# } #>

        <?php
        }
    }
endif;

if( !function_exists( 'influence_blog_sanitize_range_slider_two_number' ) ) :
    /**
     * Sanitization callback function for range slider two control.
     */
    function influence_blog_sanitize_range_slider_two_number( $input ) {

        return is_numeric( $input ) ? $input : 0;
    }
endif;

if( !function_exists( 'influence_blog_sanitize_range_slider_two_blank' ) ) :
    /**
     * Sanitization callback function for range slider two control.
     */
    function influence_blog_sanitize_range_slider_two_blank( $input ) {

        return is_numeric( $input ) ? $input : '';
    }
endif;
