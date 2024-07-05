<?php


function custom_tabs_shortcode($atts, $content = null) {
    // Retrieve settings
    $options = get_option('custom_tabs_settings');

    // Output the HTML structure
    ob_start();
?>
<div class="tabs-container">

    <div class="tabs">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
        <?php if (!empty($options['tab' . $i . '_title']) && !empty($options['tab' . $i . '_content'])) : ?>
        <div class="tab">
            <button class="tablinks <?php echo $i === 1 ? 'active' : ''; ?>"
                onclick="openTab(event, 'tab<?php echo $i; ?>')">
                <?php echo esc_html($options['tab' . $i . '_title']); ?>
            </button>
        </div>
        <?php endif; ?>
        <?php endfor; ?>
    </div>
    <div class="div">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
        <?php if (!empty($options['tab' . $i . '_title']) && !empty($options['tab' . $i . '_content'])) : ?>
        <div id="tab<?php echo $i; ?>" class="tabcontent <?php echo $i === 1 ? 'active' : ''; ?>">
            <h3><?php echo esc_html($options['tab' . $i . '_title']); ?></h3>
            <p><?php echo wp_kses_post($options['tab' . $i . '_content']); ?></p>
        </div>
        <?php endif; ?>
        <?php endfor; ?>
    </div>

    <picture class="logos">
        <source srcset="<?php echo plugin_dir_url(__FILE__) . '../src/img/logos-large.png'; ?>"
            media="(min-width: 800px)" style="width:947px">
        <source srcset="<?php echo plugin_dir_url(__FILE__) . '../src/img/logos-small.png'; ?>"
            media="(max-width: 799px)">
        <img src="<?php echo plugin_dir_url(__FILE__) . '../src/img/logos-small.png'; ?>" alt="Logo">
    </picture>

</div>
<?php
    return ob_get_clean();
}
add_shortcode('custom_tabs', 'custom_tabs_shortcode');
?>