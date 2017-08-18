<?php 
/*
Template Name: Sitemap page
*/
 ?>

<?php get_header(); ?>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	
<?php if (has_post_thumbnail()) { ?>
	<?php get_template_part( 'parts/banners/banner', 'img' ); ?>			
<?php } ?>	
		
<article <?php post_class("content-section"); ?>>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">	
				<div class="entry wide-entry">		
					<div class="main-txt">
						<?php the_content(); ?>	
					</div>
				</div>
				
				<div class="search-form-wrap text-center">
				<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
</article>

<div class="rule"></div>
<section id="site-map-lists">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="section-header">Pages</h2>
				<div class="row">
				<!-- Left -->
				<?php get_template_part( 'parts/sitemap/column', 'left-pages' ); ?>	
				
				<!-- Right -->
				<?php get_template_part( 'parts/sitemap/column', 'right-pages' ); ?>
				
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="section-header">Articles</h2>
				<div class="row">
				<!-- Left -->
				<?php get_template_part( 'parts/sitemap/column', 'left-articles' ); ?>	
				
				<!-- Right -->
				<?php get_template_part( 'parts/sitemap/column', 'right-articles' ); ?>
				
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>
<?php endif; ?>
	
<?php get_footer(); ?>
