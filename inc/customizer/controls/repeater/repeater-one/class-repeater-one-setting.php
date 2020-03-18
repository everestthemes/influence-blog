<?php

if ( ! class_exists( 'Influence_Blog_Repeater_One_Setting' ) ) {
	/**
	 * Repeater One Custom Setting Class
	 *
	 * All section widgets can extend this class
	 *
	 * @since 1.0.0
	 */
	class Influence_Blog_Repeater_One_Setting extends WP_Customize_Setting {

		/**
		 * Constructor.
		 *
		 * Any supplied $args override class property defaults.
		 *
		 * @access public
		 * @param WP_Customize_Manager $manager The WordPress WP_Customize_Manager object.
		 * @param string               $id       A specific ID of the setting. Can be a theme mod or option name.
		 * @param array                $args     Setting arguments.
        */
		public function __construct( $manager, $id, $args = array() ) {

			parent::__construct( $manager, $id, $args );

			// Will onvert the setting from JSON to array. Must be triggered very soon.
			add_filter( "customize_sanitize_{$this->id}", array( $this, 'sanitize_repeater_one' ), 10, 1 );
		}

		/**
		 * Fetch the value of the setting.
		 *
		 * @access public
		 * @return mixed The value.
        */
		public function value() {

			$value = parent::value();

			if ( ! is_array( $value ) ) {

				$value = array();
			}
			return $value;
		}

		/**
		 * Convert the JSON encoded setting coming from Customizer to an Array.
		 *
		 * @access public
		 * @param string $value URL Encoded JSON Value.
		 * @return array
        */
		public static function sanitize_repeater_one( $value ) {

            if ( ! is_array( $value ) ) {

				$value = json_decode( urldecode( $value ) );
			}

			$sanitized = ( empty( $value ) || ! is_array( $value ) ) ? array() : $value;

			// Make sure that every row is an array, not an object.
			foreach ( $sanitized as $key => $_value ) {

				if ( empty( $_value ) ) {

					unset( $sanitized[ $key ] );

				} else {

					$sanitized[ $key ] = (array) $_value;
				}
			}

			// Reindex array.
			$sanitized = array_values( $sanitized );

			return $sanitized;
		}
	}
}
