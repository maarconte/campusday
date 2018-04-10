<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */
$image = get_field('background_image', 'option');

?><!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'medusa');?></a>

	<header id="masthead" class="site-header hero" role="banner" style="background-image:url( <?php echo $image['url']; ?>)">
	<div class="hero-body">
		<div class="site-branding container">
			<?php
if (is_front_page()): ?>
				<h1 class="site-title title is-1"><?php bloginfo('name');?></h1>
			<?php else: ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></p>
			<?php
endif;

$description = get_bloginfo('description', 'display');
if ($description || is_customize_preview()): ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
endif;?>
		</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'medusa');?></button>
			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu'));?>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
