<?php

/**
 * Enqueue compiled styles and scripts for Custom Tabs WordPress Plugin.
 *
 * @package Custom_Tabs
 * @version 1.0.0
 */


/**
 * Enqueue Custom Tabs assets.
 *
 * Registers and enqueues the minified CSS and JavaScript files for the Custom Tabs plugin.
 *
 * @since 1.0.0
 */
function custom_tabs_enqueue_assets() {
    // Enqueue styles
    wp_enqueue_style(
        'custom-tabs-style', // Handle
        plugin_dir_url(__FILE__) . '../dist/css/style.min.css', // URL
        array(), // Dependencies
        '1.0.0', // Version
        'all' // Media type
    );


    wp_enqueue_style(
        'typekit-fonts',
        'https://p.typekit.net/p.css?s=1&k=wuz0gtr&ht=tk&f=139.175&a=87786064&app=typekit&e=css'
    );



    // Enqueue scripts
    wp_enqueue_script(
        'custom-tabs-script', // Handle
        plugin_dir_url(__FILE__) . '../dist/js/custom-tabs.min.js', // URL
        array('jquery'), // Dependencies
        '1.0.0', // Version
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'custom_tabs_enqueue_assets');
