<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="leading_single_section">

 
		<div class="leading_single_wraper">
	<div class="container">
	<div class="back-main"><span class="back"> <a href="<?php echo site_url();?>/senior-management/"><i class="fal fa-angle-left"></i> Back to VNA Leadership</a> </span>  </div>

		<div class="row">
		<?php
		while ( have_posts() ) : the_post();
		?>
		   
           <div class="col-sm-4">
				<div class="leading_single_img">
				<?php twentysixteen_post_thumbnail(); ?>
			</div>

			<div class="leading_single_social">
			<ul>
			<?php if(get_field('twitter_link')) { ?>
			<li>
			<a href="<?php the_field('twitter_link');?>" target="_blank"> <i class="fab fa-twitter"></i>
			</a>
			</li>
			<?php } ?>

			<?php if(get_field('linkedin_link')) { ?>
			<li>
			<a href="<?php the_field('linkedin_link');?>" target="_blank">  <i class="fab fa-linkedin-in"></i> </a>
			</li>
			<?php } ?>
			</ul>
			</div>

			</div>

           <div class="col-sm-8">
				<div class="leading_single_content display-table">
				<div class="display-table-cell">
				<h2><?php the_title();?><?php if(get_field('degree')) { ?>, <?php the_field('degree');?> <?php } ?></h2>
				<h4><?php the_field('destination');?></h4>
			  <?php the_content();?>
				</div>
			</div>
		</div>

		<?php endwhile;?>
		</div>
	</div>
	</div>
</section>

<?php $my_query = new WP_Query('page_id=24');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;?>
<section class="mission_giving_section">
  <div class="container">
    <div class="row">
    <?php
    while(have_rows('orange_box_section')): the_row();
    ?>
      <div class="col-sm-6">
        <div class="items">
       <a href="<?php the_sub_field('orange_box_url');?>"> <span> Explore </span>
        <?php the_sub_field('orage_box_title');?></a> 
         </div>
      </div>
    <?php endwhile;?>
    </div>
  </div>
</section>
 <?php endwhile; ?>


<?php get_footer(); ?>