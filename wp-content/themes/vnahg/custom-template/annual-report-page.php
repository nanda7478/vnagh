<?php
/*
 Display Template Name: Annual Report
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

<section class="annual_report_section">
	<div class="container">
		<div class="annual_report_wrap">
			<h3><?php the_field('annual_report_title');?></h3>
			<?php the_field('annual_report_content');?>
		</div>
	</div>
</section>

<section class="download_annual_section">
	<div class="container">
		<div class="download_annual_wrap">
			<div class="top_heading_para">
				<h2><?php the_field('downloadable_annual_report_title');?></h2>
			</div>

			<div class="download_pdf_section">
				<ul>
				<?php
				while(have_rows('downloadable_annual_report')): the_row();
				?>
					<li>
						<a href="<?php the_sub_field('download_pdf_url');?>"><?php the_sub_field('download_pdf_title');?></a>
					</li>
				<?php endwhile;?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>