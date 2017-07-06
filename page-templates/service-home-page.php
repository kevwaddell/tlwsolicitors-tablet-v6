<?php 
/*
Template Name: Service Home page
*/
 ?>

<?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
	$sections_active = get_field('sections_active');
	$banner_active = get_field('banner_active');
	$banner_type = get_field('banner_type');	
	?>	
		
	<?php if ($banner_active) { ?>
		<?php if ($banner_type == "video") { ?>
		<?php get_template_part( 'parts/banners/banner', 'video' ); ?>
		<?php } ?>
				
		<?php if ($banner_type == "img") { ?>
		<?php get_template_part( 'parts/banners/banner', 'img' ); ?>	
		<?php } ?>
		
		<?php if ($banner_type == "services") { ?>
		<?php get_template_part( 'parts/banners/banner', 'services' ); ?>	
		<?php } ?>			
	<?php } ?>			
	
		<!-- MAIN TEXT SECTION -->
		<?php get_template_part( 'parts/sections/section', 'content' ); ?>	
		
		<?php if ($sections_active) { 
		$sections = get_field('sections'); 
		?>		
		
			<?php foreach ($sections as $section) { ?>
		
				<?php if ($section['acf_fc_layout'] == 'feedback-section') { ?>
				<!-- FEEDBACK SECTION -->
					<?php get_template_part( 'parts/sections/section', 'feedback' ); ?>		
				<?php } ?>
				
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
				
				<?php if ($section['acf_fc_layout'] == 'downloads-section') { ?>
				<!-- DOWNLOADS SECTION -->
					<?php get_template_part( 'parts/sections/section', 'downloads' ); ?>			
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'video-section') { ?>
				<!-- VIDEO SECTION -->
					<?php get_template_part( 'parts/sections/section', 'video' ); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'toolkit-section') { ?>
				<!-- TOOLKIT SECTION -->
					<?php get_template_part( 'parts/sections/section', 'toolkit' ); ?>		
				<?php } ?>

			<?php } ?>
		
		<?php } ?>

	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
