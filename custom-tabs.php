<?php

/**
 * Plugin Name: Custom Tabs
 * Plugin URI: https://github.com/danimatuko/custom-tabs
 * Description: A simple plugin to add custom tabs.
 * Version: 1.0
 * Author: Dani Matuko
 * Author URI: https://github.com/danimatuko/
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
// Enqueue compiled styles and scripts for Custom Tabs WordPress Plugin
function enqueue_custom_tabs_assets() {
    // Enqueue styles
    wp_enqueue_style('custom-tabs-style', plugin_dir_url(__FILE__) . 'dist/css/style.min.css', array(), '1.0.0', 'all');

    // Enqueue scripts
    wp_enqueue_script('custom-tabs-script', plugin_dir_url(__FILE__) . 'dist/js/custom-tabs.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_tabs_assets');
