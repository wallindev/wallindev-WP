<?php 

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


// Registering scripts and styles for later
function text_widget_fullscreen__register_scripts_and_styles_admin_action() {
	$text_widget_fullscreen                       = text_widget_fullscreen();
	$includes_url                                 = $text_widget_fullscreen->includes_url;
	$version                                      = $text_widget_fullscreen->version;

	
	wp_register_script( 'text-widget-fullscreen-script',               $includes_url . 'admin/js/text-widget-fullscreen-text-widgets.js',     array( 'jquery', 'backbone', 'editor', 'wp-util', 'wp-a11y' ), $version, true );
	wp_register_script( 'text-widget-fullscreen-add-widget-classes',   $includes_url . 'admin/js/text-widget-fullscreen-add-widget-classes.js',     array(), $version, true );
	wp_register_style( 'text-widget-fullscreen-widgets-css',           $includes_url . 'admin/css/widgets.css',                    array(), $version );
	wp_register_style( 'text-widget-fullscreen-customize-css',         $includes_url . 'admin/css/customize.css',                  array(), $version );
}


function text_widget_fullscreen__print_scripts() {
	
	// To be dequeued
	wp_dequeue_script( 'text-widgets' );
	
	
	wp_add_inline_script( 'text-widget-fullscreen-script', 'wp.textWidgets.init();', 'after' );
}

// Function for enqueue styles and scripts in the footer and header for custom pages in WordPress Dashboard
function text_widget_fullscreen__enqueue_style_scripts_by_hook_suffix_action() {
	global $hook_suffix;

	$settings = apply_filters( 'text_widget_fullscreen__enqueue_style_scripts_admin_settings', array() );
	
	if ( ! empty ( $settings ) ) {
		foreach ( (array) $settings as $set ) {
			if ( ! empty ( $set['menu_slug'] ) ) {
				if ( (string) $hook_suffix == (string) $set['menu_slug'] ) {
					if ( ! empty ( $set['scripts'] ) ) {
						foreach ( (array) $set['scripts'] as $script => $k ) {
							wp_enqueue_script( $k );
						}
					}
					if ( ! empty ( $set['styles'] ) ) {
						foreach ( (array) $set['styles'] as $script => $k ) {
							wp_enqueue_style( $k );
						}
					}
				}
			}
		}
	}
}

// List of dashboard pages and what to add
function text_widget_fullscreen__enqueue_style_scripts_admin_settings( $settings_options = array() ) {
	
	// Widgets.php page
	$settings_options[] = array(
		'menu_slug' => 'widgets.php',
		'scripts'   => array(
			'text-widget-fullscreen-script',
			'text-widget-fullscreen-add-widget-classes'
		),
		'styles'   => array(
			'text-widget-fullscreen-widgets-css'
		)
	);
	
	// Customize.php page
	$settings_options[] = array(
		'menu_slug' => 'customize.php',
		'scripts'   => array(
			'text-widget-fullscreen-script',
		),
		'styles'   => array(
			'text-widget-fullscreen-customize-css'
		)
	);
	
	return $settings_options;
}