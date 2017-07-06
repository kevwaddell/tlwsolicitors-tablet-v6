<?php 
/*
Template Name: Videos archive page template
*/
 ?>
 
 <?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
	$sections_active = get_field('sections_active');
	?>		
		
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<?php if ($sections_active) { 
	$sections = get_field('sections'); 
	?>		
	
		<?php foreach ($sections as $section) { ?>
		
			<?php if ($section['acf_fc_layout'] == 'video-section') { ?>
			<!-- VIDEO SECTION -->
				<?php get_template_part( 'parts/sections/section', 'video' ); ?>	
			<?php } ?>
							
			<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
			<!-- FORM SECTION -->
				<?php get_template_part( 'parts/sections/section', 'form' ); ?>		
			<?php } ?>
				
		<?php } ?>
	
		<?php } ?>
		
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
