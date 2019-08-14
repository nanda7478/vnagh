<?php
/*
 Display Template Name: FAQs
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

<section class="common_question_section">
	<div class="container">
		<div class="common_question_wrap">
			<h3><?php the_field('faq_about_title');?></h3>
			<?php the_field('faq_about_content');?>
		</div>
	</div>
</section>

<section class="faq_question_answer_section">
<div class="container">
    <div id="accordion" class="accordion">
        <div class="card mb-0">
      
            <?php
            $i = 1;
            while(have_rows('faq_section_repeater')): the_row();
            ?>
            <div class="card-header collapsed" data-toggle="collapse" href="#collapse<?php echo $i;?>">
                <a class="card-title">
                    <?php the_sub_field('faq_section_title');?>
                </a>
            </div>
            <div id="collapse<?php echo $i;?>" class="card-body collapse" data-parent="#accordion" >
                <?php the_sub_field('faq_section_content');?>
            </div>
           <?php
           $i++;
           endwhile;
           ?>
        </div>
    </div>
</div>
</section>

<section id="our_speciality_scroll" class="our_specialties_section mission_giving_section">
    <div class="container">
        <div class="home_specialties_wrap">
           <div class="specialties_sec">
            <ul class="specialties_item row">
            <?php
      while(have_rows('our_specilities_repeater')): the_row();
      ?>
              <li class="col-sm-6">
              <div class="item "> 
              <a href="<?php the_sub_field('specilities_url');?>"> <span> Explore </span> <?php the_sub_field('specilties_title');?></a> 
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
 