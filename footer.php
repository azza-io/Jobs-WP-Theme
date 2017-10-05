<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Azza-IO\'s_JobsBoard
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="made-with">
				<p class="love">Made with <i class="icon ion-heart"></i> by
					<a href="https://azza.io">Azza.io</a></p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
<script>
// Get the modal
var modal = document.getElementById('jobModal');

// Get the button that opens the modal
var btn = document.getElementById("postaJOB");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
jQuery('.hamburger').click( function() {
  jQuery(this).toggleClass('is-active');
});
jQuery('.hamburger').click( function() {
  jQuery('.mobile-menu').toggleClass('open');
});
</script>
</html>
