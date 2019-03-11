<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Masonite
 * @author Mason Mullendore
 * @since 1.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
  <div class="wrap">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main>
  </div>
</section>

<?php get_footer(); ?>
