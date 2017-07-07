<?php 
/*
Template Name: Legal pages template
*/
?>
<?php get_header(); ?>
	<!-- MAIN CONTENT START -->

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		
	<?php if (has_post_thumbnail()) { ?>
		<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
	<?php } ?>		
	
 	<!-- MAIN TEXT SECTION -->
	<?php get_template_part( 'parts/sections/section', 'content' ); ?>
	
	<?php get_template_part( 'parts/sections/section', 'child-links' ); ?>
			
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
