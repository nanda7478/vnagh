<?php
/*
 Display Template Name: Contact Us
*/
get_header();
?>
<section class="contact_page_section clearfix">
	<div class="container">
	<div class="top_heading_para">
	<?php while(have_posts()): the_post();?>
	<h2><?php the_title();?></h2>
	<?php the_content();?>
<?php endwhile;?>
	</div>
	</div>
</section>

<section class="contact_form_section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php echo do_shortcode('[contact-form-7 id="219" title="Contact form 1"]');?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>