<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Azza-IO\'s_JobsBoard
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<row>
			<div class="col-lg-8 default-page">

			<?php
			while ( have_posts() ) : the_post();

			echo "<h1 class='page-title'>";
			the_title();
			echo "</h1>";
			the_content();

			endwhile; // End of the loop.
			?>
			</div>
			</row>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
