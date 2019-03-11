<?php
/**
 * The sing page template file
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */

get_header();
?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <?php
      if (have_posts()) :
        /* Start the Loop */
        while (have_posts()) :
          the_post();

          get_template_part( 'template-parts/content/content', 'single' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }

        endwhile;
      endif;
      ?>
    </main>

  </div>
</div>

<?php get_footer(); ?>
