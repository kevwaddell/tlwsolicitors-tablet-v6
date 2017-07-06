<?php get_header('landing'); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php
$form = get_field('lp_form');
$form_active = get_field('lp_form_active');
$all_forms_active = get_field('all_forms_active', 'option');
 ?>			
	<!-- BANNER SECTION -->	
	<?php get_template_part( 'parts/landingPage/banner', 'img' ); ?>	
		
 	<!-- MAIN TEXT SECTION -->			 	
 	<?php get_template_part( 'parts/landingPage/section', 'content' ); ?>
 	
 	<?php if ($form_active && $all_forms_active) { ?>
	<?php get_template_part( 'parts/landingPage/contact', 'form' ); ?>		
	<?php } ?>
		
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer('landing'); ?>