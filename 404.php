<?php get_header(); ?>

	<?php
	$site_map_pg_ID = get_page_id('site-map');
	?>	
	<?php if (has_post_thumbnail($site_map_pg_ID)) { 
	$post_thumbnail_id = get_post_thumbnail_id( $site_map_pg_ID );
	$wide_banner_img = wp_get_attachment_image_src($post_thumbnail_id, 'feat-img-ex-wide' );
	//echo '<pre>';print_r($wide_banner_img);echo '</pre>';
	?>
		
	<section id="slim-top-banner" class="top-banner-img-slim">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<header class ="banner-title font-slab-serif caps">
						404 Page not found
					</header>
					<div class="img" style="background-image: url(<?php echo $wide_banner_img[0];?>)"></div>
					<i class="fa fa-exclamation-triangle"></i>
				</div>
			</div>
		</div>
	</section>			
		
	<?php } ?>	
	
		<!-- FREEPHONE NUMBER SECTION -->
		<?php get_template_part( 'parts/global/freephone', 'number' ); ?>
		<?php get_template_part( 'parts/global/color', 'strip' ); ?>	
				
		<article <?php post_class("content-section"); ?>>
		
			<div class="container-fluid">	
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="entry">
				
				<div class="main-txt">
				
					<h1 class="text-center">Sorry! We couldn't find it.</h1>
					
					<div class="text-center" style="margin-bottom: 20px;">
					
						<p><strong>You have requested a page or file which does not exist.</strong></p>
						
						<p>Here are a few options to find what you are looking for.</p>
						
						<p><strong class="red-txt">1)</strong> Double check the web address for typos.<br>
						<strong class="red-txt">2)</strong> Head back to our <a href="<?php echo get_option('home'); ?>" title="Home page">home page</a>.<br>
						<strong class="red-txt">3)</strong> Visit our website <a href="<?php echo get_permalink($site_map_pg_ID); ?>" title="Home page">sitemap here</a>.<br>
						<strong class="red-txt">4)</strong> Use our search box below.</p>
					
					</div>
					
					<div class="search-form-wrap text-center">
					<?php get_search_form(); ?>
					</div>
				
				</div>
			
			</div>
					</div>
				</div>
			</div>	
		
		</article>

<?php get_footer(); ?>
