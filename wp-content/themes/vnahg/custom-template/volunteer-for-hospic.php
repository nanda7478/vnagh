<?php
/*
 Display Template Name: Volunteer For Hospic
*/
get_header();
?>
<?php while(have_posts()): the_post();?>
<?php $image = get_field('header_image'); ?>
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
		<div class="volunteer_hospic_wrap">
			<h3><?php the_field('vh_title');?></h3>
			<?php the_field('vh_content');?>
		</div>
	</div>
</section>

<?php if(is_page('emerging-leadership-board')): ?>
 <section class="donation_form_section">
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-12">
 				<div id="bbox-root"></div>
 				<script type="text/javascript">
       window.bboxInit = function () {
           bbox.showForm('9cdd0989-d151-46f8-be5d-d60893ee23cf');
       };
       (function () {
           var e = document.createElement('script'); e.async = true;
           e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
           document.getElementsByTagName('head')[0].appendChild(e);
       } ());
</script>
 			</div>
 		</div>
 	</div>
 </section>
<?php endif;?>

<?php
get_footer();
?>