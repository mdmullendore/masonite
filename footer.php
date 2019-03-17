<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package WordPress
 * @subpackage Masonite
 * @since 1.0.0
 */
 $year = date('Y');
?>

<?php wp_footer(); ?>
<footer class="footer footer-main">
  <div class="wrap">
    <p>© <?php echo $year ?> <?php blogInfo('name') ?> by <a href="<?php echo get_the_author_meta('url'); ?>" target="_blank"><?php echo get_the_author_meta( 'first_name' ); ?> <?php echo get_the_author_meta( 'last_name' ); ?></a></p>
  </div>
</footer>
</body>
</html>
