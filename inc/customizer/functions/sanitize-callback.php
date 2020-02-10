<?php
/**
 * Collection of functions to sanitize customizer field values.
 *
 * @package Influence_Blog
 */

if ( !function_exists('influence_blog_sanitize_select') ) {
    /**
     * Sanitization callback function for select field.
     */
    function influence_blog_sanitize_select( $input, $setting ) {

        $input = sanitize_key( $input );
        
        $choices = $setting->manager->get_control( $setting->id )->choices;
        
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
}
