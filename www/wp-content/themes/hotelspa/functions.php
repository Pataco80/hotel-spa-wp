<?php
// function for styles template and scripts
function hotelspa_styles() {
  // Foundation Styles
  // Foundation site app.css
  wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', '1.0.0');
  // Foundation icons.css
  wp_enqueue_style('foundation-icons', get_template_directory_uri() . '/css/foundation-icons.css', '1.0.0');
  
  // Foundation Scripts
  // Foundation site jquery.min.js
  wp_enqueue_script('jquery');
  // Foundation site what-input.min.js
  wp_enqueue_script('what-input', get_template_directory_uri() . '/js/what-input.min.js', array('jquery'), '6.3.1', true);
  // Foundation site foundation.min.js
  wp_enqueue_script('foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '6.3.1', true);
}

add_action('wp_enqueue_scripts', 'hotelspa_styles');
?>