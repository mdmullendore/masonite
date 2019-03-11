<?php
/**
 * Custom template tags for this theme
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

if ( ! function_exists( 'masonite_comment_form' ) ) :
	/**
	 * Documentation for function.
	 */
	function masonite_comment_form( $order ) {
		if ( true === $order || strtolower( $order ) === strtolower( get_option( 'comment_order', 'asc' ) ) ) {

			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$fields =  array(
				'author' =>
				    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) . '</label>' .
				    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				    '" size="30"' . $aria_req . ' /></p>',
				  'email' =>
				    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label>' .
				    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				    '" size="30"' . $aria_req . ' /></p>',
					'cookies' => null
			);

			$comments_args = array(
			    'fields' =>  $fields,
			    'title_reply'=> null,
			    'label_submit' => 'Comment',
					'logged_in_as' => null,
					'comment_notes_before' => null
			);

			comment_form($comments_args);
		}
	}
endif;
