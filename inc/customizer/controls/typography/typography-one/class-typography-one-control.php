<?php

if( ! class_exists( 'Influence_Blog_Typography_One_Control' ) ) :

    /**
	 * Typography One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Influence_Blog_Typography_One_Control extends WP_Customize_Control {

        /**
         * The type of control being rendered
         */
        public $type = 'typo-one';
        /**
         * The list of Google Fonts
         */
        private $fontList = false;
        /**
         * The saved font values decoded from json
         */
        private $fontValues = [];
        /**
         * The index of the saved font within the list of Google fonts
         */
        private $fontListIndex = 0;
        /**
         * The number of fonts to display from the json file. Either positive integer or 'all'. Default = 'all'
         */
        private $fontCount = 'all';
        /**
         * The font list sort order. Either 'alpha' or 'popular'. Default = 'alpha'
         */
        private $fontOrderBy = 'alpha';

        /**
         * Get our list of fonts from the json file
         */
        public function __construct( $manager, $id, $args = array(), $options = array() ) {

            parent::__construct( $manager, $id, $args );

            // Get the font sort order
            if ( isset( $this->input_attrs['orderby'] ) && strtolower( $this->input_attrs['orderby'] ) === 'popular' ) {
                $this->fontOrderBy = 'popular';
            }

            // Get the list of Google fonts
            if ( isset( $this->input_attrs['font_count'] ) ) {
                if ( 'all' != strtolower( $this->input_attrs['font_count'] ) ) {
                    $this->fontCount = ( abs( (int) $this->input_attrs['font_count'] ) > 0 ? abs( (int) $this->input_attrs['font_count'] ) : 'all' );
                }
            }

            $this->fontList = $this->typography_one_getGoogleFonts( 'all' );

            // Decode the default json font value
            $this->fontValues = json_decode( $this->value() );

            // Find the index of our default font within our list of Google fonts
            $this->fontListIndex = $this->typography_one_getFontIndex( $this->fontList, $this->fontValues->font );
        }

        /**
         * Enqueue our scripts and styles
         */
        public function enqueue() {

            $control_dir = trailingslashit( get_template_directory_uri() ) . 'inc/customizer/controls/typography/typography-one/';

            wp_enqueue_script( 'influence-blog-typography-one-script', $control_dir . 'js/typography-one.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
            wp_enqueue_style( 'influence-blog-typography-one-style', $control_dir . 'css/typography-one.css', array(), wp_get_theme()->get( 'Version' ), 'all' );

            wp_enqueue_script( 'influence-blog-typography-one-font-control-script', $control_dir . 'font-control.js', array( 'influence-blog-typography-one-script' ), wp_get_theme()->get( 'Version' ), true );

            $fontFile = $control_dir . 'google-fonts-alphabetical.json';

            wp_localize_script('influence-blog-typography-one-font-control-script', 'typoOne', array(

                    'nonce'    => wp_create_nonce( 'typoOne' ),
                    'font_url' => $fontFile
                 )
            );
        }
        /**
         * Export our List of Google Fonts to JavaScript
         */
        public function to_json() {

            parent::to_json();
            $this->json['typoonefontslist'] = $this->fontList;
        }

        /**
         * Render the control in the customizer
         */
        public function render_content() {

            $fontCounter = 0;
            $isFontInList = false;
            $fontListStr = '';
            // print_r($this->fontList);
            if( !empty($this->fontList) ) {
                ?>
                <div class="typo_one_select_control">
                    <?php if( !empty( $this->label ) ) { ?>
                        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <?php } ?>
                    <?php if( !empty( $this->description ) ) { ?>
                        <span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
                    <?php } ?>
                    <input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-typo-one-selection" <?php $this->link(); ?> />
                    <div class="google-fonts">
                        <select class="typo-one-list" control-name="<?php echo esc_attr( $this->id ); ?>">
                            <?php
                                foreach( $this->fontList as $key => $value ) {
                                    $fontCounter++;
                                    $fontListStr .= '<option value="' . $value->family . '" ' . selected( $this->fontValues->font, $value->family, false ) . '>' . $value->family . '</option>';
                                    if ( $this->fontValues->font === $value->family ) {
                                        $isFontInList = true;
                                    }
                                    if ( is_int( $this->fontCount ) && $fontCounter === $this->fontCount ) {
                                        break;
                                    }
                                }
                                if ( !$isFontInList && $this->fontListIndex ) {
                                    // If the default or saved font value isn't in the list of displayed fonts, add it to the top of the list as the default font
                                    $fontListStr = '<option value="' . $this->fontList[$this->fontListIndex]->family . '" ' . selected( $this->fontValues->font, $this->fontList[$this->fontListIndex]->family, false ) . '>' . $this->fontList[$this->fontListIndex]->family . ' (default)</option>' . $fontListStr;
                                }
                                // Display our list of font options
                                echo wp_kses( $fontListStr, array(
                                        'option' => array(
                                            'value' => array(),
                                            'selected' => array(),
                                        ),
                                    )
                                );
                            ?>
                        </select>
                    </div>

                    <div class="weight-style variants">
                        <div class="customize-control-title typo"><?php echo esc_html__( 'Select Variants', 'influence-blog' ); ?></div>
                        <select class="typo-one-variantlist" multiple>
                            <?php
                                $italiCount = 0;
                                foreach( $this->fontList[$this->fontListIndex]->variants as $key => $value ) {

                                    $variants = isset( $this->fontValues->variantlist[0] ) ? $this->fontValues->variantlist[0] : '';
                                    $variants1 = isset( $this->fontValues->variantlist[1] ) ? $this->fontValues->variantlist[1] : '';
                                    $variants2 = isset( $this->fontValues->variantlist[2] ) ? $this->fontValues->variantlist[2] : '';
                                    $variants3 = isset( $this->fontValues->variantlist[3] ) ? $this->fontValues->variantlist[3] : '';
                                    $variants4 = isset( $this->fontValues->variantlist[4] ) ? $this->fontValues->variantlist[4] : '';
                                    $variants5 = isset( $this->fontValues->variantlist[5] ) ? $this->fontValues->variantlist[5] : '';
                                    $variants6 = isset( $this->fontValues->variantlist[6] ) ? $this->fontValues->variantlist[6] : '';
                                    $variants7 = isset( $this->fontValues->variantlist[7] ) ? $this->fontValues->variantlist[7] : '';
                                    $variants8 = isset( $this->fontValues->variantlist[8] ) ? $this->fontValues->variantlist[8] : '';
                                    $variants9 = isset( $this->fontValues->variantlist[9] ) ? $this->fontValues->variantlist[9] : '';
                                    $variants10 = isset( $this->fontValues->variantlist[10] ) ? $this->fontValues->variantlist[10] : '';

                                    $selected = '';

                                    if ( $value === $variants || $value === $variants1 || $value === $variants2 || $value === $variants3 ||
                                         $value === $variants4 || $value === $variants5 || $value === $variants6 || $value === $variants7 ||
                                        $value === $variants8 || $value === $variants9 || $value === $variants10 ) {
                                             $selected = ' selected="selected"';
                                         }

                                            echo '<option value="' . esc_attr( $value ) . '" ' . $selected . '>' . esc_attr( $value ) . '</option>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

                                }
                            ?>
                        </select>
                    </div>
                    <div class="weight-style weight">
                        <div class="customize-control-title typo"><?php echo esc_html__( 'Font Weight', 'influence-blog' ); ?></div>
                        <select class="typo-one-fontweight-style">
                            <?php
                                $optionCount = 0;
                                foreach( $this->fontList[$this->fontListIndex]->variants as $key => $value ) {
                                    // Only add options that aren't italic
                                    if( strpos( $value, 'italic' ) === false ) {
                                        echo '<option value="' . esc_attr( $value ) . '" ' . selected( $this->fontValues->fontweight, $value, false ) . '>'
                                        . esc_attr( $value ) . '</option>';
                                        $optionCount++;
                                    }
                                }
                                // This should never evaluate as there'll always be at least a 'regular' weight
                                if( $optionCount == 0 ) {
                                    echo '<option value="">Not Available for this font</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <input type="hidden" class="typo-one-category" value="<?php echo esc_attr( $this->fontValues->category ); ?>">
                </div>
                <?php
            }
        }

        /**
         * Find the index of the saved font in our multidimensional array of Google Fonts
         */
        public function typography_one_getFontIndex( $haystack, $needle ) {
            if ( is_array( $haystack ) || is_object( $haystack ))
            {
                foreach( $haystack as $key => $value ) {
                    if( $value->family == $needle ) {
                        return $key;
                    }
                }
            }

            return false;
        }

        /**
         * Return the list of Google Fonts from our json file. Unless otherwise specfied, list will be limited to 30 fonts.
         */
        public function typography_one_getGoogleFonts( $count = 30 ) {

            $control_dir = trailingslashit( get_template_directory_uri() ) . 'inc/customizer/controls/typography/typography-one/';
            // Google Fonts json generated from https://www.googleapis.com/webfonts/v1/webfonts?sort=popularity&key=YOUR-API-KEY
            $fontFile = $control_dir . 'google-fonts-alphabetical.json';
            if ( $this->fontOrderBy === 'popular' ) {
                $fontFile = $control_dir . 'google-fonts-popularity.json';
            }
            $request = wp_remote_get( $fontFile );
            if( is_wp_error( $request ) ) {
                return '';
                // print_r($request);
            }
            $body = wp_remote_retrieve_body( $request );
            $content = json_decode( $body );
            if( $count == 'all' ) {
                return $content->items;
            } else {
                return array_slice( $content->items, 0, $count );
            }
        }
    }
endif;

if( !function_exists( 'sanitize_typography_one' ) ) :
    /**
     * Sanitization callback function for typography one control.
     */
    function sanitize_typography_one( $input ) {

        $val =  json_decode( $input, true );

		if( is_array( $val ) ) {

			foreach ( $val as $key => $value ) {

				$val[$key] = $value;
			}

			$input = json_encode( $val );
		}

		else {

			$input = json_encode( sanitize_text_field( $val ) );

		}
		return $input;
    }
endif;
