<?php
/*
 Display Template Name: CFHI Page
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

<section class="team_health_section">
	<div class="container">
		<div class="home_health_wrap">
		   <?php 
		   while(have_rows('building_children_and_family')): the_row();
		   $image = get_sub_field('health_children_family_icon');
		   ?>
		   <img src="<?php echo $image['url'];?>">
			<h3><?php the_sub_field('health_children_family_title');?></h3>
			<?php the_sub_field('health_children_family_content');?>
		<?php endwhile;?>
		</div>
	</div>
</section>


<section class="collaborative_care_section">
	<div class="container">
		<div class="collaborative_care_wraper">
		<div class="row">
		<?php
		while(have_rows('service_glance_repeater')): the_row();
		$image =  get_sub_field('service_glance_image');
		?>
		   
           <div class="col-lg-7">
				<div class="service_glance_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>

           <div class="col-lg-5">
			<div class="align-items-center d-flex h-100">
				<div class="display-table-cell">
				<h2><?php the_sub_field('service_glance_title');?></h2>
			  <?php the_sub_field('service_glance_content');?>
			     <ul class="service-list">
			     <?php while(have_rows('service_glance_list')): the_row();?>
			     	<li>
			     		<h4><?php the_sub_field('list_title');?></h4>
			     	</li>
			     	<?php endwhile;?>
			     </ul>
				</div>
			</div>
		</div>

		<?php endwhile;?>
		</div>
	</div>
</div>
</section>

<section class="chfi_service_section">
	<div class="container">
		<div class="row">
		   <?php while(have_rows('children_and_family_services')): the_row();?>
			<div class="col-md-6 iteams">
				<h2><a href="<?php the_sub_field('children_and_family_service_url');?>"><?php the_sub_field('children_and_family_service_title');?></a></h2>
				<?php the_sub_field('children_and_family_service_content');?>
			</div>
		<?php endwhile;?>
		</div>
	</div>
</section>

<?php 
while(have_rows('our_caring_section')): the_row();
$image = get_sub_field('our_caring_image');
?>
<section class="our_caring_section" style="background-image:url(<?php echo $image['url'];?>);">
	<div class="container">
		<div class="our_caring_wraper">		
		<h3><?php the_sub_field('our_caring_title');?></h3>
		</div>
	</div>
</section>
<?php endwhile;?>

<section class="cfhi_bottom_section">
	<div class="container">
		<div class="cfhi_bottom_wrap">
			<?php the_field('children_and_family_bottom_content');?>
		</div>
	</div>
</section>

<?php
get_footer();
?>