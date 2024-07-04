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


// Include additional PHP files
include plugin_dir_path(__FILE__) . 'inc/enqueue-assets.php';
include plugin_dir_path(__FILE__) . 'inc/tab-control.php';
