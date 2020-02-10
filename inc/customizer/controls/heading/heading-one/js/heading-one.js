/**
 * Customizer order control.
 */
( function ( $ ) {
	'use strict';
	wp.HeadingOneAccordion = {
		init: function () {
			this.handleToggle();
		},
		handleToggle: function () {
			$( '.customize-control-heading-one.accordion .customizer-heading-one' ).on( 'click', function () {
				var accordion = $( this ).closest( '.accordion' );
				$( accordion ).toggleClass( 'expanded' );
				return false;
			} );
		},
	};

	$( document ).ready(
		function () {
			wp.HeadingOneAccordion.init();
		}
	);
} )( jQuery );
