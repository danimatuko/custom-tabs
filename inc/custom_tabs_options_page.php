<?php
// Create a top-level menu
function custom_tabs_menu() {
    add_menu_page(
        'Custom Tabs Settings',
        'Custom Tabs',
        'manage_options',
        'custom-tabs',
        'custom_tabs_options_page',
        'dashicons-admin-generic', // Icon for the menu
        6 // Position in the menu
    );
}
add_action('admin_menu', 'custom_tabs_menu');

// Render the options page
function custom_tabs_options_page() {
?>
    <div class="wrap">
        <h1>Custom Tabs Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom_tabs_settings_group');
            do_settings_sections('custom-tabs');
            submit_button();
            ?>
        </form>
    </div>
<?php
}
?>


<?php
// Register settings and fields
function custom_tabs_register_settings() {
    register_setting('custom_tabs_settings_group', 'custom_tabs_settings');

    add_settings_section(
        'custom_tabs_section',
        'Tabs Content',
        'custom_tabs_section_callback',
        'custom-tabs'
    );

    for ($i = 1; $i <= 6; $i++) {
        add_settings_field(
            'tab' . $i . '_title',
            'Tab ' . $i . ' Title',
            'custom_tabs_title_callback',
            'custom-tabs',
            'custom_tabs_section',
            array('label_for' => 'tab' . $i . '_title', 'tab_index' => $i)
        );

        add_settings_field(
            'tab' . $i . '_content',
            'Tab ' . $i . ' Content',
            'custom_tabs_content_callback',
            'custom-tabs',
            'custom_tabs_section',
            array('label_for' => 'tab' . $i . '_content', 'tab_index' => $i)
        );
    }
}
add_action('admin_init', 'custom_tabs_register_settings');

function custom_tabs_section_callback() {
    echo 'Enter the content for each tab below:';
}

function custom_tabs_title_callback($args) {
    $options = get_option('custom_tabs_settings');
    $tab_index = $args['tab_index'];
    echo '<input type="text" id="tab' . $tab_index . '_title" name="custom_tabs_settings[tab' . $tab_index . '_title]" value="' . esc_attr($options['tab' . $tab_index . '_title'] ?? '') . '" />';
}

function custom_tabs_content_callback($args) {
    $options = get_option('custom_tabs_settings');
    $tab_index = $args['tab_index'];
    echo '<textarea id="tab' . $tab_index . '_content" name="custom_tabs_settings[tab' . $tab_index . '_content]" rows="5" cols="50">' . esc_textarea($options['tab' . $tab_index . '_content'] ?? '') . '</textarea>';
}
?>