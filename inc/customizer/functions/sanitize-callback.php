<?php
/**
 * Collection of functions to sanitize customizer field values.
 *
 * @package Influence_Blog
 */

/**
 * Sanitization callback function for number field with value in range.
 */
if ( ! function_exists( 'influence_blog_sanitize_range' ) ) {

    function influence_blog_sanitize_range( $input, $setting ) {

        if(  $input <= $setting->manager->get_control( $setting->id )->input_attrs['max'] ) {

            if( $input >= $setting->manager->get_control( $setting->id )->input_attrs['min'] ) {

                return absint( $input );
            }
        }
    }
}

/**
 * Sanitization callback function for number field.
 */
if ( ! function_exists( 'influence_blog_sanitize_number' ) ) {

    function influence_blog_sanitize_number( $input, $setting ) {

        return absint( $input );
    }
}

/**
 * Sanitization callback function for select field.
 */
if ( !function_exists('influence_blog_sanitize_select') ) {

    function influence_blog_sanitize_select( $input, $setting ) {

        $input = sanitize_key( $input );
        
        $choices = $setting->manager->get_control( $setting->id )->choices;
        
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
}

if ( ! function_exists( 'influence_blog_sanitize_image' ) ) :
	/**
	 * Image sanitization callback example.
	 *
	 * Checks the image's file extension and mime type against a whitelist. If they're allowed,
	 * send back the filename, otherwise, return the setting default.
	 *
	 * - Sanitization: image file extension
	 * - Control: text, WP_Customize_Image_Control
	 *
	 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
	 *
	 * @param string               $image   Image filename.
	 * @param WP_Customize_Setting $setting Setting instance.
	 * @return string The image filename if the extension is allowed; otherwise, the setting default.
	 */
	function influence_blog_sanitize_image( $image, $setting ) {
		/*
		 * Array of valid image file types.
		 *
		 * The array includes image mime types that are included in wp_get_mime_types()
		 */
	    $mimes = array(
	        'jpg|jpeg|jpe' => 'image/jpeg',
	        'gif'          => 'image/gif',
	        'png'          => 'image/png',
	        'bmp'          => 'image/bmp',
	        'tif|tiff'     => 'image/tiff',
	        'ico'          => 'image/x-icon'
	    );
		// Return an array with file extension and mime_type.
	   $file = wp_check_filetype( $image, $mimes );
		// If $image has a valid mime_type, return it; otherwise, return the default.
	   return ( $file['ext'] ? $image : $setting->default );
	}
endif;

/**
 * Sanitization Function - Copyright & Credit
 *
 * @param $input
 * @return sanitized output
 *
 */
if ( !function_exists('influence_blog_sanitize_copyright_credit') ) :

    function influence_blog_sanitize_copyright_credit( $input ) {

        $allowed_tags = array(
            'a' => array(
                'href' => array(),
                'title' => array(),
                '_target' => array(),
            ),
            'span' => array(),
        );

        return wp_kses( $input, $allowed_tags );
    }
    
endif;