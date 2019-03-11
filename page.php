<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

get_header();

$page_title = $wp_query->post->post_title;
?>

	<section id="primary" class="content-area <?php echo $page_title ?>">
		<main id="main" class="site-main">
      <div class="wrap">
  			<?php
  			while (have_posts()) :
  				the_post();

  				get_template_part( 'template-parts/content/content', 'page' );

  			endwhile;
  			?>
      </div>
		</main>
	</section>

<?php
get_footer();
?>
