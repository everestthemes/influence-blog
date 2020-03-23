<?php

if( ! class_exists( 'Influence_Blog_Repeater_Two_Control' ) ) {
    /**
	 * Repeater Two Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Repeater_Two_Control extends WP_Customize_Control {

        public $id;
        private $boxtitle = array();
        private $add_field_label = array();
        private $customizer_repeater_two_title_control = false;
        private $customizer_repeater_two_subtitle_control = false;
        private $customizer_repeater_two_button_text_control = false;
        private $customizer_repeater_two_link_control = false;
        private $customizer_repeater_two_video_url_control = false;
        private $customizer_repeater_two_image_control = false;
        private $customizer_repeater_two_icon_control = false;
        private $customizer_repeater_two_color_control = false;
        private $customizer_repeater_two_text_control = false;
        public $customizer_repeater_two_text2_control = false;
        public $customizer_repeater_two_link2_control = false;
        private $customizer_repeater_two_designation_control = false;
        private $customizer_repeater_two_shortcode_control = false;
        private $customizer_repeater_two_repeater_control = false;
        private $customizer_repeater_two_checkbox_control = false;

        private $customizer_icon_container = '';
        private $allowed_html = array();

        /*Class constructor*/
        public function __construct( $manager, $id, $args = array() ) {

            parent::__construct( $manager, $id, $args );

            /*Get options from customizer.php*/
            $this->add_field_label = esc_html__( 'Add new field', 'influence-blog' );

            if ( ! empty( $args['add_field_label'] ) ) {

                $this->add_field_label = $args['add_field_label'];
            }

            $this->boxtitle = esc_html__( 'Customizer Repeater', 'influence-blog' );

            if ( ! empty ( $args['item_name'] ) ) {

                $this->boxtitle = $args['item_name'];

            } elseif ( ! empty( $this->label ) ) {

                $this->boxtitle = $this->label;
            }

            if ( ! empty( $args['customizer_repeater_two_image_control'] ) ) {

                $this->customizer_repeater_two_image_control = $args['customizer_repeater_two_image_control'];
            }


            if ( ! empty( $args['customizer_repeater_two_icon_control'] ) ) {

                $this->customizer_repeater_two_icon_control = $args['customizer_repeater_two_icon_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_color_control'] ) ) {

                $this->customizer_repeater_two_color_control = $args['customizer_repeater_two_color_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_title_control'] ) ) {

                $this->customizer_repeater_two_title_control = $args['customizer_repeater_two_title_control'];
            }


            if ( ! empty( $args['customizer_repeater_two_subtitle_control'] ) ) {

                $this->customizer_repeater_two_subtitle_control = $args['customizer_repeater_two_subtitle_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_text_control'] ) ) {

                $this->customizer_repeater_two_text_control = $args['customizer_repeater_two_text_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_text2_control'] ) ) {

                $this->customizer_repeater_two_text2_control = $args['customizer_repeater_two_text2_control'];
            }
              if ( ! empty( $args['customizer_repeater_two_link2_control'] ) ) {

                $this->customizer_repeater_two_link2_control = $args['customizer_repeater_two_link2_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_designation_control'] ) ) {

                $this->customizer_repeater_two_designation_control = $args['customizer_repeater_two_designation_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_button_text_control'] ) ) {

                $this->customizer_repeater_two_button_text_control = $args['customizer_repeater_two_button_text_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_link_control'] ) ) {

                $this->customizer_repeater_two_link_control = $args['customizer_repeater_two_link_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_checkbox_control'] ) ) {

                $this->customizer_repeater_two_checkbox_control = $args['customizer_repeater_two_checkbox_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_video_url_control'] ) ) {

                $this->customizer_repeater_two_video_url_control = $args['customizer_repeater_two_video_url_control'];
            }


            if ( ! empty( $args['customizer_repeater_two_shortcode_control'] ) ) {

                $this->customizer_repeater_two_shortcode_control = $args['customizer_repeater_two_shortcode_control'];
            }

            if ( ! empty( $args['customizer_repeater_two_repeater_control'] ) ) {

                $this->customizer_repeater_two_repeater_control = $args['customizer_repeater_two_repeater_control'];
            }


            if ( ! empty( $id ) ) {

                $this->id = $id;
            }

            if ( file_exists( get_template_directory() . '/inc/customizer/controls/repeater/repeater-two/icons/icons.php' ) ) {

                $this->customizer_icon_container =  'inc/customizer/controls/repeater/repeater-two/icons/icons';
            }

            $allowed_array1 = wp_kses_allowed_html( 'post' );

            $allowed_array2 = array(
                'input' => array(
                    'type'        => array(),
                    'class'       => array(),
                    'placeholder' => array()
                )
            );

            $this->allowed_html = array_merge( $allowed_array1, $allowed_array2 );
        }

        /**
         * Enqueue scripts and styles
         */
        public function enqueue() {

            wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/everestthemes/assets/css/font-awesome.min.css' );

            wp_enqueue_style( 'influence-blog-customizer-repeater-two-style', get_template_directory_uri() . '/inc/customizer/controls/repeater/repeater-two/css/repeater-two.css' );

            wp_enqueue_style( 'wp-color-picker' );

            wp_enqueue_script( 'influence-blog-customizer-repeater-two-script', get_template_directory_uri() . '/inc/customizer/controls/repeater/repeater-two/js/repeater-two.js', array( 'jquery', 'jquery-ui-draggable', 'wp-color-picker' ), wp_get_theme()->get( 'Version' ) , true );

            wp_enqueue_script( 'influence-blog-customizer-repeater-two-fontawesome-iconpicker', get_template_directory_uri() . '/inc/customizer/controls/repeater/repeater-two/js/iconpicker.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ) , true );

            wp_enqueue_style( 'influence-blog-customizer-repeater-two-fontawesome-iconpicker', get_template_directory_uri() . '/inc/customizer/controls/repeater/repeater-two/css/iconpicker.css' );
        }

        public function render_content() {

            /*Get default options*/
            $this_default = json_decode( $this->setting->default );

            /*Get values (json format)*/
            $values = $this->value();

            /*Decode values*/
            $json = json_decode( $values );

            if ( ! is_array( $json ) ) {

                $json = array( $values );
            }
            ?>
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <div class="customizer-repeater-two-general-control-repeater customizer-repeater-two-general-control-droppable">
                <?php
                if ( ( count( $json ) == 1 && '' === $json[0] ) || empty( $json ) ) {

                    if ( ! empty( $this_default ) ) {

                        $this->iterate_array( $this_default );
                        ?>
                        <input type="hidden"
                               id="customizer-repeater-two-<?php echo esc_attr( $this->id ); ?>-colector" <?php esc_attr( $this->link() ); ?>
                               class="customizer-repeater-two-colector"
                               value="<?php echo esc_textarea( json_encode( $this_default ) ); ?>"/>
                        <?php

                    } else {

                        $this->iterate_array();
                        ?>
                        <input type="hidden"
                               id="customizer-repeater-two-<?php echo esc_attr( $this->id ); ?>-colector" <?php esc_attr( $this->link() ); ?>
                               class="customizer-repeater-two-colector"/>
                        <?php
                    }

                } else {

                    $this->iterate_array( $json );
                    ?>
                    <input type="hidden" id="customizer-repeater-two-<?php echo esc_attr( $this->id ); ?>-colector" <?php esc_attr( $this->link() );
                    ?>
                    class="customizer-repeater-two-colector" value="<?php echo esc_textarea( $this->value() ); ?>"/>
                    <?php
                }
                ?>
            </div>
            <button type="button" class="button add_field customizer-repeater-two-new-field">
                <?php echo esc_html( $this->add_field_label ); ?>
            </button>
            <?php
        }

        private function iterate_array( $array = array() ) {

            /*Counter that helps checking if the box is first and should have the delete button disabled*/
            $it = 0;

            if( !empty( $array ) ) {

                $exist_service = count( $array );

                $repeater_two_del_btn_id=$this->boxtitle . $this->id;

                global $influence_blog_repeater_two_limit;

                global $influence_blog_type_with_id;

                echo "<input type='hidden' value='" . esc_attr( $exist_service ) . "' id='exist_repeater_two_" . esc_attr( $repeater_two_del_btn_id ) . "'/>";

                foreach( $array as $icon ) {

                if( $it < 4 ) {

                    $influence_blog_repeater_two_limit = "repeater_two_limit";
                    $influence_blog_type_with_id='';

                }else {

                    $influence_blog_repeater_two_limit = "repeater_two_overlimit";
                    $influence_blog_type_with_id = $repeater_two_del_btn_id . "_" . $it;
                }
                ?>
                <div class="customizer-repeater-two-general-control-repeater-container customizer-repeater-two-draggable">
                    <div class="customizer-repeater-two-customize-control-title">
                        <?php echo esc_html( $this->boxtitle ) ?>
                    </div>
                    <div class="customizer-repeater-two-box-content-hidden">
                        <?php
                        $choice = $image_url = $icon_value = $title = $subtitle = $text = $text2 = $link2 = $link = $designation = $button = $open_new_tab = $shortcode = $repeater = $color = $video_url = '';

                        if( !empty( $icon->id ) ) {

                            $id = $icon->id;
                        }

                        if( !empty( $icon->choice ) ) {

                            $choice = $icon->choice;
                        }

                        if( !empty( $icon->image_url ) ) {

                            $image_url = $icon->image_url;
                        }

                        if( !empty( $icon->icon_value ) ) {

                            $icon_value = $icon->icon_value;
                        }

                        if( !empty( $icon->color ) ) {

                            $color = $icon->color;
                        }

                        if( !empty( $icon->title ) ) {

                            $title = $icon->title;
                        }

                        if( !empty( $icon->designation ) ) {

                            $designation = $icon->designation;
                        }

                        if( !empty( $icon->subtitle ) ) {

                            $subtitle =  $icon->subtitle;
                        }

                        if( !empty( $icon->text ) ) {

                            $text = $icon->text;
                        }

                        if( !empty( $icon->text2 ) ) {

                            $text2 = $icon->text2;
                        }

                        if( !empty( $icon->link2 ) ) {

                            $link2 = $icon->link2;
                        }

                        if( !empty( $icon->video_url ) ) {

                            $video_url = $icon->video_url;
                        }

                        if( !empty( $icon->button ) ) {

                            $button = $icon->button_text;
                        }

                        if( !empty( $icon->link)){
                            $link = $icon->link;
                        }

                        if( !empty( $icon->shortcode ) ) {

                            $shortcode = $icon->shortcode;
                        }

                        if( !empty( $icon->social_repeater ) ) {

                            $repeater = $icon->social_repeater;
                        }

                        if( !empty( $icon->open_new_tab ) ) {

                            $open_new_tab = $icon->open_new_tab;
                        }

                        if( $this->customizer_repeater_two_title_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Title','influence-blog' ), $this->id, 'customizer_repeater_two_title_control' ),
                                'class' => 'customizer-repeater-two-title-control '."$influence_blog_repeater_two_limit".' '."$influence_blog_type_with_id".'',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_title_control' ),
                            ), $title );
                        }

                        if( $this->customizer_repeater_two_subtitle_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Subtitle','influence-blog' ), $this->id, 'customizer_repeater_two_subtitle_control' ),
                                'class' => 'customizer-repeater-two-subtitle-control '."$influence_blog_repeater_two_limit".' '."$influence_blog_type_with_id".'',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_subtitle_control' ),
                            ), $subtitle );
                        }

                        if( $this->customizer_repeater_two_text_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Description','influence-blog' ), $this->id, 'customizer_repeater_two_text_control' ),
                                'class' => 'customizer-repeater-two-text-control '."$influence_blog_repeater_two_limit".' '."$influence_blog_type_with_id".'',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', 'textarea', $this->id, 'customizer_repeater_two_text_control' ),
                            ), $text );
                        }

                        if( $this->customizer_repeater_two_text2_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Button Label','influence-blog' ), $this->id, 'customizer_repeater_two_text2_control' ),
                                'class' => 'customizer-repeater-two-text2-control '."$influence_blog_repeater_two_limit".'',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_text2_control' ),
                            ), $text2 );
                        }

                        if( $this->customizer_repeater_two_link2_control ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'skills','influence-blog' ), $this->id, 'customizer_repeater_two_link2_control' ),
                                'class' => 'customizer-repeater-two-link2-control '."$influence_blog_repeater_two_limit".' '."$influence_blog_type_with_id".'',
                                //'sanitize_callback' => 'esc_url_raw',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_link2_control' ),
                            ), $link2 );
                        }

                        if( $this->customizer_repeater_two_button_text_control ) {

                            $this->input_control( array(
                            'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__('Button Text',
                            'influence-blog'), $this->id, 'customizer_repeater_two_button_text_control'),
                            'class' => 'customizer-repeater-two-button-text-control '."$influence_blog_repeater_two_limit".'',
                            'type' => apply_filters('repeater_two_repeater_input_types_filter', '' , $this->id,
                            'customizer_repeater_two_button_text_control'),
                            ), $button );
                        }

                        if( $this->customizer_repeater_two_link_control ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Link','influence-blog' ), $this->id, 'customizer_repeater_two_link_control' ),
                                'class' => 'customizer-repeater-two-link-control '."$influence_blog_repeater_two_limit".' '."$influence_blog_type_with_id".'',
                                'sanitize_callback' => 'esc_url_raw',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_link_control' ),
                            ), $link );
                        }

                        if( $this->customizer_repeater_two_checkbox_control == true ) {

                            $this->testimonila_check( $open_new_tab );

                        }

                        if( $this->customizer_repeater_two_video_url_control ) {

                            $this->input_control( array(
                            'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__('Video Url',
                            'influence-blog'), $this->id, 'customizer_repeater_two_video_url_control'),
                            'class' => 'customizer-repeater-two-video-url-control',
                            'type'  => apply_filters('repeater_two_customizer_repeater_two_video_url_control', 'textarea', $this->id, 'customizer_repeater_two_video_url_control' ),
                            ), $video_url );
                        }

                        if( $this->customizer_repeater_two_image_control == true && $this->customizer_repeater_two_icon_control == true ) {

                            $this->icon_type_choice( $choice,$influence_blog_repeater_two_limit );
                        }

                        if( $this->customizer_repeater_two_image_control == true ) {

                            $this->image_control( $image_url, $choice, $influence_blog_repeater_two_limit, $it+1, $repeater_two_del_btn_id );
                        }

                        if( $this->customizer_repeater_two_icon_control == true ) {

                            $this->icon_picker_control( $icon_value, $choice );
                        }

                        if( $this->customizer_repeater_two_color_control == true ) {
                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Color','influence-blog' ), $this->id, 'customizer_repeater_two_color_control' ),
                                'class' => 'customizer-repeater-two-color-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', 'color', $this->id, 'customizer_repeater_two_color_control' ),
                                'sanitize_callback' => 'sanitize_hex_color'
                            ), $color );
                        }

                        if( $this->customizer_repeater_two_shortcode_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Shortcode','influence-blog' ), $this->id, 'customizer_repeater_two_shortcode_control' ),
                                'class' => 'customizer-repeater-two-shortcode-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_shortcode_control' ),
                            ), $shortcode );
                        }

                        if( $this->customizer_repeater_two_designation_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Designation','influence-blog' ), $this->id, 'customizer_repeater_two_designation_control' ),
                                'class' => 'customizer-repeater-two-designation-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', 'textarea', $this->id, 'customizer_repeater_two_designation_control' ),
                            ), $designation );
                        }

                        if( $this->customizer_repeater_two_repeater_control == true ) {

                            $this->repeater_control( $repeater, $influence_blog_repeater_two_limit, $influence_blog_type_with_id );
                        }
                        ?>
                        <input type="hidden" class="social-repeater-box-id" value="<?php if ( ! empty( $id ) ) {
                            echo esc_attr( $id );
                        } ?>">
                        <button type="button" class="social-repeater-general-control-remove-field" <?php if ( $it == 0 ) {
                            echo 'style="display:none;"';
                        } ?>>
                            <?php
                            /* translators: 1: box title. */
                            printf( esc_html__( 'Delete %s', 'influence-blog' ), esc_html( $this->boxtitle ) );
                            ?>
                        </button>

                    </div>
                </div>
                <?php
                $it++;
                }

            } else {

                ?>
                <div class="customizer-repeater-two-general-control-repeater-container">
                    <div class="customizer-repeater-two-customize-control-title">
                        <?php echo esc_html( $this->boxtitle ) ?>
                    </div>
                    <div class="customizer-repeater-two-box-content-hidden">
                        <?php

                        if ( $this->customizer_repeater_two_image_control == true && $this->customizer_repeater_two_icon_control == true ) {

                            $this->icon_type_choice();
                        }

                        if ( $this->customizer_repeater_two_image_control == true ) {

                            $this->image_control();
                        }

                        if ( $this->customizer_repeater_two_icon_control == true ) {

                            $this->icon_picker_control();
                        }

                        if( $this->customizer_repeater_two_color_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Color','influence-blog' ), $this->id, 'customizer_repeater_two_color_control' ),
                                'class' => 'customizer-repeater-two-color-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', 'color', $this->id, 'customizer_repeater_two_color_control' ),
                                'sanitize_callback' => 'sanitize_hex_color'
                            ) );
                        }

                        if ( $this->customizer_repeater_two_title_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Title','influence-blog' ), $this->id, 'customizer_repeater_two_title_control' ),
                                'class' => 'customizer-repeater-two-title-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_title_control' ),
                            ) );
                        }

                        if ( $this->customizer_repeater_two_subtitle_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Subtitle','influence-blog' ), $this->id, 'customizer_repeater_two_subtitle_control' ),
                                'class' => 'customizer-repeater-two-subtitle-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_subtitle_control' ),
                            ) );
                        }

                        if ( $this->customizer_repeater_two_text_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Description','influence-blog' ), $this->id, 'customizer_repeater_two_text_control' ),
                                'class' => 'customizer-repeater-two-text-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', 'textarea', $this->id, 'customizer_repeater_two_text_control' ),
                            ) );
                        }

                        if ( $this->customizer_repeater_two_text2_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Button Label','influence-blog' ), $this->id, 'customizer_repeater_two_text2_control' ),
                                'class' => 'customizer-repeater-two-text2-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_text2_control' ),
                            ) );
                        }

                         if ( $this->customizer_repeater_two_link2_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'skill','influence-blog' ), $this->id, 'customizer_repeater_two_link2_control' ),
                                'class' => 'customizer-repeater-two-link2-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_link2_control' ),
                            ) );
                        }

                        if( $this->customizer_repeater_two_button_text_control ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__('Button Text',
                                'influence-blog'), $this->id, 'customizer_repeater_two_button_text_control'),
                                'class' => 'customizer-repeater-two-button-text-control',
                                'type' => apply_filters('repeater_two_repeater_input_types_filter', '' , $this->id,
                                'customizer_repeater_two_button_text_control'),
                            ) );
                        }

                        if ( $this->customizer_repeater_two_link_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Link','influence-blog' ), $this->id, 'customizer_repeater_two_link_control' ),
                                'class' => 'customizer-repeater-two-link-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_link_control' ),
                            ) );
                        }

                        if( $this->customizer_repeater_two_checkbox_control == true ) {

                            $this->testimonila_check();
                        }

                        if( $this->customizer_repeater_two_video_url_control ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__('Video Url',
                                'influence-blog'), $this->id, 'customizer_repeater_two_video_url_control'),
                                'class' => 'customizer-repeater-two-video-url-control',
                                'type'  => apply_filters('repeater_two_customizer_repeater_two_video_url_control', 'textarea', $this->id, 'customizer_repeater_two_video_url_control' ),
                            ) );
                        }

                        if ( $this->customizer_repeater_two_shortcode_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Shortcode','influence-blog' ), $this->id, 'customizer_repeater_two_shortcode_control' ),
                                'class' => 'customizer-repeater-two-shortcode-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', '', $this->id, 'customizer_repeater_two_shortcode_control' ),
                            ) );
                        }

                        if ( $this->customizer_repeater_two_designation_control == true ) {

                            $this->input_control( array(
                                'label' => apply_filters('repeater_two_repeater_input_labels_filter', esc_html__( 'Designation','influence-blog' ), $this->id, 'customizer_repeater_two_designation_control' ),
                                'class' => 'customizer-repeater-two-designation-control',
                                'type'  => apply_filters('repeater_two_repeater_input_types_filter', 'textarea', $this->id, 'customizer_repeater_two_designation_control' ),
                            ) );
                        }

                        if( $this->customizer_repeater_two_repeater_control == true ) {

                            $this->repeater_control();
                        }
                        ?>
                        <input type="hidden" class="social-repeater-box-id">
                        <button type="button" class="social-repeater-general-control-remove-field button" style="display:none;">
                            <?php esc_html_e( 'Delete field', 'influence-blog' ); ?>
                        </button>
                    </div>
                </div>
                <?php
            }
        }

        private function input_control( $options, $value ='' ) {

            ?>
            <span class="customize-control-title <?php echo esc_html( $options['label'] ); ?>"
            <?php if($options['class']== 'customizer-repeater-two-video-url-control') { echo esc_attr('style="display:none;"'); } ?>
            >
            <?php echo esc_html( $options['label'] ); ?></span>
            <?php
            if( !empty( $options[ 'type' ] ) ) {

                switch( $options[ 'type' ] ) {

                    case 'textarea':
                        ?>
                        <textarea class="<?php echo esc_attr( $options['class'] ); ?>" placeholder="<?php echo esc_attr( $options['label'] ); ?>"><?php echo ( !empty($options['sanitize_callback']) ?  call_user_func_array( $options['sanitize_callback'], array( $value ) ) : esc_attr($value) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></textarea>
                        <?php
                    break;

                    case 'color':
                        ?>
                        <input type="text" value="<?php echo ( !empty($options['sanitize_callback']) ?  call_user_func_array( $options['sanitize_callback'], array( $value ) ) : esc_attr($value) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" class="<?php echo esc_attr($options['class']); ?>" />
                        <?php
                    break;
                }

            } else {

                ?>
                <input type="text" value="<?php echo ( !empty($options['sanitize_callback']) ?  call_user_func_array( $options['sanitize_callback'], array( $value ) ) : esc_attr($value) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" class="<?php echo esc_attr($options['class']); ?>" placeholder="<?php echo esc_attr( $options['label'] ); ?>"/>
                <?php
            }
        }

        private function testimonila_check( $value='no', $class='', $influence_blog_type_with_id='' ) {

            ?>
            <div class="customize-control-title">
            <?php esc_html_e('Open link in new tab:','influence-blog'); ?>
                <span class="switch">
                    <input type="checkbox" name="custom_checkbox" value="yes" <?php if( $value=='yes' ){ echo 'checked'; } ?> class="customizer-repeater-two-checkbox <?php echo esc_attr( $class ); ?> <?php echo esc_html( $influence_blog_type_with_id ); ?>">
                </span>
            </div>
        <?php
        }

        private function icon_picker_control( $value = '', $show = '', $class = '' ) {

            ?>
            <div class="social-repeater-general-control-icon" <?php if( $show === 'customizer_repeater_two_image' || $show === 'customizer_repeater_two_none' ) { echo 'style="display:none;"'; } ?>>
                <span class="customize-control-title">
                    <?php esc_html_e('Icon','influence-blog'); ?>
                </span>
                <span class="description customize-control-description">
                    <?php
                    echo /* translators: 1: Icons link 2: Icons link text. */ sprintf(
                        esc_html__( 'Note: Some icons may not be displayed here. You can see the full list of icons at %1$s.', 'influence-blog' ),
                        sprintf( '<a href="' . esc_url( 'http://fontawesome.io/icons/' ) . '" rel="nofollow" target="_blank">%s</a>', esc_html__( 'http://fontawesome.io/icons/', 'influence-blog' ) )
                    );
                    ?>
                </span>
                <div class="input-group icp-container">
                    <input data-placement="bottomRight" class="icp icp-auto" value="<?php if(!empty($value)) { echo esc_attr( $value );} ?>" type="text">
                    <span class="input-group-addon">
                        <i class="fa <?php echo esc_attr($value); ?>"></i>
                    </span>
                </div>
                <?php get_template_part( $this->customizer_icon_container ); ?>
            </div>
            <?php
        }

        private function image_control( $value = '', $show = '', $class = '', $auto = '', $sections = '' ) {

            if( $auto == 1 ) {

                $auto = "one";
            }

            if( $auto == 2 ) {

                $auto = "two";
            }

            if( $auto == 3 ) {

                $auto = "three";
            }

            if( $auto == 4 ) {

                $auto = "four";
            }
            ?>
            <div class="customizer-repeater-two-image-control" <?php if( $show === 'customizer_repeater_two_icon' || $show === 'customizer_repeater_two_none' ) { echo 'style="display:none;"'; } ?>>
                <span class="customize-control-title">
                    <?php esc_html_e('Image','influence-blog')?>
                </span>
                <input type="text" class="widefat custom-media-url <?php if($class="repeater_two_overlimit") { echo 'repeater-two-uploading-img';}?> <?php echo esc_attr( $auto );?>" value="<?php echo esc_attr( $value ); ?>">
                <input type="button" class="button button-secondary customizer-repeater-two-custom-media-button <?php if($class="repeater_two_overlimit") { echo 'repeater-two-uploading-img-btn';}?> <?php echo esc_attr( $auto );?>" value="<?php esc_attr_e( 'Upload Image','influence-blog' ); ?>" />
            </div>
            <?php
        }

        private function icon_type_choice( $value = 'customizer_repeater_two_icon', $influence_blog_repeater_two_limit = '' ) {

            ?>
            <span class="customize-control-title">
                <?php esc_html_e('Image type','influence-blog');?>
            </span>
            <select class="customizer-repeater-two-image-choice  <?php echo esc_attr( $influence_blog_repeater_two_limit );?>">
                <option value="customizer_repeater_two_icon" <?php selected( $value,'customizer_repeater_two_icon' ); ?>><?php esc_html_e( 'Icon','influence-blog' ); ?></option>
                <option value="customizer_repeater_two_image" <?php selected( $value,'customizer_repeater_two_image' ); ?>><?php esc_html_e( 'Image','influence-blog' ); ?></option>
                <option value="customizer_repeater_two_none" <?php selected( $value,'customizer_repeater_two_none' ); ?>><?php esc_html_e( 'None','influence-blog' ); ?></option>
            </select>
            <?php
        }

        private function repeater_control( $value = '', $influence_blog_repeater_two_limit = '', $influence_blog_type_with_id = '' ) {

            $social_repeater = array();

            $show_del        = 0;
            ?>
            <span class="customize-control-title"><?php esc_html_e( 'Social icons', 'influence-blog' ); ?></span>
            <?php
            if( !empty( $value ) ) {

                $social_repeater = json_decode( html_entity_decode( $value ), true );
            }
            if ( ( count( $social_repeater ) == 1 && '' === $social_repeater[0] ) || empty( $social_repeater ) ) {

                ?>
                <div class="customizer-repeater-two-social-repeater">
                    <div class="customizer-repeater-two-social-repeater-container">
                        <div class="customizer-repeater-two-rc input-group icp-container">
                            <input data-placement="bottomRight" class="icp icp-auto" value="<?php if(!empty($value)) { echo esc_attr( $value ); } ?>" type="text">
                            <span class="input-group-addon"></span>
                        </div>
                        <?php get_template_part( $this->customizer_icon_container ); ?>
                        <input type="text" class="customizer-repeater-two-social-repeater-link team_linkdata_<?php echo esc_attr( $influence_blog_repeater_two_limit );?> <?php echo esc_attr( $influence_blog_type_with_id );?>"
                               placeholder="<?php esc_attr_e( 'Link', 'influence-blog' ); ?>">
                        <input type="hidden" class="customizer-repeater-two-social-repeater-id" value="">
                        <button class="social-repeater-remove-social-item" style="display:none">
                            <?php esc_html_e( 'Remove Icon', 'influence-blog' ); ?>
                        </button>
                    </div>
                    <input type="hidden" id="social-repeater-socials-repeater-colector" class="social-repeater-socials-repeater-colector" value=""/>
                </div>
                <button class="social-repeater-add-social-item button-secondary "><?php esc_html_e( 'Add Icon', 'influence-blog' ); ?></button>
                <?php

            } else {

                ?>
                <div class="customizer-repeater-two-social-repeater">
                    <?php

                    foreach ( $social_repeater as $social_icon ) {

                        $show_del ++;
                        ?>
                        <div class="customizer-repeater-two-social-repeater-container">
                            <div class="customizer-repeater-two-rc input-group icp-container">
                                <input data-placement="bottomRight" class="icp icp-auto team_data_<?php echo esc_attr( $influence_blog_repeater_two_limit );?> <?php echo esc_attr( $influence_blog_type_with_id );?>" value="<?php if( !empty($social_icon['icon']) ) { echo esc_attr( $social_icon['icon'] ); } ?>" type="text">
                                <span class="input-group-addon"><i class="fa <?php echo esc_attr( $social_icon['icon'] ); ?>"></i></span>
                            </div>
                            <?php get_template_part( $this->customizer_icon_container ); ?>
                            <input type="text" class="customizer-repeater-two-social-repeater-link"
                                   placeholder="<?php esc_attr_e( 'Link', 'influence-blog' ); ?>"
                                   value="<?php if ( ! empty( $social_icon['link'] ) ) {
                                       echo esc_url( $social_icon['link'] );
                                   } ?>">
                            <input type="hidden" class="customizer-repeater-two-social-repeater-id"
                                   value="<?php if ( ! empty( $social_icon['id'] ) ) {
                                       echo esc_attr( $social_icon['id'] );
                                   } ?>">
                            <button class="social-repeater-remove-social-item"
                                    style="<?php if ( $show_del == 1 ) {
                                        echo esc_attr("display:none");
                                    } ?>"><?php esc_html_e( 'Remove Icon', 'influence-blog' ); ?></button>
                        </div>
                        <?php
                    }
                    ?>
                    <input type="hidden" id="social-repeater-socials-repeater-colector"
                           class="social-repeater-socials-repeater-colector"
                           value="<?php echo esc_textarea( html_entity_decode( $value ) ); ?>" />
                </div>
                <button class="social-repeater-add-social-item button-secondary <?php echo esc_attr( $influence_blog_repeater_two_limit ); ?> <?php echo esc_attr( $influence_blog_type_with_id );?>"><?php esc_html_e( 'Add Icon', 'influence-blog' ); ?></button>
                <?php
            }
        }
    }
}

if( !function_exists( 'sanitize_repeater_two' ) ) :
    /**
     * Sanitization callback function for repeater two control.
     */
    function sanitize_repeater_two( $input ) {

        $input_decoded = json_decode( $input, true );

        if( !empty( $input_decoded ) ) {

            foreach ($input_decoded as $boxk => $box ) {

                foreach ($box as $key => $value){

                    $input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );
                }
            }
            return json_encode($input_decoded);
        }
        return $input;
    }
endif;
