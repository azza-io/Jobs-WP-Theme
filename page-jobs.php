<?php /* Template Name: Jobs Page*/ ?>
<?php

acf_form_head();

get_header();
?>
<div id="primary">
	<div id="content" role="main">

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php acf_form(array(
				'post_id'	=> 'new',
				'field_groups'	=> array( 18 ),
				'submit_value'	=> 'Create a job'
			)); ?>

		<?php endwhile; ?>

	</div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>
