(function( $ ) {

	wp.customize.bind( 'ready', function() {

		function customizer_label( id, title ) {

			if ( id === 'custom_logo' || id === 'site_icon' || id === 'background_image' || id === 'background_color' ) {
				$( '#customize-control-'+ id ).prepend('<p class="option-group-title customize-control"><strong>'+ title +'</strong></p>');
			} else {
				$( '#customize-control-'+ id ).prepend('<p class="option-group-title customize-control"><strong>'+ title +'</strong></p>');
			}
		}

		// Site Identity
		customizer_label( 'custom_logo', influence_blog.custom_logo );
        
		customizer_label( 'influence_blog_display_top_header_menu', influence_blog.display_top_header_menu );
        
		customizer_label( 'influence_blog_display_home_icon', influence_blog.display_home_icon );
        
		customizer_label( 'influence_blog_banner_category', influence_blog.banner_category );
        
		customizer_label( 'influence_blog_blog_page_grid_two_col_layout_title', influence_blog.blog_page_grid_two_col_layout_title );
		customizer_label( 'influence_blog_blog_page_grid_three_col_layout_title', influence_blog.blog_page_grid_three_col_layout_title );
		customizer_label( 'influence_blog_display_blog_page_pagination', influence_blog.display_blog_page_pagination );
		customizer_label( 'influence_blog_blog_page_sidebar_position', influence_blog.blog_page_sidebar_position );
		customizer_label( 'influence_blog_blog_page_about_info_logo', influence_blog.blog_page_about_info_logo );
        
		customizer_label( 'influence_blog_display_archive_page_category', influence_blog.display_archive_page_category );
		customizer_label( 'influence_blog_archive_page_sidebar_position', influence_blog.archive_page_sidebar_position );
		customizer_label( 'influence_blog_display_search_page_category', influence_blog.display_search_page_category );
        customizer_label( 'influence_blog_search_page_sidebar_position', influence_blog.search_page_sidebar_position );
        
        customizer_label( 'influence_blog_display_single_post_category', influence_blog.display_single_post_category );
        customizer_label( 'influence_blog_display_single_post_author_section', influence_blog.display_single_post_author_section );
        customizer_label( 'influence_blog_display_single_post_related_posts_section', influence_blog.display_single_post_related_posts_section );
        customizer_label( 'influence_blog_display_single_page_posted_date', influence_blog.display_single_page_posted_date );
        
        customizer_label( 'influence_blog_display_breadcrumb', influence_blog.display_breadcrumb );
        
        customizer_label( 'influence_blog_enable_sticky_sidebar', influence_blog.enable_sticky_sidebar );
        
        customizer_label( 'influence_blog_footer_contact_info_title', influence_blog.footer_contact_info_title );
        
		/**
		 *	Toogle Custom Control's Script
		 */

		var customize = this; // Customize object alias.
		// Array with the control names
		// TODO: Replace #CONTROLNAME01#, #CONTROLNAME02# etc with the real control names.
		var toggleControls = [
			'#CONTROLNAME01#',
			'#CONTROLNAME02#'
		];
		$.each( toggleControls, function( index, control_name ) {

			customize( control_name, function( value ) {

				var controlTitle = customize.control( control_name ).container.find( '.customize-control-title' ); // Get control  title.
				// 1. On loading.
				controlTitle.toggleClass( 'disabled-control-title', !value.get() );
				// 2. Binding to value change.
				value.bind( function( to ) {
					controlTitle.toggleClass( 'disabled-control-title', !value.get() );
				} );
			} );
		} );
        
        /**
		 * Slider Custom Control's Script
		 */
		// Set our slider defaults and initialise the slider
		$('.slider-custom-control').each(function(){
			var sliderValue = $(this).find('.customize-control-slider-value').val();
			var newSlider = $(this).find('.slider');
			var sliderMinValue = parseInt(newSlider.attr('slider-min-value'));
			var sliderMaxValue = parseInt(newSlider.attr('slider-max-value'));
			var sliderStepValue = parseInt(newSlider.attr('slider-step-value'));

			newSlider.slider({
				value: sliderValue,
				min: sliderMinValue,
				max: sliderMaxValue,
				step: sliderStepValue,
				change: function(e,ui){
					// Important! When slider stops moving make sure to trigger change event so Customizer knows it has to save the field
					$(this).parent().find('.customize-control-slider-value').trigger('change');
		      }
			});
		});

		// Change the value of the input field as the slider is moved
		$('.slider').on('slide', function(event, ui) {
			$(this).parent().find('.customize-control-slider-value').val(ui.value);
		});

		// Reset slider and input field back to the default value
		$('.slider-reset').on('click', function() {
			var resetValue = $(this).attr('slider-reset-value');
			$(this).parent().find('.customize-control-slider-value').val(resetValue);
			$(this).parent().find('.slider').slider('value', resetValue);
		});

		// Update slider if the input field loses focus as it's most likely changed
		$('.customize-control-slider-value').blur(function() {
			var resetValue = $(this).val();
			var slider = $(this).parent().find('.slider');
			var sliderMinValue = parseInt(slider.attr('slider-min-value'));
			var sliderMaxValue = parseInt(slider.attr('slider-max-value'));

			// Make sure our manual input value doesn't exceed the minimum & maxmium values
			if(resetValue < sliderMinValue) {
				resetValue = sliderMinValue;
				$(this).val(resetValue);
			}
			if(resetValue > sliderMaxValue) {
				resetValue = sliderMaxValue;
				$(this).val(resetValue);
			}
			$(this).parent().find('.slider').slider('value', resetValue);
		});
	});
}) ( jQuery );