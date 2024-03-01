<?php
/*
Plugin Name: Maintenance Mode
Description: Activate maintenance mode to display a message that the site is currently under maintenance.
Version: 1.0
Author: Ronak Prajapati
*/

// To Activate maintenance mode
function activate_maintenance_mode() {
    if (!current_user_can('administrator') && !is_admin()) {
        wp_die('<h1>Site Under Maintenance</h1><p>We are currently undergoing maintenance. Please check back later.</p>', 'Maintenance Mode');
    }
}
add_action('template_redirect', 'activate_maintenance_mode');