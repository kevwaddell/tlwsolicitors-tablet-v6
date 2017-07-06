<?php get_header(); ?>

<?php
$jobs_pg = get_page_by_title( "Vacancies" );
$content = apply_filters( 'the_content', $jobs_pg->post_content );
?>

<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>

<!-- VACANCIES LIST SECTION -->	
<?php get_template_part( 'parts/vacancies/section', 'post-list' ); ?>

<!-- SEND US YOUR CV SECTION -->	
<?php get_template_part( 'parts/vacancies/section', 'send-cv' ); ?>

<?php get_footer(); ?>
