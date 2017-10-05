<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Azza-IO\'s_JobsBoard
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'azza-io-job-board' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-logo">
			<img src="/wp-content/themes/azza-io-job-board/images/RedfoxIndustries-Logo.png"/>
		</div>
		<div class="header-logo-mobile">
			<img src="/wp-content/themes/azza-io-job-board/images/RedfoxIndustries-Mobile-Logo.png" />
		</div>

		<nav  id="site-navigation_mobile" class="main-navigation_mobile">
			<button class="hamburger hamburger--collapse" type="button">
			  <span class="hamburger-box">
			    <span class="hamburger-inner">
					</span>
			  </span>
			</button>
			<div class="mobile-menu">
				<div class="mobile-menu-container">
					<?wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu' ) ); ?>
				</div>
			</div>
		</nav>
		<nav id="site-navigation" class="main-navigation">
			<?wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu' ) ); ?>
		</nav>

</header><!-- #masthead -->

	<div id="content" class="site-content">
