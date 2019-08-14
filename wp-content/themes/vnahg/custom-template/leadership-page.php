<?php
/*
 Display Template Name: Leadership
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

<section class="leading_way_section text-center">
	<div class="container">
		<div class="leading_way_wrap">
		   <?php 
		   while(have_rows('leading_way_section')): the_row();
		   ?>
			<h3><?php the_sub_field('leading_way_title');?></h3>
			<?php the_sub_field('leading_way_content');?>
		<?php endwhile;?>
		</div>
	</div>
</section>

<section class="executive_leadership_section">
	<div class="container">
	<div class="executive_leadership_wrap">
	<div class="top_heading_para">
				<h2><?php the_field('executive_leadership_title');?></h2>
			</div>
		<div class="row">
  <?php
  $args = array(
   'post_type' => 'leadership',
   'posts_per_page' => -1,
   'order' => 'ASC'
  );
$query = new WP_Query( $args );
if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();
?>
			<div class="col-lg-6">
				<h4><a href="<?php the_permalink();?>"><?php the_title();?><?php if(get_field('degree')) { ?>, <?php the_field('degree');?> <?php } ?></a></h4>
				<p><?php the_field('destination');?></p>
			</div>
		<?php 
		endwhile;
        wp_reset_postdata();
        endif;
		?>
		</div>
		</div>
	</div>
</section>


<section class="faq_leading_section">
<div class="container">
<div class="top_heading_para">
<h2><?php the_field('vna_health_group_title');?></h2>
</div>
    <div id="accordion" class="accordion">
        <div class="card mb-0">
      
            <?php
            $i = 1;
            while(have_rows('vna_health_group_repeater')): the_row();
            ?>
            <div class="card-header collapsed" data-toggle="collapse" href="#collapse<?php echo $i;?>">
                <a class="card-title">
                    <?php the_sub_field('vna_health_title');?>
                </a>
            </div>
            <div id="collapse<?php echo $i;?>" class="card-body collapse" data-parent="#accordion" >
                <?php the_sub_field('vna_health_content');?>
            </div>
           <?php
           $i++;
           endwhile;
           ?>
        </div>
    </div>
</div>
</section>

<section class="mission_giving_section specialties_sec">
  <div class="container">
    <div class="row">
    <?php
    while(have_rows('orange_box_section')): the_row();
    ?>
      <div class="col-sm-6">
        <div class="items">
       <a href="<?php the_sub_field('orange_box_url');?>"> <span> Explore </span> <?php the_sub_field('orage_box_title');?></a> 
         </div>
      </div>
    <?php endwhile;?>
    </div>
  </div>
</section>


<?php
get_footer();
?>
