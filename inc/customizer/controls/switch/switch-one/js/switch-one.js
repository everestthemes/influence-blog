(function( $ ) {

	wp.customize.bind( 'ready', function() {

        //var customize = this; // Customize object alias.

        //Switch Control
        $('body').on('click', '.switch-one', function() {

            var $this = $(this);

            if( $this.hasClass('switch-on') ) {

                $(this).removeClass('switch-on');

                $this.next('input').val( false ).trigger('change');

            } else {

                $(this).addClass('switch-on');

                $this.next('input').val( true ).trigger('change');
            }
        });
	});
}) ( jQuery );
