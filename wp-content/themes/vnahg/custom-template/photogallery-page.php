<?php
/*
 Display Template Name: Photo Gallery
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

<section class="page-header">
	<div class="container">
	 
				<p>Check out our collection of photos and see why choose VNA.</p>
		 
		
	</div>
</section>

<section class="photo_gallery_section">
	<div class="container">
		 <div class="row">
		 <?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args = array(
   'post_type' => 'zm_gallery',
   'posts_per_page' => 16,
   'order' => 'ASC',
   'paged' => $paged
  );
$query = new WP_Query( $args );
if ( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();
$image = get_field('gallery_image');
?>

            <div class="col-lg-3 col-md-4 col-6 thumb photo_gallery_img">
                <a data-fancybox="images" href="<?php echo $image['sizes']['large'];?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php echo $image['sizes']['medium'];?>" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
<?php 
endwhile;
?>
       </div>
      <div class="col-12">
<div class="nav-links">
  <span class="page-numbers">
  <i class="fa fa-angle-left"></i>
</span>

  <?php pagination_bar( $query ); ?>


<span class="page-numbers"><i class="fa fa-angle-right"></i> </span>

    </div>

</div> 
 <?php
wp_reset_postdata();
endif;
?>
	</div>
</section>
<div class="contact-strip clearfix text-center">
<div class="clearfix"><span class="phone"> <i class="fas fa-phone"></i> </span> </div>  
<p>Have questions about home care?  
<span> Contact us today at <a href="#"> 800.400.0981 </a></span> </p>
 </div>

<?php
get_footer();
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
</script>