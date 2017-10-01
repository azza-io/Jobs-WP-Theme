<?php
/**
 * The template for displaying all single available_jobs posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Azza-IO\'s_JobsBoard
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="row">
			<div class="col-sm-12">
				<div class="backtohome">
				<a href="/home/">Back to all jobs</a>
				</div>
			</div>
		</div>

<div class="job-details-container">
		<div class="row">
			<div class="col-sm-8">

					<div class="row">
						<div class="job-title"><h1><?php the_title(); ?></h1></div>
						<div class="job-posted-on"><span>POSTED ON <?php echo get_the_date('M n'); ?></span></div>
						<div class="job-company"><h3><?php the_field('company'); ?></h3></div>
						<div class="job-location"><h3>Headquarters: <?php the_field('headquarters')?></h3></div>
						<div class="job-company-link">
						<a href="<?php the_field('website'); ?>"><?php the_field('website'); ?></a></div>
					</div>

			</div>
			<div class="col-sm-4">
				<div class="job-company-logo">
					<img class="img-responsive" src="<?php the_field('logo'); ?>"/>
				</div>
			</div>
		</div>
	</div>


	<div class="available-jobs-content">
		<div class="row">
			<div class="col-lg-8">
				<?php if ( have_posts() ) : ?>

				    <?php while ( have_posts() ) : the_post(); ?>

				       <?php the_content(); ?>

				    <?php endwhile; ?>

				<?php endif; ?>


			</div>
		</div>
	</div>

	<div class="application-container">
		<div class="application">
			<h3>Want to apply for this job?</h3>
			<div class="application-link">
				<a href="<?php the_field('application_link'); ?>"><?php the_field('application_link'); ?></a>
			</div>
		</div>
	</div>

	</div>
</main>
<?php
get_footer();
