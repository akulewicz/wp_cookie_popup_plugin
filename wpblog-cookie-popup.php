<?php

/**
 * Plugin Name: WP Cookie Popup Creator
 * Description: Simple cookie popup plugin for Wordpress pages
 * Version: 0.2.1
 * Author: Arkadiusz Kulewicz
 * License: GPL v2.0 or later
 */


function wpblog_popup_scripts() {
    wp_enqueue_style('popup-styles', plugin_dir_url(__FILE__) . '/' .'style.css');
    wp_enqueue_script('close-popup', plugin_dir_url(__FILE__) . '/' . 'close.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'wpblog_popup_scripts');
add_action('wp_footer', function() {require_once(plugin_dir_path(__FILE__) . '/' .'popup.php');});