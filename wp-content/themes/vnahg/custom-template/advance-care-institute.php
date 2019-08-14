<?php
/*
 Display Template Name: Advanced Care Institute
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
		<div class="team_health_wrap">
		   <?php 
		   while(have_rows('highest_quality_section')): the_row();
		   $image = get_sub_field('higest_quality_icon');
		   ?>
		   <img src="<?php echo $image['url'];?>">
			<h3><?php the_sub_field('higest_quality_title');?></h3>
			<?php the_sub_field('higest_quality_content');?>
		<?php endwhile;?>
		</div>
	</div>
</section>

<section class="advanced_care_section">
	<div class="container">
		<div class="advanced_care_wraper">
		<div class="row">
		<?php
		while(have_rows('advance_care_institute_section')): the_row();
		$image =  get_sub_field('advance_care_image');
		?>
		   
           <div class="col-lg-6">
				<div class="advanced_care_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>

           <div class="col-lg-6">
				<div class="skilled_home_care_content align-items-center d-flex h-100">
				<div class="display-table-cell">
				<h2><?php the_sub_field('advance_care_title');?></h2>
			  <?php the_sub_field('advance_care_content');?>
				</div>
			</div>
		</div>

		<?php endwhile;?>
		</div>
	</div>
</div>
</section>


<section class="our_specialties_section">
	<div class="container">
		<div class="home_specialties_wrap">
			<div class="top_heading_para">
				<h2><?php the_field('our_specilties_title');?></h2>
			</div>
          
           <div class="specialties_sec">
           <div class="owl-carousel owl-theme">
      <?php
      while(have_rows('our_specilities_repeater')): the_row();
      ?>
    <div class="item">
       
          <a href="<?php the_sub_field('specilities_url');?>"> <span> Explore </span> <?php the_sub_field('specilties_title');?></a> 
      </div>
<?php endwhile;?>
     </div>
           </div>

		</div>
		
	</div>
</section>

<?php
get_footer();
?>
<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/owl.theme.default.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php  bloginfo('template_url');  ?>/js/owl.carousel.js"></script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },

        1000:{
            items:3
        }
    }
})
</script>