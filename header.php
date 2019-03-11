<?php
/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage Masonite
 * @since Masonite 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <title><?php bloginfo('name') ?> | <?php bloginfo('description')?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header class="header header-main">
    <div class="wrap">
      <ul class="list list-header-main">
        <li>
          <a href="/">Blog</a>
        </li>
        <li>
          <a href="http://www.masonmullendore.com/" target="_blank">About</a>
        </li>
        <li>
          <a href="/contact">Contact</a>
        </li>
      </ul>
      <div class="row">
        <?php if (is_home()) : ?>
          <h1><?php bloginfo('name') ?></h1>
          <p><?php bloginfo('description')?>.</p>
          <small>by: <a href="http://www.masonmullendore.com/" target="_blank">mason mullendore</a></small>
        <?php endif; ?>
        <?php if (!is_home()) : $page_title = $wp_query->post->post_title; ?>
          <h1><?php echo $page_title ?></h1>
        <?php endif; ?>
      </div>
    </div>
  </header>
