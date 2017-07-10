<?php 
/*
Template Name: Newsletter sign up template
*/
?>
<?php get_header(); ?>
	<!-- MAIN CONTENT START -->

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
	$sections_active = get_field('sections_active');
	 ?>	
		
		<?php if (has_post_thumbnail()) { ?>
		<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
		<?php } ?>	

		<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
		
			<?php if ($sections_active) { 
			$sections = get_field('sections'); 
			?>		

			<?php foreach ($sections as $section) { ?>
				
				<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
				<!-- FORM SECTION -->
					<?php get_template_part( 'parts/newsletter/section', 'form' ); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
				<!-- BLOG SECTION -->
					<?php get_template_part( 'parts/sections/section', 'blog' ); ?>		
				<?php } ?>
	
			<?php } ?>
		
		<?php } ?>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
