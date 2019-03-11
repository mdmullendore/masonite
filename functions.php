<?php
/**
 * Twenty Nineteen functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

/* styles */
wp_enqueue_style( 'masonite-style', get_stylesheet_uri() );
wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/style.css' );

/* include */
require get_template_directory() . '/inc/actions.php';
require get_template_directory() . '/inc/comment-template-functions.php';
require get_template_directory() . '/inc/filters.php';
require get_template_directory() . '/inc/template-tags.php';

?>
