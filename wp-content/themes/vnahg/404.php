<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="container">
<div class="row align-self-center">
<div class="col-sm-12">
<div class="round">
	<div class="text">
<span> 404 Error </span>
<p> Oops! Looks like <br /> something went wrong. </p>
		</div>		</div><!-- .page-header -->
</div>
</div>
				<div class="go-home"><a href="<?php echo site_url();?>"> Go Back Home</a></div><!-- .page-content -->

  
				 </div>
				

			</section><!-- .error-404 -->
<div class="round-3"> </div>
		</main><!-- .site-main -->

		 

	</div><!-- .content-area -->

 <?php get_footer(); ?>
