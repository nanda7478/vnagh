<?php
/*
 Display Template Name: VNA Institute
*/
get_header();
?>
<?php while(have_posts()): the_post();?>
<?php $image = get_field('header_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell">
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
		   while(have_rows('team_health_section')): the_row();
		   $image = get_sub_field('team_health_icon');
		   ?>
		   <img src="<?php echo $image['url'];?>">
			<h3><?php the_sub_field('team_health_title');?></h3>
			<?php the_sub_field('team_health_content');?>
		<?php endwhile;?>
		</div>
	</div>
</section>

<section class="collaborative_care_section">
	<div class="container">
		<div class="collaborative_care_wraper">
		<div class="row">
		<?php
		while(have_rows('collaborative_care_section')): the_row();
		$image =  get_sub_field('collaborative_care_image');
		?>
		   
           <div class="col-lg-7">
				<div class="collaborative_care_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>

           <div class="col-lg-5">
				<div class="align-items-center d-flex h-100">
				<div class="display-table-cell">
				<h2><?php the_sub_field('collaborative_care_title');?></h2>
			  <?php the_sub_field('collaborative_care_content');?>
			  <a class="menu-scroll-down" href="#contact_strip_scroll"> <i class="dotted-arrow"> </i> </a>
				</div>
			</div>
		</div>

		<?php endwhile;?>
		</div>
	</div>
</div>
</section>

 

<div id="contact_strip_scroll" class="contact-strip clearfix text-center">
<div class="clearfix"><span class="phone"> <i class="fas fa-phone"></i> </span> </div>	
<?php while(have_rows('have_questions_section')): the_row();?>
                  <p><?php the_sub_field('have_question_title');?></p>
                  <h4><?php the_sub_field('have_question_subtitle');?></h4>
				<?php endwhile;?>
 </div>

<section class="skilled_home_care_section">
	<div class="container">
		<div class="skilled_home_care_wraper">
		<div class="row">
		<?php
		while(have_rows('home_care_section')): the_row();
		$image =  get_sub_field('home_care_image');
		?>
		   
           <div class="col-lg-6">
				<div class="skilled_home_care_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>

               <div class="col-lg-6">
				<div class="skilled_home_care_content align-items-center d-flex h-100">
				<div class="display-table-cell">
				<h2><?php the_sub_field('home_care_title');?></h2>
			  <?php the_sub_field('home_care_content');?>
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
      while(have_rows('our_specilties_section')): the_row();
      ?>
      <div class="item">
      <div class="leatestwork_owl">
         <div class="workslid_box">
         <div class="workslid_content">
            <div class="display-table wid">
               <div class="display-table-cell ">
            <h3><a href="<?php the_sub_field('specilties_url');?>"><?php the_sub_field('specilties_title');?></a></h3>
      </div>

   </div>
   </div>
    </div>
   </div>
   </div>
<?php endwhile;?>
     </div>
           </div>

		</div>
		
	</div>
</section>

<section class="vna_home_care_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p><?php the_field('need_home_care_title');?></p>
				<h3><?php the_field('learn_more_about_title');?></h3>
				<h2><a href="<?php the_field('vna_home_care_url');?>"><?php the_field('vna_home_care_title');?></a></h2>
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