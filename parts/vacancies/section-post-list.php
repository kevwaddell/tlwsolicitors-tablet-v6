<?php 
global $content;
//echo '<pre class="debug">';print_r($wp_query);echo '</pre>';
$post_type = get_query_var('post_type');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_query_var('posts_per_page');
$today = date('Ymd');

$args = array(
'post_type' => $post_type,
'posts_per_page' => $posts_per_page,
'order'	=> 'DESC',
'orderby' => 'date',
'paged'	=> $paged,
'meta_key' => 'job_display_to_date',
'meta_value' => $today,
'meta_compare' => '>'
);
	
$wp_query = new WP_Query( $args );

$section_title = "Positions available";	
$post_count = $wp_query->found_posts;
?>
<div class="rule"></div>
<section id="vacancies-section" class="pg-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="section-header"><?php echo $section_title; ?></h2>
				<div class="lg-intro">
				<?php echo $content; ?>
				</div>
				<div class="rule"></div>
				<?php if ( have_posts() ): ?>
				<?php while ( have_posts() ) : the_post();
				$date = get_the_date('l - jS F - Y');
				$job_title = get_field('job_title');
				$job_ref = get_field('job_ref');
				$short_description = get_field('short_description');
				$job_closing_date = get_field( 'job_closing_date');
				?>	
				<article <?php post_class(); ?>>
					<div class="close-date text-center">Closing date: <?php echo (empty($job_closing_date)) ? "TBA": date('d.m.Y', strtotime($job_closing_date) ); ?></div>
					<h4><?php echo $job_title; ?> -  <small class="ref">[ref: <?php echo $job_ref; ?>]</small></h4>
					<div class="description">
						<?php echo $short_description; ?>
					</div>
					<a href="<?php esc_url( the_permalink() ); ?>" class="btn btn-default btn-block font-slab-serif caps" title="View: <?php the_title_attribute(); ?> vacancy" rel="bookmark">View vacancy</a>
				</article>
				<?php endwhile; ?>
			<?php if ($post_count > $posts_per_page) { ?>
			<div class="vacs-page-links">	
				<?php wp_pagenavi(); ?>
			</div>	
			<?php } ?>	

		<?php else: ?>
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3">
					<div class="well well-lg">
						<h3 class="text-center">There are no positions available at the moment</h3>
						<p class="text-center">Please send us your CV and we will keep you on file for when a relevant post comes available.</p>
					</div>		
				</div>
			</div>
		<?php endif; ?>
			</div>
		</div>
	</div>
</section>