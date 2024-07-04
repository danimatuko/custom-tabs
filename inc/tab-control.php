<?php


function custom_tabs_shortcode_function($atts, $content = null) {
    // Output the HTML structure
    ob_start();
?>
    <div class="tabs">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tab1')">Tab 1</button>
        </div>
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'tab2')">Tab 2</button>
        </div>
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'tab3')">Tab 3</button>
        </div>
    </div>

    <div id="tab1" class="tabcontent active">
        <h3>Tab 1 Content</h3>
        <p>This is the content of Tab 1.</p>
    </div>

    <div id="tab2" class="tabcontent">
        <h3>Tab 2 Content</h3>
        <p>This is the content of Tab 2.</p>
    </div>

    <div id="tab3" class="tabcontent">
        <h3>Tab 3 Content</h3>
        <p>This is the content of Tab 3.</p>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('custom_tabs', 'custom_tabs_shortcode_function');
