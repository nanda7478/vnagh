<?php
/*
 Display Template Name: Video Gallery
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="videoWrapper">
			<div class="iframe-container">
			<iframe id="iframe" src=""></iframe>
			</div>
			<div class="model_video_content">
		<h4></h4>
		<div class="vide_cont_sec"></div>
        <div class="play_video">
		 <a id="clickMe" class="_jsClickOnVideo" href="javascript:void(0)"> Play Video</a>
		 </div>
	</div>
        </div>      
        </div>
    
    </div>
  </div>
</div>



<?php endwhile;?>


<section class="video_gallery_section">
 
<section class="page-header">
	<div class="container">
	 
				<p>Check out our collection of photos and see why choose VNA.</p>
		 
		
	</div>
</section>

	<div class="video_gallery_wraper">
	<div class="container">
		<div class="row">
		<?php
		$i=1;
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args = array(
   'post_type' => 'video-galleries',
   'posts_per_page' => 4,
   'order' => 'ASC',
   'paged' => $paged
  );
$query = new WP_Query( $args );
if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	<div class="col-lg-6 blocks col-md-6">
		<div class="video_box">
		<div class="video_image">
		<img src="<?php echo $image[0]; ?>">
		<div class="play_icon t-center">
		 <a class="play" href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="youTubeVideo" data-src="<?php the_field('video_url');?>" data-title="<?php the_title(); ?>" data-content="<?php the_content();?>">  <i class="fas fa-play-circle"></i> </a>
		 </div>
		 </div>
		<!--<div class="case_video">
	 <iframe  src="<?php the_field('case_study_video_url');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div> -->
       <div class="video_content">
		<h4><?php the_title(); ?></h4>
		<?php $content = get_the_content();
            $trimmed_content = wp_trim_words( $content, 35 ); ?>
       <p> <?php echo $trimmed_content; ?> </p>

       
		 <a class="play-a" href="javascript:;" data-toggle="modal" data-target="#exampleModal" data-src="<?php the_field('video_url');?>" data-title="<?php the_title(); ?>" data-content="<?php the_content();?>"> Play Video</a>
		 
	</div>
	</div>
	</div>

<?php 
$i++;
endwhile;
?>
	<div class="col-12">
<div class="nav-links">
	<span class="page-numbers">
	<i class="fa fa-angle-left"></i>
</span>

  <?php pagination_bar( $query ); ?>


<span class="page-numbers"><i class="fa fa-angle-right"></i> </span>

		</div>

</div> 


<?php wp_reset_postdata();
endif;
?> 
		</div>
	</div>
</div>
</section>

<div class="contact-strip clearfix text-center">
<div class="clearfix"><span class="phone"> <i class="fas fa-phone"></i> </span> </div>  
<p>Have questions about home care?  
<span> Contact us today at <a href="tel:800.400.0981"> 800.400.0981 </a></span> </p>
 </div>

 

<?php
get_footer();
?>

<script type="text/javascript">
	$(document).ready(function(){
		$('.play').on('click', function(){
			var src = $(this).data('src');
			var title = $(this).data('title');
			var content = $(this).data('content');
			$("#iframe").attr("src", src);
			$(".model_video_content h4").html(title);
			$(".model_video_content .vide_cont_sec").html(content);
		})
	})
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.play-a').on('click', function(){
			var src = $(this).data('src');
			var title = $(this).data('title');
			var content = $(this).data('content');
			$("#iframe").attr("src", src);
			$(".model_video_content h4").html(title);
			$(".model_video_content .vide_cont_sec").html(content);
		})
	})
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#clickMe').on('click', function() {
    $("#iframe")[0].src += "?autoplay=1";
   });
});
</script>

<script type="text/javascript">
      $('.modal').on('hide.bs.modal', function() {
      	$("#iframe").attr("src", '');
  /*var memory = $(this).html();
  $(this).html(memory);*/
})
</script>
