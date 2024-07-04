<?php


function custom_tabs_shortcode_function($atts, $content = null) {
    // Output the HTML structure
    ob_start();
?>
    <div class="tabs-container">

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
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'tab4')">Tab 4</button>
            </div>
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'tab5')">Tab 5</button>
            </div>
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'tab6')">Tab 6</button>
            </div>
        </div>
        <div class="div">

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

            <div id="tab4" class="tabcontent">
                <h3>Tab 4 Content</h3>
                <p>This is the content of Tab 4.</p>
            </div>

            <div id="tab5" class="tabcontent">
                <h3>Tab 5 Content</h3>
                <p>This is the content of Tab 5.</p>
            </div>

            <div id="tab6" class="tabcontent">
                <h3>Tab 6 Content</h3>
                <p>This is the content of Tab 6.</p>
            </div>

        </div>

        <picture class="logos">
            <source srcset="<?php echo plugin_dir_url(__FILE__) . '../src/img/logos-large.png'; ?>" media="(min-width: 800px)" style="width:947px">
            <source srcset="<?php echo plugin_dir_url(__FILE__) . '../src/img/logos-small.png'; ?>" media="(max-width: 799px)">
            <img src="<?php echo plugin_dir_url(__FILE__) . '../src/img/logos-small.png'; ?>" alt="Logo">
        </picture>

    </div>

<?php
    return ob_get_clean();
}
add_shortcode('custom_tabs', 'custom_tabs_shortcode_function');

?>