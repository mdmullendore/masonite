<?php
/**
 * Masonite actions
 *
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');
?>
