<?php

if( ! class_exists( 'Icon_Picker_One_Control' ) ) :
    /**
	 * Icon Picker One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Icon_Picker_One_Control extends WP_Customize_Control {

        /**
		 * Declare the control type.
		 *
		 * @access public
		 * @var string
		 */
        public $type = 'icon-picker-one';

        /**
         * Option label.
         *
         * @since 1.0.0
         * @var string $label
         */
        public $label = '';

        /**
         * Option fields.
         *
         * @since 1.0.0
         * @var string $fields
         */
        public $fields = array();

        /**
         * Option description.
         *
         * @since 1.0.0
         * @var string $description
         */
        public $description = '';

        public function field_header($icon = '')
        {
            echo '<div class="icon-picker-one-field-header">';
            if (!empty($this->label)) {
                echo '<span class="customize-control-title">' . esc_html($this->label) . '</span>';
            }
            if (!empty($this->description)) {
                echo '<span class="description customize-control-description">' . esc_html($this->description) . '</span>';
            }
            if (!empty($icon)) {
                echo '<span class="' . esc_attr($icon) . '"></span>';
            }
            echo '</div>';

        }

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            $icon_lists = array(
                'font_awesome' => array(
                    'title' => __('Font Awesome', 'influence-blog'),
                    'icons' => icon_picker_one_fontawesome_icon_list(),
                )
            );

            $icon_picker_uri = get_template_directory_uri() . '/inc/customizer/controls/icon-picker/icon-picker-one/';
            $fontawesome_fonts_uri = get_template_directory_uri() . '/everestthemes/assets/css/font-awesome.min.css';

            $icon_lists = array(
                'font_awesome' => array(
                    'title' => __('Font Awesome', 'influence-blog'),
                    'icons' => icon_picker_one_fontawesome_icon_list(),
                )
            );

            wp_enqueue_script( 'influence-blog-icon-picker-one-script', $icon_picker_uri . 'js/icon-picker-one.js', array('jquery'), wp_get_theme()->get( 'Version' ), true );
            wp_localize_script('influence-blog-icon-picker-one-script', 'faAllIcons', $icon_lists);

            wp_register_style('influence-blog-icon-picker-one-fontawesome', $fontawesome_fonts_uri, array(), wp_get_theme()->get( 'Version' ) );
            wp_enqueue_style('influence-blog-icon-picker-one-control-css', $icon_picker_uri . 'css/icon-picker-one.css', array('influence-blog-icon-picker-one-fontawesome'), wp_get_theme()->get( 'Version' ) );
        }

        /**
         * Render the control in the customizer
         */
        public function render_content()
        {
            $default = isset($this->setting->default) ? $this->setting->default : '';


            ?>
            <div class="icon-picker-one-control">
                <?php
                $this->field_header();
                ?>
                <div class="icon-picker-one-control-field">
                    <span class="icon-show <?php echo esc_attr($this->value()) ?>"></span>
                    <input type="text"
                           id="<?php echo esc_attr($this->id); ?>"
                           name="<?php echo esc_attr($this->id); ?>"
                           value="<?php echo esc_attr($this->value()); ?>"
                           class="customize-control-icon-picker-one-value" <?php $this->link(); ?>
                           placeholder="Click here to pick an icon"
                           readonly
                    />
                    <span class="icon-clear dashicons dashicons-trash"></span>

                    <?php
                    $this->picker();
                    ?>
                </div>

            </div>
            <?php
        }

        public function picker()
        {
            $icon_lists = array();
            ?>
            <div id="customizer-icon-picker-one">
                <div class="picker-header">
                    <a class="customize-controls-icon-close" href="#">
                        <span class="screen-reader-text"><?php echo esc_html__('Cancel', 'influence-blog'); ?></span>
                    </a>
                    <div class="icon-type-selector">
                        <select id="icon-picker-one-type">
                            <option value="all"><?php echo esc_html__('All Icon Types', 'influence-blog'); ?></option>
                        </select>
                    </div>
                </div>
                <div class="icon-picker-one-search">
                    <input type="text" id="icon-picker-one-search-input"
                           placeholder="<?php echo esc_html__('Type icon name here', 'influence-blog'); ?>">
                </div>
                <div id="icon-picker-one-browser">

                </div>
            </div>
            <?php
        }
    }
endif;

require get_template_directory() . '/inc/customizer/controls/icon-picker/icon-picker-one/fontawesome/fontawesome.php';

/**
 * Sanitization callback function for icon picker one control.
 * Uses default sanitize_text_field
 */
