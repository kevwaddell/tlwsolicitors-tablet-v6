<?php  
global $post;
global $banner_type;	
$post_content = get_extended( $post->post_content );
$content_main = apply_filters('the_content', $post_content['main'] );
$content_extended = apply_filters('the_content', $post_content['extended'] );

if (!empty($post_content['more_text'])) {
$more_btn_text = $post_content['more_text'];	
} else {
$more_btn_text = "Continue Reading";	
}
?>
<article <?php post_class("content-section"); ?>>
	
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<?php if ($post->post_parent == 0 && $banner_type == 'services') { ?>
				<div class="service-label font-slab-serif caps txt-col-gray"><?php the_title(); ?></div>		
				<?php } ?>

				<div class="entry">
				
					<div class="main-txt">
						<?php if (!empty($post_content['extended'])) { ?>
						<?php echo $content_main;  ?>
						<div id="content-extra" class="closed">
							<div id="content-extra-inner">
								<button id="close-content-extra-btn" class="btn btn-default"><i class="fa fa-times"></i><span class="sr-only">Close</span></button>
								<?php echo $content_extended;  ?>
							</div>
						</div>
						
						<?php } else { ?>
						<?php the_content(); ?>
						<?php } ?>
					</div>
															
				</div>

		<?php if (!empty($post_content['extended'])) { ?>
		<button id="continue-read-btn" class="btn btn-default btn-block font-slab-serif caps"><?php echo $more_btn_text; ?><i class="fa fa-plus"></i></button>
		<?php } ?>

			</div>
		</div>
	</div>
	
</article>