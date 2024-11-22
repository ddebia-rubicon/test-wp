
<?php
/*
Plugin Name: Sample Plugin
Description: A sample plugin for testing.
Version: 1.0
Author: Your Name
*/
add_action('wp_footer', function() {
    echo '<p style="text-align: center;">This is a test plugin.</p>';
});
?>
