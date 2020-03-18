<?php

if( ! class_exists( 'Box_Shadow_One_Control' ) ) :

    /**
	 * Box Shadow One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Box_Shadow_One_Control extends WP_Customize_Control {

        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'box-shadow-one';

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-box-shadow-one-style', get_template_directory_uri() . '/inc/customizer/controls/box-shadow/box-shadow-one/css/box-shadow-one.css' );

            wp_enqueue_script( 'influence-blog-customizer-box-shadow-one-script', get_template_directory_uri() . '/inc/customizer/controls/box-shadow/box-shadow-one/js/box-shadow-one.js', array( 'jquery', 'customize-base' ), wp_get_theme()->get( 'Version' ) , true );

            wp_localize_script( 'influence-blog-customizer-box-shadow-one-script', 'boxShadowOne', $this->l10n() );
        }

        /**
         * Renders the control wrapper and calls $this->render_content() for the internals.
         *
         * @see WP_Customize_Control::render()
         */
        protected function render() {

            $id    = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $this->id );

            $class = 'customize-control has-switchers customize-control-' . $this->type;

            ?>
            <li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
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
            $this->json['l10n']    	= $this->l10n();
            $this->json['title'] 	= esc_html__( 'Link values together', 'influence-blog' );

            $this->json['inputAttrs'] = '';
            foreach ( $this->input_attrs as $attr => $value ) {
                $this->json['inputAttrs'] .= $attr . '="' . esc_attr( $value ) . '" ';
            }

            $this->json['desktop'] = array();
            $this->json['tablet']  = array();
            $this->json['mobile']  = array();

            foreach ( $this->settings as $setting_key => $setting ) {

                list( $_key ) = explode( '_', $setting_key );

                $this->json[ $_key ][ $setting_key ] = array(
                    'id'        => $setting->id,
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
                </span>
            <# } #>

            <# if ( data.description ) { #>
                <span class="description customize-control-description">{{{ data.description }}}</span>
            <# } #>

            <ul class="desktop control-wrap active">
                <# _.each( data.desktop, function( args, key ) { #>
                    <li class="box-shadow-one-wrap {{ key }}">
                        <input {{{ data.inputAttrs }}} type="number" class="box-shadow-one-{{ key }}" {{{ args.link }}} value="{{{ args.value }}}" />
                        <span class="box-shadow-one-label">{{ data.l10n[ key ] }}</span>
                    </li>
                <# } ); #>
            </ul>
            <?php
        }

        /**
         * Returns an array of translation strings.
         *
         * @access protected
         * @param string|false $id The string-ID.
         * @return string
         */
        protected function l10n( $id = false ) {

            $translation_strings = array(
                'desktop_top' 		=> esc_attr__( 'X-Offset', 'influence-blog' ),
                'desktop_right' 	=> esc_attr__( 'Y-Offset', 'influence-blog' ),
                'desktop_bottom' 	=> esc_attr__( 'Blur', 'influence-blog' ),
                'desktop_left' 		=> esc_attr__( 'Spread', 'influence-blog' ),
            );
            if ( false === $id ) {
                return $translation_strings;
            }
            return $translation_strings[ $id ];
        }
    }
endif;

if( !function_exists( 'sanitize_box_shadow_one' ) ) :
    /**
     * Sanitization callback function for box shadow one control.
     */
    function sanitize_box_shadow_one( $input, $setting ) {

        return is_numeric( $input ) ? $input : 0;
    }
endif;
