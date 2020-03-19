( function( $ ){

	jQuery( document ).ready( function() {
        
        /**
         * Function for image upload in admin
         */
        function media_upload( button_class ) {

            var _custom_media = false,

            _orig_send_attachment = wp.media.editor.send.attachment;

            jQuery('body').on( 'click', button_class, function(e) {

                var currentBtn = jQuery( this );

                var button_id ='#'+jQuery(this).attr('id');

                var self = jQuery(button_id);

                var send_attachment_bkp = wp.media.editor.send.attachment;

                var button = jQuery(button_id);

                var id = button.attr('id').replace('_button', '');

                _custom_media = true;

                wp.media.editor.send.attachment = function(props, attachment){

                    if ( _custom_media  ) {

                        currentBtn.parent( '.image-uploader-container' ).find( '.upload-image-url-holder' ).val(attachment.url).trigger('change');

                        currentBtn.parent( '.image-uploader-container' ).find( '.upload-image-holder' ).css( 'background-image', 'url('+attachment.url+')' );

                        currentBtn.parent( '.image-uploader-container' ).find( '.remove-btn' ).removeClass( 'btn-hide' ).addClass( 'btn-show' );

                        currentBtn.removeClass( 'btn-show' ).addClass( 'btn-hide' );

                    } else {

                        return _orig_send_attachment.apply( button_id, [props, attachment] );
                    }
                }

                wp.media.editor.open(button);

                return false;
            });
        }

        media_upload('.upload-btn');

        jQuery( 'body' ).on( 'click', '.remove-btn', function(e) {

            e.preventDefault();

            jQuery( this ).parent( '.image-uploader-container' ).find( '.upload-image-url-holder' ).val('').trigger('change');

            jQuery( this ).parent( '.image-uploader-container' ).find( '.upload-image-holder' ).css( 'background-image', 'url()' );

            jQuery( this ).parent( '.image-uploader-container' ).find( '.upload-btn' ).removeClass( 'btn-hide' ).addClass( 'btn-show' );

            jQuery( this ).removeClass( 'btn-show' ).addClass( 'btn-hide' );
        } );
        
        /**
         * Image selector in widget
         *
         */
        $('body').on('click','.selector-labels label', function(){
            var $this = $(this);
            var value = $this.attr('data-val');
            $this.siblings().removeClass('selector-selected');
            $this.addClass('selector-selected');
            $this.closest('.selector-labels').next('input').val(value).trigger('change');
        });

	} );
} ) ( jQuery );
