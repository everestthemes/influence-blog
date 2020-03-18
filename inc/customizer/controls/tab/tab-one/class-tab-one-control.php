<?php

if( ! class_exists( 'Tab_One_Control' ) ) :
    /**
	 * Tab One Custom Control Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
    class Tab_One_Control extends WP_Customize_Control {

        /**
         * The type of customize control being rendered.
         *
         * @since 1.1.45
         * @var   string
         */
        public $type = 'tab-one';

        /**
         * The tabs with keys of the controls that are under each tab.
         *
         * @since 1.1.45
         * @var array
         */
        public $tabs;

        /**
         * Controls from tabs.
         *
         * @var array
         */
        public $controls;

        /**
         * Enqueue control related scripts/styles.
         *
         * @access public
         */
        public function enqueue() {

            wp_enqueue_style( 'influence-blog-customizer-tab-one-style', get_template_directory_uri() . '/inc/customizer/controls/tab/tab-one/css/tab-one.css' );

            wp_enqueue_script( 'influence-blog-customizer-tab-one-script', get_template_directory_uri() . '/inc/customizer/controls/tab/tab-one/js/tab-one.js', array( 'jquery', 'customize-base' ), wp_get_theme()->get( 'Version' ) , true );
        }

        /**
         * Add custom JSON parameters to use in the JS template.
         *
         * @return array
         */
        public function json() {
            $json             = parent::json();
            $json['tabs']     = $this->tabs;
            $json['controls'] = $this->controls;
            return $json;
        }

        /**
         * Underscore JS template to handle the control's output.
         *
         * @return void
         */
        public function content_template() {
            ?>
            <# if ( ! data.tabs ) { return; } #>

            <div class="tab-one-control" id="">
            <# var i = 1;
                for( tab in data.tabs) { #>
                    <#
                    var allControlsInTabs = ''
                    _.each( data.controls[tab], function( val, key ) {
                        allControlsInTabs+= key + ' '
                        if(val){
                            var allvals = Object.keys(val).map(function(e) {
                                return val[e]
                            });
                            allvals = _.uniq(_.flatten(allvals))
                            allvals = allvals.join(' ')
                            allControlsInTabs += allvals
                        }
                    });
                    #>
                <div class="customizer-tab-one <# if( i === 1 ){#> active <#}#>" data-tab="{{tab}}">
                    <label class="{{allControlsInTabs}}">
                        <i class="dashicons dashicons-{{data.tabs[tab]['icon']}}"></i>
                        {{data.tabs[tab]['label']}}
                    </label>
                </div>
            <# i++;} #>
            </div>


            <?php
        }
    }
endif;
