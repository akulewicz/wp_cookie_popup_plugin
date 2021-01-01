<?php

/**
 * Plugin Name: WP Cookie Popup Creator
 * Description: Simple cookie popup plugin for Wordpress pages
 * Version: 0.2.0
 * Author: Arkadiusz Kulewicz
 * License: GPL v2.0 or later
 */

function wpblog_add_cookie_popup() {
    require_once(plugin_dir_path(__FILE__) . '/' .'popup.php');
}

function wpblog_popup_add_css() {
    $styles = file_get_contents(plugin_dir_path(__FILE__) . '/' .'style.css');
    echo "<style>$styles</style>";
}

function wpblog_close_cookie_popup() {
    $js = file_get_contents(plugin_dir_path(__FILE__) . '/' . 'close.js');
    echo "<script>$js</script>";
}

add_action('wp_head', 'wpblog_popup_add_css');
add_action('wp_footer', 'wpblog_add_cookie_popup');
add_action('wp_footer', 'wpblog_close_cookie_popup');