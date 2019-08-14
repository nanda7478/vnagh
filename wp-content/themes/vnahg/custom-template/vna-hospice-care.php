<?php
/*
 Display Template Name: VNA Hospice Care
*/
get_header();
?>
<?php while(have_posts()): the_post();?>
<?php $image = get_field('header_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>
VNA Hospice Care
 </h1>
</div>
</div>
</div>
<?php endwhile;?>


<section class="scheduling_comfort_section">
	<div class="container">
		<div class="scheduling_comfort_wraper">
		<div class="row">
		<?php
		while(have_rows('vna_hospice_care_repeater')): the_row();
		?>
		   
           <div class="col-lg-7">
				<div class="scheduling_comfort_content display-table">
				<div class="display-table-cell">
				<h2><?php the_sub_field('vna_hospice_title');?></h2>
			  <?php the_sub_field('vna_hospice_content');?>
				</div>
			</div>
		</div>

		<div class="col-lg-5">
				<div class="scheduling_comfort_form">
				<h2><?php the_sub_field('vna_contact_form_title');?></h2>
				<?php echo do_shortcode('[contact-form-7 id="316" title="Hospice Care"]');?>
			</div>
			</div>

		<?php endwhile;?>
		</div>
	</div>
</div>
</section>


<section class="best_class_section">
	<div class="container">
		<div class="best_class_wrap">
			<h3><?php the_field('best_class_hospice_title');?></h3>
			<?php the_field('best_class_hospice_content');?>
		</div>
	</div>
</section>


<section class="scheduling_service_section">
	<div class="container">
		<div class="scheduling_service_wraper">
		
		<?php
		$i = 2;
		while(have_rows('hospice_care_services')): the_row();
		$image =  get_sub_field('hospice_care_service_image');
		?>
		    <?php if($i%2 == 0) { ?>
		    	<div class="row">
			    <div class="col-lg-6">
				<div class="scheduling_service_content display-table">
				<div class="display-table-cell">
				<h2><?php the_sub_field('hospice_care_service_title');?></h2>
					<?php the_sub_field('hospice_care_service_content');?>
				</div>
			</div>
		</div>

			<div class="col-lg-6">
				<div class="scheduling_service_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>
		</div>
           <?php } else { ?>
           	<div class="row">
           		  <div class="col-lg-6 order-lg-2">
				<div class="scheduling_service_content display-table">
				<div class="display-table-cell">
				<h2><?php the_sub_field('hospice_care_service_title');?></h2>
			  <?php the_sub_field('hospice_care_service_content');?>
			</div>
		</div>
		</div>

           <div class="col-lg-6">
				<div class="scheduling_service_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>

         
	</div>
        <?php } ?>
		<?php $i++; endwhile;?>
	
	</div>
</div>
</section>

<?php
get_footer();
?>