<?php get_header(); ?>

<?php
$news_page_id = get_option('page_for_posts');
?>

<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>

<!-- CATEGORY LIST -->
<?php get_template_part( 'parts/blog/posts', 'list' ); ?>	

<!-- PAGE DROPDOWNS SECTION -->
<?php get_template_part( 'parts/blog/archive', 'dropdowns' ); ?>			

<?php get_footer(); ?>
