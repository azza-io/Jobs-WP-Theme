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
			<img src="https://unsplash.it/75/75" />
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu' ) ); ?>
			<!-- Trigger/Open The Modal -->
						<button id="myBtn">Open Modal</button>

						<!-- The Modal -->
						<div id="myModal" class="modal">

						  <!-- Modal content -->
						  <div class="modal-content">
						    <div class="modal-header">
						      <span class="close">&times;</span>
						      <h2>Modal Header</h2>
						    </div>
						    <div class="modal-body">
						      <p>Some text in the Modal Body</p>
						      <p>Some other text...</p>
						    </div>
						    <div class="modal-footer">
						      <h3>Modal Footer</h3>
						    </div>
						  </div>

						</div>
		</nav>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
