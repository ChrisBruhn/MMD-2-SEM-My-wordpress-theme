<?php
/*
Plugin Name: Admin Motivation
Plugin URI: http://danielpataki.com
Description: Shows motivational messages in the admoin bar
Author: Daniel Pataki
Version: 1.0
Author URI: http://danielpataki.com
Text Domain: wp-admin-motivation
*/
function get_motivation_text() {
    $motivation = array(
        'You are awesome',
        'This website is boss',
        'You look great today',
        'Your earlobes are well rounded, good job!'
    );
    shuffle( $motivation );
    return $motivation[0];
}
add_action( 'admin_notices', 'show_motivation_text' );
function show_motivation_text() {
    $text = get_motivation_text();
    echo "<p id='wp-admin-motivation'>$text</p>";
}
add_action( 'admin_enqueue_scripts', 'motivation_assets' );
function motivation_assets($hook) {
    wp_enqueue_style( 'motivation-styles', plugin_dir_url( __FILE__ ) . 'styles.css' );
}



