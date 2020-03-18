<?php

if( ! class_exists( 'Influence_Blog_Heading_One_Control' ) ) :

    /**
	 * Heading One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Heading_One_Control extends WP_Customize_Control {

        /**
         * The control type.
         *
         * @access public
         * @var string
         */
        public $type = 'heading-one';

        /**
         * Control class.
         *
         * @var string
         */
        public $class = '';

        /**
         * Should be accordion?
         *
         * @var bool
         */
        public $accordion = false;

        /**
         * Initial state.
         *
         * @var bool
         */
        public $expanded = true;

        /**
         * How many controls to wrap.
         *
         * @var int
         */
        public $controls_to_wrap = 1;

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_script( 'influence-blog-customizer-heading-one-script', get_template_directory_uri() . '/inc/customizer/controls/heading/heading-one/js/heading-one.js', array( 'jquery', 'customize-base' ), wp_get_theme()->get( 'Version' ) , true );

            wp_enqueue_style( 'influence-blog-customizer-heading-one-style', get_template_directory_uri() . '/inc/customizer/controls/heading/heading-one/css/heading-one.css' );
        }

        /**
         * Send data to _s
         *
         * @return array
         */
        public function json() {
            $json              = parent::json();
            $json['classes']   = $this->class;
            $json['accordion'] = $this->accordion;

            if ( $this->accordion === true ) {
                $json['classes'] .= ' accordion';
            }

            $json['style'] = $this->print_style();

            return $json;
        }

        /**
         * Render the control.
         */
        protected function render() {
            $id     = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $this->id );
            $class  = 'customize-control customize-control-' . $this->type;
            $class .= ' ' . $this->class;
            if ( $this->accordion ) {
                $class .= ' accordion';
            }

            if ( $this->expanded ) {
                $class .= ' expanded';
            }

            echo '<li id="' . esc_attr( $id ) . '" class="' . esc_attr( $class ) . '">';
            echo '</li>';
        }

        /**
         * An Underscore (JS) template for this control's content (but not its container).
         *
         * Class variables for this control class are available in the `data` JS object;
         * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
         *
         * @see    WP_Customize_Control::print_template()
         *
         * @access protected
         */
        protected function content_template() {
            ?>
            <#
            var expandButton = '';
            if(data.accordion) {
            expandButton = '<span class="accordion-expand-button"></span>';
            } #>
            <h4 class="customizer-heading-one">{{{ data.label }}}{{{expandButton}}}</h4>
            {{{data.style}}}
            <?php
        }

        /**
         * Print the style for the accordion.
         */
        protected function print_style() {
            $style  = '';
            $style .= '<style>';
            for ( $i = 1; $i <= $this->controls_to_wrap; $i ++ ) {
                $style .= '.accordion.' . $this->class . ':not(.expanded)';
                for ( $j = 1; $j <= $i; $j ++ ) {
                    $style .= ' + li';
                }
                if ( $i !== $this->controls_to_wrap ) {
                    $style .= ',';
                }
            }
            $style .= '{max-height: 0;opacity: 0;margin: 0; overflow: hidden;}';
            $style .= '</style>';

            return $style;
        }
    }
endif;

/**
 * Sanitization callback function for info one control.
 * Uses default sanitize_text_field
 */
