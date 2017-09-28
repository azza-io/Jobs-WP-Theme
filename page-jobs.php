<?php /* Template Name: Jobs Page*/ ?>
<?php


acf_form_head();
get_header();
?>
<!-- Trigger/Open The Modal -->
<button id="postaJOB">Post A Job</button>

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
<h1>Jobs Page</h1>
<table class="table table-striped">

<!-- The Basic WP Loop -->
<?php if ( have_posts() ) : ?>
	<?php
				query_posts(array(
					'post_type' => 'available_jobs',
					'showposts' => -1
				) );
	?>
    <?php while ( have_posts() ) : the_post(); ?>
				<tr>
				<td><?php the_field('company'); ?></td>
				<td><?php the_title(); ?></td>
				<td><?php echo get_the_date(); ?></td>
				</tr>


    <?php endwhile; ?>
	</tbody>
</table>


<?php endif; ?>



      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>




<?php get_footer(); ?>
