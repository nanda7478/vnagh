<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php $image = get_field('header_banner_image', get_option('page_for_posts')); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell">
 <h1>
VNA Blog
 </h1>
</div>
</div>
</div>





<div class="container">  


<div class="event-page">  

		  <div class="row"> <div class="col-sm-12"> 		<h2 class="h5"> Check out our collection of videos full of tutorials and information about VNA. </h2> </div> </div>


		  <div class="row">	

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

			?>

    <div class="col-lg-4 col-md-6">
    	<div class="blog_work_box">
			<div class="event-img">
<a href="<?php echo get_permalink() ?>">
			<?php
			if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
?>
			
			<?php //twentysixteen_post_thumbnail(); ?>
				</a>
			</div>
			<div class="event-content">
           <div class="home_post_date_tag">
			<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
			 
<div class="post_category_name"><?php the_category() ?></div>
			 
<div class="dates"><?php echo get_the_date('m. j. Y'); ?> </div>
 
			</div>
			
				<div class="home_entry-content clearfix">
			<?php $content = get_the_content();
            $trimmed_content = wp_trim_words( $content, 25, '...' ); ?>
              <p><?php echo $trimmed_content; ?></p>
              <a href="<?php echo get_permalink() ?>"> read more  <i class="fal fa-arrow-circle-right"></i> </a>
				</div>
			</div>
			 </div>
			</div>
              <?php
			endwhile;
			?>

</div>

<div class="nav-links">
	<span class="page-numbers">
	<i class="fa fa-angle-left"></i>
</span>


<?php
		echo paginate_links( array(
			'type'      => 'post',
			'prev_text' => '<i class="fa fa-angle-left"></i>',
			'next_text' => '<i class="fa fa-angle-right"></i>',
		) );
		?>
	<span class="page-numbers"><i class="fa fa-angle-right"></i> </span>

		</div>

	</div>

   <div class="newsletter_section">
   <div class="top_heading_para">
	<h2 class="block-tittle">Sign Up for our Blog</h2>
	</div>
   <form>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
  </div>
   <div class="form-group">
    <input type="email" class="form-control" placeholder="Email Address">
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
	</div>




	</div>
	<div class="contact-strip clearfix text-center">
<div class="clearfix"><span class="phone"> <i class="fas fa-phone"></i> </span> </div>  
<p>Have questions about home care?  
<span> Contact us today at <a href="tel:800.400.0981"> 800.400.0981 </a></span> </p>
 </div>
<?php get_footer(); ?>
