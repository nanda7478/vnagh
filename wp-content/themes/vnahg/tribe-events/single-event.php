<section class="events_single_section">
	<div class="container">
	<div class="row">
<div class="col-xs-12 col-md-12 p-40">
<span class="back"> <a href="<?php echo site_url();?>/event/"><i class="fal fa-angle-left"></i> Back to All Events </a></span>
</div>
</div>
	 
		<div class="row">
		<?php
		while ( have_posts() ) : the_post();

		$startDate =  tribe_get_start_date( $post, false, 'F j, Y g:i A' );
		?>
		   
           <div class="col-lg-12">
           <div class="leading_single_content display-table">
				<div class="display-table-cell">
				<h2><?php the_title();?></h2>
			     <p><?php echo $startDate;?></p>
				</div>
			</div>
			<?php $image = get_field('events_head_image');?>
				<div class="leading_single_img">
				<img src="<?php echo $image['url'];?>">
			</div>
            
            <div class="event_content">
            	<?php the_content();?>
            </div>

			</div>

         <?php
         if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'tribe_events' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '' .
						'<span class="screen-reader-text">' . __( 'Next post', 'twentysixteen' ) . '</span><i class="fal fa-angle-right"></i>',
					'prev_text' => '<i class="fal fa-angle-left"></i>' .
						'<span class="screen-reader-text">' . __( 'Previous post', 'twentysixteen' ) . '</span> ',
				) );
			}
			?>
		<?php endwhile;?>
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
</section>

