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
	</header>

	<div class="entry-date">
		<h5>
			<?php echo get_the_date(); ?> • <?php echo get_comments_number(); ?> Comments
		</h5>
	</div>

	<div class="entry-content">
		<p><?php the_content('<p class="para para-content">', '</p>'); ?></p>
	</div>

</article>

<?php
	the_post_navigation(
		array(
			'screen_reader_text'=> 'Read Some More',
			'prev_text' => __( 'Previous' ),
	    'next_text' => __( 'Next' ),
		)
	);
?>


<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
