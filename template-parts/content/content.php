<?php
/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-date">
		<h5><?php echo get_the_date(); ?></h5>
	</div>

	<div class="entry-excerpt">
		<p><?php echo the_excerpt('<p class="para para-excerpt">', '</p>'); ?></p>
	</div>

	<div class="entry-read-more">
		<a href="<?php the_permalink(); ?>">Read More</a>
	</div>
</article>
