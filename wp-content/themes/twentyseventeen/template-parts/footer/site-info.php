<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
  <?php
    echo ( '&copy; ' . esc_attr( date_i18n( 'Y' ) ) . ' ' . esc_attr( get_bloginfo( 'name', 'display' ) ) );
    echo ( ' | ' );
    echo ( 'Web: <a href="' . esc_url( home_url( '/' ) ) . '">' . esc_attr( str_replace( 'http://', '', get_bloginfo( 'url', 'display' ) ) ) . '</a>' );
    echo ( ' | ' );
    echo ( 'Email: <a href="mailto:info@wallindev.se">info@wallindev.se</a>' );
  ?>

<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a> -->
</div><!-- .site-info -->
