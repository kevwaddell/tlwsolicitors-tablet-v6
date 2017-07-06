<?php get_header(); ?>
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
	$jobs_pg = get_page_by_title( "Vacancies" );	
	?>	
	<!-- MAIN CONTENT START -->

	<!-- MAIN TEXT SECTION -->
	<?php get_template_part( 'parts/vacancies/section', 'content' ); ?>
	
	<!-- SEND US YOUR CV SECTION -->	
	<?php get_template_part( 'parts/vacancies/section', 'send-cv' ); ?>
	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
