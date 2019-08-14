<?php
/*
 Display Template Name: Giving Registration
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

<section class="donate_top_section">
	<div class="container">
		<div class="donate_top_wrap">
		   <?php 
		   while(have_rows('why_give_section')): the_row();
		   ?>
			<h3><?php the_sub_field('why_give_title');?></h3>
			<?php the_sub_field('why_give_content');?>
		<?php endwhile;?>
		</div>
	</div>
</section>

<section class="donation_form_section">
	<div class="container">
		<div class="donation_form_wrap">
         <div class="top_heading_para">
				<h2><?php the_field('your_gift_title');?></h2>
			</div>

           <div id="bbox-root">&nbsp;</div>
            <script type="text/javascript">
       window.bboxInit = function () {
           bbox.showForm('502cd0bf-3571-46a8-a174-5bc5cbe8f33f');
       };
       (function () {
           var e = document.createElement('script'); e.async = true;
           e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
           document.getElementsByTagName('head')[0].appendChild(e);
       } ());
</script>

		</div>
	</div>
</section>

<?php
get_footer();
?>