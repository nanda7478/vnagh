<?php
/*
 Display Template Name: Ways To Volunteer
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

<section class="ways_volunteer_section">
	<div class="container">
		<div class="ways_volunteer_wrap">
			<h3><?php the_field('volunteer_title');?></h3>
			<h5><?php the_field('volunteer_sub_title');?></h5>
			<?php the_field('vollunteer_content');?>
		</div>
	</div>
</section>

<section class="our_specialties_section">
	<div class="container">
		<div class="home_specialties_wrap">
			<div class="top_heading_para">
				<h2><?php the_field('volunteer_service_title');?></h2>
			</div>
          
           <div class="specialties_sec">
           	<ul class="specialties_item">
           	<?php
           	while(have_rows('volunteer_service_repeater')): the_row();
           	?>
           		<li>
           			<div class="specialties_box">
           				<div class="specialties_work_content">
           					<h4><a href="<?php the_sub_field('volunteer_title_url');?>"><?php the_sub_field('volunteer_title');?></a></h4>
           				</div>
           			</div>
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