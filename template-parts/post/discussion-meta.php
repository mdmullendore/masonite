<?php
/**
 * The template for displaying Current Discussion on posts
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

/* Get data from current discussion on post. */
$discussion = masonite_get_discussion_data();
$has_responses = $discussion->responses > 0;

if ( $has_responses ) {
	/* translators: %1(X comments)$s */
	$meta_label = sprintf( _n( '%d Comment', '%d Comments', $discussion->responses, 'masonite' ), $discussion->responses );
} else {
	$meta_label = __( 'No comments', 'masonite' );
}
?>

<div class="discussion-meta">
	<p class="discussion-meta-info">
		<span><?php echo esc_html( $meta_label ); ?></span>
	</p>
</div>
