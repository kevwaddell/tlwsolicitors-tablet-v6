<?php get_header(); ?>

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
	$all_forms_active = get_field('all_forms_active', 'option');
	$form_active = get_field('add_form');	
	$related_posts_active = get_field('related_posts_active');
	?>	
	<!-- MAIN CONTENT START -->
		
		<?php if (has_post_thumbnail()) { ?>
		<?php get_template_part( 'parts/blog/banner', 'single' ); ?>	
		<?php } ?>
		
		<?php get_template_part( 'parts/blog/sections/section', 'content' ); ?>
		
		<?php if ($gallery_active) { ?>
		<?php get_template_part( 'parts/blog/sections/section', 'gallery' ); ?>
		<?php } ?>
		
		<?php if ($form_active && $all_forms_active) { ?>
		<?php get_template_part( 'parts/blog/sections/section', 'form' ); ?>
		<?php } ?>
		
		<?php if ($related_posts_active) { ?>
		<?php get_template_part( 'parts/blog/sections/section', 'related-posts' ); ?>
		<?php } ?>
	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
