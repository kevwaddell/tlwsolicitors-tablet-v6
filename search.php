<?php get_header(); ?>

<?php 
$allsearch = new WP_Query("s=$s&showposts=-1"); 
wp_reset_query();
$search_count = $allsearch->post_count;
$search_query = get_search_query(); 
//echo '<pre>';print_r($posts);echo '</pre>';
?>
	
<article class="page">
	<div class="container-fluid">	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 class="text-center" style="margin-top: 20px;">Search Results</h1>
				<p class="intro text-center">You Searched for: "<?php the_search_query(); ?>"<br> Results: <?php echo $search_count; ?></p>
				
				<div class="search-form-wrap">
				<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>
</article>

<section class="search-list">

	<?php if ( have_posts() ): ?>
	
	<div class="post-list">
					
		<div class="container-fluid">	
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php while ( have_posts() ) : the_post();
					$date = get_the_date('l - jS F - Y');
					 ?>	

					<article <?php post_class(); ?>>
						<?php if ($post->post_type == 'post') { ?>
						<span class="label label-default">Article</span>						
						<?php } ?>
						<?php if ($post->post_type == 'page') { ?>
						<span class="label label-default">Page</span>						
						<?php } ?>
						<?php if ($post->post_type == 'tlw_vacancies_cpt') { ?>
						<span class="label label-default">Vacancies</span>						
						<?php } ?>
						<h4><?php the_title(); ?></h4>
						
						<?php if ($post->post_type == 'post') { ?>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $date; ?></time>
						<?php } ?>
								
						<?php the_excerpt(); ?>	
							
						<a href="<?php esc_url( the_permalink() ); ?>" title="View <?php the_title_attribute(); ?> article" class="btn btn-default btn-block" rel="bookmark">
						View
						<?php if ($post->post_type == 'post') { ?>
						Article						
						<?php } ?>
						<?php if ($post->post_type == 'page') { ?>
						Page					
						<?php } ?>
						<?php if ($post->post_type == 'tlw_vacancies_cpt') { ?>
						Vacancies					
						<?php } ?>
						</a>
						
					</article>
					<div class="rule"></div>
	
					<?php endwhile; ?>
				</div>
			</div>
		</div>	

	</div><!-- End List -->
	
	<div class="page-links" style="margin-bottom: 40px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php wp_pagenavi(); ?>
				</div>
			</div>
		</div>
	</div>		
	
	<?php else: ?>
	<div class="container-fluid">	
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
			<div class="well well-lg posts-message">
				<h3 class="text-center">Sorry</h3>
				<p class="text-center">There are no search results for "<?php echo $search_query; ?>". Please try again.</p>
			</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

</section>

<?php get_footer(); ?>
