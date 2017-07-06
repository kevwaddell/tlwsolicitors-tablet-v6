<?php 
/*
Template Name: Thank page template
*/
 ?>

<?php get_header(); ?>
		

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>		
	
	<?php 
	if (isset($_GET['return-page'])) {
	$return_id = $_GET['return-page'];
	} else {
	$return_id = $post->post_parent;	
	}
	?>
	
	<!-- BANNER SECTION -->
	<?php if (has_post_thumbnail()) { ?>
		<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
	<?php } ?>	
		
	<article <?php post_class("content-section"); ?>>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="entry wide-entry">
						
						<div class="main-txt">
							<div class="well well-lg text-center thank-you-message">
								<h1>Thank you for contacting us.</h1>
								<p>A member of our team will contact you shortly.</p>
								<a href="<?php echo get_permalink($return_id) ; ?>" class="btn btn-block icon-btn">Continue</a>
							</div>
							
						</div>
																	
					</div>
				</div>
			</div>
		</div>
		
	</article>

	<?php endwhile; ?>
	<?php endif; ?>
		
		
<?php get_footer(); ?>
