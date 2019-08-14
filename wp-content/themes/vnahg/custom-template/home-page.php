<?php
/*
 Display Template Name: Home
*/
get_header();
?>

<?php while ( have_rows('home_slider') ) : the_row(); ?>
  <?php $image = get_sub_field('slider_image'); ?>
<div class="home-page-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container home-page-content-table">
 <div id="post-<?php the_ID(); ?>" class="home-page-content-table-cell">
 <h1>
<?php the_sub_field('slider_title'); ?>
 </h1>
 <div class="slider_button_text"><a href="<?php the_sub_field('slider_button_url');?>"><?php the_sub_field('slider_button_title');?></a></div>
</div>
</div>
</div>
<?php endwhile;?> 



<section class="home_service_section clearfix">
	<div class="container">
		<div class="home_servicewrap">
			<div class="top_heading_para">
				<h2 class="block-tittle"><?php the_field('service_offer_title');?></h2>
			</div>
          
           <div class="service_icon_sec">
           	<div class="row">
           	<?php
           	while(have_rows('service_offer_repeater')): the_row();
           	$image = get_sub_field('service_offer_image');
           	?>
           		<div class="col-sm-3 col-6">
           			<div class="service_work_box">
           				<div class="service_work_img">
           				<a href="<?php the_sub_field('service_offer_title_url');?>">
           					<img src="<?php echo $image['url'];?>">
           					</a>
           				</div>
           				<div class="service_work_content">
           					<h4><a href="<?php the_sub_field('service_offer_title_url');?>"><?php the_sub_field('service_offer_title');?></a></h4>
           				</div>
           			</div>
           		</div>
           	<?php endwhile;?>
           	</div>
           </div>

		</div>
		
	</div>
</section>

<section class="new_jersey_section text-center clearfix">
	<div class="container">
		<div class="new_jersey_wrap">
		<?php 
		while(have_rows('new_jersey_section')): the_row();
		?>
			<h2 class="block-tittle"><?php the_sub_field('new_jersey_title');?></h2>
			<?php the_sub_field('new_jersey_content');?>
			<div class="learn_more"><a class="btn btn-primary" href="<?php the_sub_field('new_jersey_button_url');?>"><?php the_sub_field('new_jersey_button_title');?></a></div>
		<?php endwhile;?>
		</div>
	</div>
</section>


<section class="location_giving_section">
	<div class="container-fluid">
		
		
		<?php
		$i = 2;
		while(have_rows('location_and_giving_section')): the_row();
		$image =  get_sub_field('location_giving_image');
		?>
		    <?php if($i%2 == 0) { ?>
		    	 
		    	<div class="row align-items-center ">
           
           <div class="col-lg-6 img-right order-lg-12">
				<div class="location_giving_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>

			    <div class="col-lg-6 text-left">
				<div class="location_giving_content display-table">
				<div class="display-table-cell">
				<h2><?php the_sub_field('location_giving_title');?></h2>
					<?php the_sub_field('location_giving_content');?>
			 <a class="btn btn-primary" href="<?php the_sub_field('location_giving_button_url');?>"><?php the_sub_field('location_giving_button_title');?></a> 
				</div>
			</div>
		</div>

		
		 
		 </div>
           <?php } else { ?> 
           	<div class="row align-items-center">
           <div class="col-lg-6">
				<div class="location_giving_img">
				<img src="<?php echo $image['url'];?>">
			</div>
			</div>

           <div class="col-lg-6 right-text">
				<div class="location_giving_content display-table">
				<div class="display-table-cell">
				<h2><?php the_sub_field('location_giving_title');?></h2>
			  <?php the_sub_field('location_giving_content');?>
			 <a class="btn btn-primary" href="<?php the_sub_field('location_giving_button_url');?>"><?php the_sub_field('location_giving_button_title');?></a> 
				</div>
			</div>
		</div>
</div>
        <?php } ?>
		<?php $i++; endwhile;?>
		
	 
</div>
</section>

<section class="home_blog_section clearfix">
	<div class="container">
		<div class="home_blog_wrap">
			<div class="top_heading_para">
				<h2><?php the_field('vna_news_title');?></h2>
				<p><?php the_field('vna_news_subtitle');?></p>
			</div>
          
           <div class="blog_icon_sec">
           	<div class="row">
		<?php
		$args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'order' => 'ASC',
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ):
		while ( $query->have_posts() ) : $query->the_post();?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
           		<div class="col-lg-4 col-md-6">
           			<div class="blog_work_box">
           				<div class="blog_work_img">
           					<a href="<?php the_permalink();?>"><img src="<?php echo $image[0]; ?>"></a>
           				</div>
           				<div class="blog_work_content">
           				
           		<div class="home_post_date_tag">
           			<h4><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h4>
				 <div class="post_category_name"><?php the_category() ?></div>
			 
<div class="dates"><?php echo get_the_date('m. j. Y'); ?> </div>
				</div>
           	<div class="home_entry-content clearfix">
			<?php $content = get_the_content();
            $trimmed_content = wp_trim_words( $content, 20, '...' ); ?>
              <p><?php echo $trimmed_content; ?></p>
              <a href="<?php echo get_permalink() ?>">read more  <i class="fal fa-arrow-circle-right"></i></a>
				</div>
           				</div>
           			</div>
           		</div>
		<?php 
		endwhile;
		wp_reset_postdata();
		endif;
		?>
           	</div>
           </div>

           <div class="learn_more"><a class="get_started_btn" href="<?php the_field('view_full_blog_url');?>"><?php the_field('view_full_blog_title');?></a></div>
				</div>

		</div>
		
	</div>
</section>

<section class="upcoming_events_section clearfix">
	<div class="container">
		<div class="upcoming_events_wrap">
			<div class="top_heading_para">
				<h2 class="block-tittle"><?php the_field('upcoming_event_title');?></h2>
				<p><?php the_field('upcoming_event_subtitle');?></p>
			</div>
			<div class="events_icon_sec">
           	<div class="row">
            <?php
		$meta_quer_args = array(
		'relation'  =>   'AND',
		array(
		'key'       =>   '_EventEndDate',
		'value'     =>   time(),
		'compare'   =>   '>='
		  )
		);
		$args = array(
		'post_type' => 'tribe_events',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
        'ignore_sticky_posts' => true,
		'meta_key' => '_EventStartDate',
        'order'    =>  'ASC',
        'meta_query' => $meta_quer_args
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ):
		while ( $query->have_posts() ) : $query->the_post();?>
		<?php $image = get_field('events_home_image'); 
         
         $startDate =  tribe_get_start_date( $post, false, 'M j @ g:i A' );
         //$endDate = tribe_get_end_date($post, false, 'M j @ G:i')

		?>

         <div class="col-md-4">
           			<div class="upcoming_events_work_box">
           				<div class="upcoming_events_work_content">
           				<h4><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h4>
           				<p><?php echo $startDate;?></p>
           	<div class="events-content">
           	<div class="upcoming_events_work_img">
           		<img src="<?php echo $image['url']; ?>">
           	   </div>
			<?php $content = get_the_content();
            $trimmed_content = wp_trim_words( $content, 15); ?>
              <p><?php echo $trimmed_content; ?></p>
              <a href="<?php echo get_permalink();?>">Learn More </a>

				</div>
           				</div>
           			</div>
           		</div>


		<?php 
		endwhile;
		wp_reset_postdata();
		endif;
		?>
		</div>
		</div>

			<div class="learn_more"><a class="get_started_btn" href="<?php the_field('view_events_button_url');?>"><?php the_field('view_events_button_title');?></a></div>
		</div>
	</div>
</section>


<?php
get_footer();
?>