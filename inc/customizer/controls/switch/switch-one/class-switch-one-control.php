<?php

if( ! class_exists( 'Switch_One_Control' ) ) :

    /**
	 * Switch One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Switch_One_Control extends WP_Customize_Control {

        /**
		 * Declare the control type.
		 *
		 * @access public
		 * @var string
		 */
        public $type = 'switch-one';

        /**
		 * Declare the control on off label.
		 *
		 * @access public
		 * @var string
		 */
        public $on_off_label = array();

        public function __construct( $manager, $id, $args = array() ) {

            $this->on_off_label = $args['on_off_label'];

            parent::__construct( $manager, $id, $args );
        }

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'customizer-switch-one-style', get_template_directory_uri() . '/inc/customizer/controls/switch/switch-one/css/switch-one.css' );

            wp_enqueue_script( 'customizer-switch-one-script', get_template_directory_uri() . '/inc/customizer/controls/switch/switch-one/js/switch-one.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ) , true );
        }

        /**
         * Render the control's content.
         */
        public function render_content() {

            ?>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>
            <?php if( $this->description ) { ?>
                <span class="description customize-control-description">
                <?php echo wp_kses_post( $this->description ); ?>
                </span>
            <?php } ?>
            <?php
            $switch_class = ( $this->value() == 'true' ) ? 'switch-on' : '';
            $on_off_label = $this->on_off_label;
            ?>
            <div class="switch-one <?php echo esc_attr( $switch_class ); ?>">
                <div class="switch-one-inner">
                    <div class="switch-one-active">
                        <div class="switch-one-switch"><?php echo esc_html( $on_off_label['on'] ) ?></div>
                    </div>
                    <div class="switch-one-inactive">
                        <div class="switch-one-switch"><?php echo esc_html( $on_off_label['off'] ) ?></div>
                    </div>
                </div>
            </div>
            <input <?php $this->link(); ?> type="hidden" value="<?php echo esc_attr( $this->value() ); ?>"/>
            <?php
        }
    }
endif;

if( !function_exists( 'sanitize_switch_one' ) ) :
    /**
     * Sanitization callback function for switch one control.
     */
    function sanitize_switch_one( $input ) {

        $input = sanitize_text_field( $input );

        if ( 'false' === $input ) {

            return false;

        } else {

            return true;
        }
    }
endif;
