jQuery( document ).ready(function($) {
	"use strict";

    /**
     * Googe Font Select Custom Control
     *
     * @author Anthony Hortin <http://maddisondesigns.com>
     * @license http://www.gnu.org/licenses/gpl-2.0.html
     * @link https://github.com/maddisondesigns
     */
    $('.typo-one-list').each(function (i, obj) {

        if ( !$(obj).hasClass('select2-hidden-accessible') ) {

            new SlimSelect({
	            select: obj,
				// selectByGroup: true,
				searchingText: 'Searching...',
				placeholder: 'Search for Fonts',
				onChange: ( selectedFont ) => {
					// console.log( selectedFont )

					var variantSelector = $(this).closest('.typo_one_select_control').find('.weight-style.variants');
					var systemFonts = ['Arial', 'Helvetica', 'Verdana', 'Tahoma', 'Georgia', 'Times New Roman'];

					if ( systemFonts.indexOf( selectedFont["value"] ) > -1 ) {
						$(variantSelector).hide();
					} else {
						$(variantSelector).show();

					}
				},
				ajax: function ( search, callback ) {

				var fontFile = typoOne.font_url ? typoOne.font_url : null;

				//start ajax search if font file exists
				if ( fontFile ) {
				    // Check search value. If you dont like it callback(false) or callback('Message String')
				    if (search.length < 3) {
				      callback('Enter 3 characters for the font')
					  // return
				    }

				    // Perform your own ajax request here
				    fetch( fontFile )
				    .then(function (response) {
				      return response.json()

				    })
				    .then(function (json) {
				      let data = [
				        { text: 'Arial' },
				        { text: 'Helvetica' },
				        { text: 'Verdana' },
				        { text: 'Tahoma' },
				        { text: 'Georgia' },
				        { text: 'Times New Roman' },
					  ];
					  // let data = []

				      for (let i = 0; i < json.length; i++) {
				        data.push({text: json[i].family})
				      }

				      // Upon successful fetch send data to callback function.
				      // Be sure to send data back in the proper format.
				      // Refer to the method setData for examples of proper format.
				      callback(data)
				    })
				    .catch(function(error) {
				      // If any erros happened send false back through the callback
				      callback(false)
					  console.log ('sicti');
				    })
				}

				}
            })

        }
    });



    $('.typo-one-variantlist').each(function (i, obj) {


        var variantSelector = new SlimSelect({
          select: obj,
	  	});

		var parentSelector = $(this).closest('.typo_one_select_control').find('.typo-one-list');


		$( parentSelector ).on('change', function() {



			var selectedFont = $(this).val();
			var customizerControlName = $(this).attr('control-name');



			// Get the Google Fonts control object
			var bodyfontcontrol = _wpCustomizeSettings.controls[customizerControlName];

			if ( typeof bodyfontcontrol !== 'undefined' ) {
				// Find the index of the selected font
				var indexes = $.map(bodyfontcontrol.typoonefontslist, function(obj, index) {
					if(obj.family === selectedFont) {
						return index;
					}
				});
				var index = indexes[0];

			// console.log (bodyfontcontrol.typoonefontslist[index].variants);
				var items = bodyfontcontrol.typoonefontslist[index].variants;

				var texting = items.map(function(item) {
					var list;
					var italic = item.includes("italic");

					// if ( ! italic ) {
						list = { text: item }
					// }


					return list;
				});

				variantSelector.setData( texting );
			}

			variantSelector.set('regular')



		});

    });

    $('.typo-one-list').on('change', function() {

		var elementFontWeight = $(this).parent().parent().find('.typo-one-fontweight-style');

        var selectedFont = $(this).val();
        var customizerControlName = $(this).attr('control-name');

		// Clear Weight/Style dropdowns
		elementFontWeight.empty();
		elementFontWeight.append(
			$('<option></option>').val('regular').html('regular')
		);

        // Get the Google Fonts control object
        var bodyfontcontrol = _wpCustomizeSettings.controls[customizerControlName];

        // Find the index of the selected font
		if ( typeof bodyfontcontrol !== 'undefined' ) {

			var indexes = $.map(bodyfontcontrol.typoonefontslist, function(obj, index) {
				if(obj.family === selectedFont) {
					return index;
				}
			});
			var index = indexes[0];

			// For the selected Google font show the available weight/style variants
			$.each(bodyfontcontrol.typoonefontslist[index].variants, function(val, text) {

				if ( ! ~text.indexOf("italic") && ! ~text.indexOf("regular") ) {
					elementFontWeight.append(
						$('<option></option>').val(text).html(text)
					);
				}
			});
			// Update the font category based on the selected font
			$(this).parent().parent().find('.typo-one-category').val(bodyfontcontrol.typoonefontslist[index].category);

		}






        skyrocketGetAllSelects($(this).parent().parent());
    });

    $('.typo_one_select_control select').on('change', function() {
        skyrocketGetAllSelects($(this).parent().parent());
    });

    function skyrocketGetAllSelects($element) {

        var selectedFont = {
            font: $element.find('.typo-one-list').val(),
			fontweight: $element.find('.typo-one-fontweight-style').val(),
            variantlist: $element.find('.typo-one-variantlist').val(),
            category: $element.find('.typo-one-category').val(),
        };

        // Important! Make sure to trigger change event so Customizer knows it has to save the field
        $element.find('.customize-control-typo-one-selection').val(JSON.stringify(selectedFont)).trigger('change');
    }

});
