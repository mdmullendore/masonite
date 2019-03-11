<?php
/**
 * Functions for comments template
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

function masonite_get_discussion_data() {
  static $discussion, $post_id;

	$current_post_id = get_the_ID();
	if ( $current_post_id === $post_id ) {
		return $discussion;
	} else {
		$post_id = $current_post_id;
	}

	$comments = get_comments(
		array(
			'post_id' => $current_post_id,
			'orderby' => 'comment_date_gmt',
			'order'   => get_option( 'comment_order', 'asc' ),
			'status'  => 'approve',
			'number'  => 50,
		)
	);

	$authors = array();
	foreach ( $comments as $comment ) {
		$authors[] = ( (int) $comment->user_id > 0 ) ? (int) $comment->user_id : $comment->comment_author_email;
	}

	$authors    = array_unique( $authors );
	$discussion = (object) array(
		'authors'   => array_slice( $authors, 0, 6 ),
		'responses' => get_comments_number( $current_post_id ),
	);

	return $discussion;
}

?>
