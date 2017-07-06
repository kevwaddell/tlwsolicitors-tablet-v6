<?php  
global $post;
$post_content = get_extended( $post->post_content );
$content_main = apply_filters('the_content', $post_content['main'] );
$content_extended = apply_filters('the_content', $post_content['extended'] );

if (!empty($post_content['more_text'])) {
$more_btn_text = $post_content['more_text'];	
} else {
$more_btn_text = "Continue Reading";	
}
$section_title = "Vacancy details";

//Vacancy details
$job_title = get_field('job_title');
$job_ref = get_field('job_ref');

$today = date('Ymd');
$job_display_to_date = get_field( 'job_display_to_date');
?>
<article <?php post_class("content-section"); ?>>	
	
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<div class="container-fluid">
			
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1">
			<div class="entry">
				
				<div class="main-txt">
					
					<?php if ($job_display_to_date < $today) { ?>
					<span class="label label-danger font-slab-serif caps">
						Position closed
					</span>
					<?php } else { ?>
					<span class="label label-primary font-slab-serif caps">
						Position open
					</span>
					<?php } ?>
					
					<?php if ( !empty($job_title) ) { ?>
					 	<h1><?php echo $job_title; ?> <small>[ref:<?php echo $job_ref; ?>]</small></h1>	
					<?php } ?>

					<?php get_template_part( 'parts/vacancies/vacancy', 'details' ); ?>				
										
					<?php if (!empty($post_content['extended'])) { ?>
					<?php echo $content_main;  ?>
					<div id="content-extra" class="closed">
						<div id="content-extra-inner">
							<button id="close-content-extra-btn" class="btn btn-default"><i class="fa fa-times-circle"></i><span class="sr-only">Close</span></button>
							<?php echo $content_extended;  ?>
						</div>
					</div>
					
					<?php } else { ?>
					<?php the_content(); ?>
					<?php } ?>
				</div>
				
				<?php if (!empty($post_content['extended'])) { ?>
				<button id="continue-read-btn" class="btn btn-default btn-block font-slab-serif caps"><?php echo $more_btn_text; ?><i class="fa fa-plus"></i></button>
				<?php } ?>
											
			</div>
			</div>
		
		</div>
	</div>
	
</article>