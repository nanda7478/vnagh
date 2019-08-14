<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class="container-fluid">
		 <div class="row">
		 	<div class="col-md-3">
            <div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
		 	<?php dynamic_sidebar('sidebar-2');?>
		 	</div>
		 	<div class="col-md-9 col-lg-7">
		 		<?php dynamic_sidebar('sidebar-4');?>
		 		<?php dynamic_sidebar('sidebar-5');?>
		 		<?php dynamic_sidebar('sidebar-6');?>
		 	</div>
		 	<div class="col-lg-2 col-md-12">
		 		<div class="last-f">
		 		<?php dynamic_sidebar('sidebar-3');?>
		 		<?php echo do_shortcode('[gtranslate]'); ?>
		 		<?php dynamic_sidebar('sidebar-9');?>
		 		 </div>
		 	</div>
		 </div>
            
            <div class="row">
            <div class="col-lg-12">
			<div class="site-info text-center">
				<?php dynamic_sidebar('sidebar-7');?>
			</div><!-- .site-info -->
			</div>
			</div>
         </div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".menu-scroll-down").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".site-header").addClass("darkHeader");
    } else {
        $(".site-header").removeClass("darkHeader");
    }
});

</script>

