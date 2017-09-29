<?php /* Template Name: Jobs Page*/ ?>
<?php


acf_form_head();
get_header();
?>
<div class="postajob-container">
	<div class="postajob-inner">
		<h2>Looking to advertise or post a job for free?</h2>
		<button id="postaJOB" class="azza-io-btn btn-danger">Post A Job</button>
	</div>
</div>



<!-- The Modal -->
<div id="jobModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<?php acf_form_head(); ?>
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php acf_form(array(
				'post_id'	=> 'new',
				'field_groups'	=> array( 18 ),
				'submit_value'	=> 'Create a job'
			)); ?>

		<?php endwhile; ?>
	</div>

</div>
<h1 class='page-title'><?php echo get_the_title(); ?></h1>

<ul class="azza-io-ul">

<!-- The Basic WP Loop -->
<?php if ( have_posts() ) : ?>
	<?php
				query_posts(array(
					'post_type' => 'available_jobs',
					'showposts' => -1
				) );
	?>
    <?php while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<span class="company"><?php the_field('company'); ?></span>
				<span class="job-title"><?php the_title(); ?></span>
				<span class="job-date"><?php echo get_the_date('M n'); ?></span>
				</a></li>



    <?php endwhile; ?>
	</ul>



<?php endif; ?>




<?php get_footer(); ?>
