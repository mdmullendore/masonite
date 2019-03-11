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
    <p>© <?php echo $year ?> <?php blogInfo('name') ?> by Mason Mullendore</p>
  </div>
</footer>
</body>
</html>
