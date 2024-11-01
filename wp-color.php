<?php
/*
Plugin Name: WP-Color
Plugin URI: http://iran98.org/category/wordpress/wp-color/
Description: Colors WordPress
Version: 1.1
Author: Mostafa Soufi
Author URI: http://www.iran98.org/
License: GPL2
*/
load_plugin_textdomain('wp-color','wp-content/plugins/wp-color/langs');
function wp_color_ping() {
    wp_admin_css_color('pink', __('Pink', 'wp-color'), plugin_dir_url(__FILE__) . '/css/wp-admin-pink.css',
        array(
            '#9C1C6B',
            '#CA278C',
            '#E47297',
            '#FFDAD7',
        )
    );
}
add_action('admin_init','wp_color_ping');