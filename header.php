<?php
/**
 * Header templete
 *  
 * @package Threesixty 
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="Q9BqqDHz"></script>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
  <header id="masthead" class="site-header" role="banner">
      <?php get_template_part('template-parts/header/nav'); ?>
  </header>
  <div class="container-fluid">