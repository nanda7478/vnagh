<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
 
<div class="container">
<div class="event-sub-page">

<div class="row">
<div class="col-xs-12 col-md-12 p-40">
<span class="back"> <i class="fal fa-angle-left"></i><a href="<?php echo site_url();?>/blog/"> Back to Blog</a> </span>
</div>
</div>

 <div class="row">

<div class="col-xs-12 col-md-12">


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>

		
		
		<div class="event-content-deatils">
        			<?php twentysixteen_post_thumbnail(); ?>
<!--<div class="details-matter">-->
			<header class="entry-header">
		     <?php the_title( '<h4 class="entry-title evenheading">', '</h4>' ); ?>
	         </header>
<div class="aut-s">  
	         <div class="author_date"> <?php echo get_the_date('m. j. Y'); ?> </div>
             <div class="social-share">
             <span class="share"> Share </span>
			<?php echo do_shortcode("[social_share_button]"); ?> 
	         </div>
</div>
           	 
			<div class="post_category_name"><?php the_category() ?></div>

			<div class="entry-content">
			<?php the_content();?>
			</div>
		</div>

            <?php
			// Include the single post content template.
			//get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.

			
           
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '' .
						'<span class="screen-reader-text">' . __( 'Next post', 'twentysixteen' ) . '</span><i class="fal fa-angle-right"></i>',
					'prev_text' => '<i class="fal fa-angle-left"></i>' .
						'<span class="screen-reader-text">' . __( 'Previous post', 'twentysixteen' ) . '</span> ',
				) );
			}

			// End of the loop.
		endwhile;
		?>

	

	<?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
</div>
</div>
 
 

<div class="more_event">
<div class="row">

<div class="col-xs-12 col-md-12">
    <?php $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 4, // Number of related posts that will be shown.
    'caller_get_posts'=>1
    );

    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
    echo '<div id="related_posts"><h3>You May Also Like...</h3><div class="row">';
    while( $my_query->have_posts() ) {
    $my_query->the_post();?>

   <div class="col-lg-4 col-md-6">
    	<div class="blog_work_box">
			<div class="event-img">

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
    

    <?
    }
    echo '</div></div>';
    }
    }
    $post = $orig_post;
    wp_reset_query(); ?>
</div>
</div>
</div>



<div class="newsletter_section">
   <div class="top_heading_para">
	<h2>Sign Up for our Blog</h2>
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
</div>


<div class="contact-strip clearfix text-center">
<div class="clearfix"><span class="phone"> <i class="fas fa-phone"></i> </span> </div>	
<p>Have questions about home care?  
<span> Contact us today at <a href="tel:800.400.0981"> 800.400.0981 </a></span> </p>
 </div>


<?php get_footer(); ?>
