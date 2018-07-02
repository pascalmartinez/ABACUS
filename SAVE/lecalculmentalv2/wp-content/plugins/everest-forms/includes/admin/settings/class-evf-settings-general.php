<?php
/**
 * EverestForms General Settings
 *
 * @author      WPEverest
 * @category    Admin
 * @package     EverestForms/Admin
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'EVF_Settings_General', false ) ) :

	/**
	 * EVF_Admin_Settings_General.
	 */
	class EVF_Settings_General extends EVF_Settings_Page {

		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->id    = 'general';
			$this->icon  = 'dashicons dashicons-admin-settings';
			$this->label = __( 'General', 'everest-forms' );

			parent::__construct();
		}

		/**
		 * Get settings array.
		 *
		 * @return array
		 */
		public function get_settings() {

			$settings = apply_filters(
				'everest_forms_general_settings', array(
					array(
						'title' => __( 'General Options', 'everest-forms' ),
						'type'  => 'title',
						'desc'  => '',
						'id'    => 'general_options',
					),
					array(
						'title'    => __( 'Disable User Details', 'everest-forms' ),
						'desc'     => __( 'Disable storing the IP address and User Agent on all forms.', 'everest-forms' ),
						'id'       => 'everest_forms_disable_user_details',
						'default'  => 'no',
						'type'     => 'checkbox',
					),
					array(
						'type' => 'sectionend',
						'id'   => 'general_options',
					),
				)
			);
			return apply_filters( 'everest_forms_get_settings_' . $this->id, $settings );
		}

		/**
		 * Save settings.
		 */
		public function save() {
			$settings = $this->get_settings();

			EVF_Admin_Settings::save_fields( $settings );
		}
	}

endif;

return new EVF_Settings_General();
