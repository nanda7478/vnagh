<?php
/*
 Display Template Name: Location
*/
get_header();
?>
<?php while(have_posts()): the_post();?>
<?php $image = get_field('header_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>
<?php the_title();?>
 </h1>
</div>
</div>
</div>
<?php endwhile;?>

<section class="location_service_section">
	<div class="container">
		<div class="location_wrap">
			<h3><?php the_field('location_title');?></h3>
			<p><?php the_field('location_subtitle');?></p>
		</div>
	</div>
</section>

<section class="location_map_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php echo do_shortcode('[wpsl]');?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>