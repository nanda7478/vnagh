<?php
/*
 Display Template Name: Privacy And Terms
*/
get_header();
?>

<section class="privacy_term_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<?php while (have_posts()): the_post();?>
				<h2>Privacy/Terms and Conditions</h2>
                <?php the_content();?>
			<?php endwhile;?>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>