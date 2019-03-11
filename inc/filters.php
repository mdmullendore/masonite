<?php
/**
 * Masonite filters
 *
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

 function wp_move_comment_field_to_bottom ($fields) {
   $comment_field = $fields['comment'];
   unset( $fields['comment'] );
   $fields['comment'] = $comment_field;
   return $fields;
 }

 add_filter('comment_form_fields', 'wp_move_comment_field_to_bottom');

 function wp_remove_cookie_field ($fields) {
   unset( $fields['cookies'] );
 	return $fields;
 }

 add_filter('comment_form_fields', 'wp_remove_cookie_field');

 function change_reader_heading ($content) {
   // Remove h2 tag
   $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
   return $content;
 }

 add_filter('navigation_markup_template', 'change_reader_heading');

?>
