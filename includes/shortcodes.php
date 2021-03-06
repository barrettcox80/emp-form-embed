<?php
/**
 * Shortcodes
 */

// EMP Form Shortcode
function empformembed_form_shortcode($atts) {
  $a = shortcode_atts( array(
      'pid' => 0 // Default is 0
  ), $atts );

  ob_start();
  include( plugin_dir_path( __FILE__ ) . 'partials/content-emp_form.php');
  //wp_enqueue_style( 'empformembed_css_reset' );
  wp_enqueue_style( 'empformembed_bootstrap_emp' );
  wp_enqueue_style( 'empformembed_bootstrap_theme_emp' );
  wp_enqueue_style( 'emp' ); 
  return ob_get_clean();
}
add_shortcode( 'empformembed', 'empformembed_form_shortcode' );