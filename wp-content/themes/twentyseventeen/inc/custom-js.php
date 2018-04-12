<?php
/**
 * Custom JS files
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @author wallindev
 */

/**
 * Add Custom JS files to the footer.
 */
function twentyseventeen_include_custom_js() {
  // Define Custom JS file.
  $custom_js = get_parent_theme_file_path( '/assets/js/custom.js' );
  $unique_id = uniqid(microtime(true), true);

  // If it exists, include it.
  if ( file_exists( $custom_js ) ) {
    $custom_js_file_code = '<script type="text/javascript" src="' . get_bloginfo('template_directory') . '/assets/js/custom.js' . '?' . $unique_id . '"></script>';

    echo $custom_js_file_code . "\n";
  }
}
add_action( 'wp_footer', 'twentyseventeen_include_custom_js', 9999 );
