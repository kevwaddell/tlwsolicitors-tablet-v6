<?php get_header(); ?>	
	
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
	$sections_active = get_field('sections_active');
	$banner_active = get_field('banner_active');
?>	
	
	<!-- BANNER SECTION -->
	<?php if ($banner_active) { ?>
		
		<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
		
	<?php } ?>	

	<!-- MAIN TEXT SECTION -->
	<?php get_template_part( 'parts/sections/section', 'content' ); ?>	
	
	<?php if ($sections_active) { 
	$sections = get_field('sections'); 
	?>		
	
		<?php foreach ($sections as $section) { ?>
		
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
