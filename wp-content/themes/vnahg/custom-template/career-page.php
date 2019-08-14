<?php
/*
 Display Template Name: Career
*/
get_header();
?>


<section class="contact_page_section clearfix">
	<div class="container">
	<div class="top_heading_para" style="padding-bottom: 0px; text-align: left;">
	<?php while(have_posts()): the_post();?>
	<h2><?php the_title();?></h2>
 <?php endwhile;?>
	</div>
	</div>
</section>



<section class="jobs_search_section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<iframe id="icims_content_iframe" name="icims_content_iframe" src="https://careers-vnahg.icims.com/jobs/intro?branding=live&amp;in_iframe=1" scrolling="no" title="iCIMS Content iFrame" marginwidth="0" marginheight="0" width="100%" height="709" frameborder="0"></iframe>
</div>
</div>
</div>
</section>

<?php
get_footer();
?>