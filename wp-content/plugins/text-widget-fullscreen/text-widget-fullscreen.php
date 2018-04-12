<?php
/*
 Plugin Name: Text Widget Fullscreen
 Plugin URI: https://wordpress.org/plugins/text-widget-fullscreen
 Description: This plugin will add a fullscreen button to your Text Widget.
 Version: 1.2
 Author: Alexandru Vornicescu
 Author URI: https://profiles.wordpress.org/alexvorn2
 */
 
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Function on plugin 
function text_widget_fullscreen__activation_action() {
	// Nothing, just because
}

// Function on plugin deactivation
function text_widget_fullscreen__deactivation_action() {
	// Nothing, just because
}

final class text_widget_fullscreen {

	public static function instance() {

		// Store the instance locally to avoid private static replication
		static $instance = null;

		// Only run these methods if they haven't been ran previously
		if ( null === $instance ) {
			$instance = new text_widget_fullscreen;
			$instance->setup_globals();
			$instance->includes();
		}

		// Always return the instance
		return $instance;
	}
	
	private function setup_globals() {

		/** Versions **********************************************************/

		$this->version         = '1.2';

		// Setup some base path and URL information
		$this->file            = __FILE__;
		$this->basename        = plugin_basename( $this->file );
		$this->plugin_dir      = plugin_dir_path( $this->file );
		$this->plugin_url      = plugin_dir_url ( $this->file );

		// Includes
		$this->includes_dir    = trailingslashit( $this->plugin_dir . 'includes'  );
		$this->includes_url    = trailingslashit( $this->plugin_url . 'includes'  );
	}
	
	private function includes() {
		require( $this->plugin_dir . 'actions.php'                                           );
		
		require( $this->includes_dir . 'admin/actions.php'                                   );
		require( $this->includes_dir . 'admin/functions.php'                                 );
	}
}


function text_widget_fullscreen() {
	return text_widget_fullscreen::instance();
}

// Function that will activate our plugin
text_widget_fullscreen();