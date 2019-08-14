<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php if(!is_singular('tribe_events')){ ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo site_url();?>/wp-content/uploads/2019/03/vna_img_events_hed.jpg);">
 <div class="container inner-pages-content-table">
 <div id="post-42" class="inner-pages-content-table-cell">
 <h1>Events</h1>
</div>
</div>
</div>
<?php } ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php if(!is_singular('tribe_events')){ ?>
	<section class="events_title_section">
	<div class="container">
		<div class="home_specialties_wrap">
			<div class="top_heading_para">
				<h2>What's New at VNA?</h2>
			</div>
		</div>
	</div>
</section>
<?php } ?>
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
<?php if(!is_singular('tribe_events')){ ?>
<div class="contact-strip clearfix text-center">
<div class="clearfix"><span class="phone"> <i class="fas fa-phone"></i> </span> </div>	
<p>Have questions about home care?  
<span> Contact us today at <a href="tel:800.400.0981">800.400.0981 </a></span> </p>
 </div>
 <?php } ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
