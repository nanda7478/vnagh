<?php
/*
 Display Template Name: Languages
*/
get_header();
?>
<?php while(have_posts()): the_post();?>
<?php $image = get_field('header_image'); ?>
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

<section class="language_support_section">
	<div class="container">
		<div class="language_support_wrap">
		<?php
		while(have_rows('langualge_support_section')): the_row();
		?>
		<div class="row">
		 <div class="col-lg-12">
			<h3><?php the_sub_field('language_title');?></h3>
			<?php the_sub_field('language_content');?>
			</div>
		</div>
	<?php endwhile;?>
		</div>
	</div>
</section>
<?php
get_footer();
?>