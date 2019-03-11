<?php
/**
 * The template for displaying Author info
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */
?>

<article class="author-bio">
	<h2 class="author-title">About The Author</h2>
	<p class="author-description">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link" href="http://masonmullendore.com" target="_blank" rel="author">masonmullendore.com</a>
	</p>
</article>
