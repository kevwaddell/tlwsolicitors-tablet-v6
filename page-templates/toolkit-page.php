<?php 
/*
Template Name: Toolkit page
*/
 ?>

<?php get_header(); ?>	
	
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
$sections_active = get_field('sections_active');
$slides_active = get_field('tk_slides_active');
?>	

	<!-- BANNER SECTION -->
	<?php if (has_post_thumbnail() ) { ?>

	<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
				
	<?php } ?>
	<!-- FREEPHONE NUMBER SECTION -->	
	
	<?php get_template_part( 'parts/sections/section', 'content' ); ?>	
	

	<!-- TOOLKIT SLIDES SECTION -->
	<?php if ($slides_active) { ?>
	<?php get_template_part( 'parts/sections/section', 'toolkit-info' ); ?>		
	<?php } ?>
	
	<?php if ($sections_active) { 
	$sections = get_field('sections'); 
	?>		
	
		<?php foreach ($sections as $section) { ?>
			
			<?php if ($section['acf_fc_layout'] == 'faqs-section') { ?>
			<!-- FAQ'S SECTION -->
				<?php get_template_part( 'parts/sections/section', 'faqs' ); ?>		
			<?php } ?>
			
			<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
			<!-- FORM SECTION -->
				<?php get_template_part( 'parts/sections/section', 'form' ); ?>	
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
