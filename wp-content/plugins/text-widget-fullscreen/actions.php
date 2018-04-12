<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


$text_widget_fullscreen = text_widget_fullscreen();
$plugin_file = $text_widget_fullscreen->file;

// Plugin Activation
register_activation_hook( $plugin_file,                               'text_widget_fullscreen__activation_action'                          );

// Plugin Deactivation
register_deactivation_hook( $plugin_file,                             'text_widget_fullscreen__deactivation_action'                        );