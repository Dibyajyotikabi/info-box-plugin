<?php
/*
Plugin Name: Info Box Plugin
Plugin URI: https://github.com/Dibyajyotikabi/info-box-plugin
Description: A simple plugin that adds a shortcode for displaying an information box.
Version: 1.0
Author: Dibyajyoti Kabi
Author URI: https://dibyajyotikabi.com/
*/

// Add the shortcode
function info_box_shortcode($atts, $content = null) {
    return '<div class="info-box">' . do_shortcode($content) . '</div>';
}
add_shortcode('info_box', 'info_box_shortcode');

// Enqueue the stylesheet
function info_box_enqueue_styles() {
    wp_enqueue_style('info-box-style', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'info_box_enqueue_styles');
