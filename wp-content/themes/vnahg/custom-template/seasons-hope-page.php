<?php
/*
 Display Template Name: Seasons Hope
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
 		<div class="row">
 			<div class="col-lg-12">
 				<div id="bbox-root"></div>
 				<script type="text/javascript">
<!--//--><![CDATA[//><!--
window.bboxInit = function () {
           bbox.showForm('d192a07f-8b08-4988-8bdb-5429d3856d72');
       };
       (function () {
           var e = document.createElement('script'); e.async = true;
           e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
           document.getElementsByTagName('head')[0].appendChild(e);
       } ());

//--><!]]>
</script>
 			</div>
 		</div>
 	</div>
 </section>

<?php
get_footer();
?>