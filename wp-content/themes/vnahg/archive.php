<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="container">  


<div class="event-page">  

		  <div class="row"> <div class="col-sm-12"> 		<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header> </div> </div>


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
			 
<div class="dates"><?php echo get_the_date('M j, Y'); ?> </div>
 
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
<?php
		echo paginate_links( array(
			'type'      => 'post',
			'prev_text' => '<i class="fa fa-angle-left"></i>',
			'next_text' => '<i class="fa fa-angle-right"></i>',
		) );
		?>
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

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
