<?php
/*
Plugin Name: Hide Hover Link
Plugin URI: https://github.com/victoryehtutoo/education
Description: Removes href from all links to hide hover URL and keeps them clickable via JavaScript.
Version: 2.0
Author: Saya Victor
Author URI: https://github.com/victoryehtutoo
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: hide-hover-link
Requires at least: 5.0
Requires PHP: 7.4
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue custom JS
function hhl_enqueue_script() {
    wp_enqueue_script('hide-hover-link-js', plugin_dir_url(__FILE__) . 'hide-hover-link.js', array(), '2.0', true);
}
add_action('wp_enqueue_scripts', 'hhl_enqueue_script');
