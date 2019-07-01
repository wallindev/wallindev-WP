<?php
/**
 * Custom CSS files
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @author wallindev
 */

/**
 * Add Custom CSS files to the footer.
 */
function twentyseventeen_include_custom_css() {
  // Define Custom CSS file.
  $custom_css = get_parent_theme_file_path( '/assets/css/custom.css' );
  $unique_id = uniqid(microtime(true), true);

  // If it exists, include it.
  if ( file_exists( $custom_css ) ) {
    $custom_css_file_code = '<link rel="stylesheet" href="' . get_bloginfo('template_directory') . '/assets/css/custom.css' . '?' . $unique_id . '" type="text/css" media="screen" />';

    echo $custom_css_file_code . "\n";
  }
}
add_action( 'wp_footer', 'twentyseventeen_include_custom_css', 999999 );
