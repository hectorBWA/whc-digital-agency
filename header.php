<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whc-agency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'whc-agency' ); ?></a>

	<header id="masthead" style="padding:10vw; background-image:url('https://source.unsplash.com/daily');" class="text-left site-header">
		<div class="site-branding">
			
		<h1>We Are Very Capable of Digital Agency</h1>	


			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, doloremque quod quia illum vitae placeat.</p>
			<button style="padding:25 25px; background-color:black;color:white; border:none; border-radius:none;">click</button>
		</div><!-- .site-branding -->
		
		
	</header><!-- #masthead -->




	<div id="content" class="site-content">
