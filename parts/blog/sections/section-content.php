<?php  
global $post;
$post_content = get_extended( $post->post_content );
$content_main = apply_filters('the_content', $post_content['main'] );
$content_extended = apply_filters('the_content', $post_content['extended'] );
$show_post_title = get_field('show_post_title');
$show_author = get_field('show_author');

if (!empty($post_content['more_text'])) {
$more_btn_text = $post_content['more_text'];	
} else {
$more_btn_text = "Continue Reading";	
}
$section_title = "Article text";
?>
<article <?php post_class("content-section"); ?>>
	
	<script type="application/ld+json">
	{ "@context": "http://schema.org", 
	 "@type": "BlogPosting",
	 "headline": "<?php echo the_title(); ?>",
	 "description": "<?php echo get_the_excerpt(); ?>",
	 "image": {
		"@type" : "ImageObject",
	 	"url": "<?php echo $banner_feat_img[0];?>",
	 	"width": "<?php echo $banner_feat_img[1];?>",
	 	"height": "<?php echo $banner_feat_img[2];?>"
	 	},
	 "author": {
        "@type" : "Organization",
        "name" : "<?php bloginfo('name'); ?>"
        },
	 "publisher": {
        "@type" : "Organization",
        "name" : "<?php bloginfo('name'); ?>",
        "logo": {
			"@type": "ImageObject",
			"url": "https://www.tlwsolicitors.co.uk/wp-content/uploads/2016/11/tlw-logo-wide.png",
			"width": "322",
			"height": "80"
			}
        },
	 "url": "<?php the_permalink(); ?>",
	 "datePublished": "<?php echo $post->post_date; ?>",
	 "dateModified": "<?php echo $post->post_modified; ?>",
	 "mainEntityOfPage": "<?php the_permalink(); ?>"
	 }
	</script>
	
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<div class="container-fluid">
			
		<div class="row">
			<div class="col-md-10 col-md-offset-1">		
			<div class="entry">
				
				<div class="main-txt">
					
					<?php if ($show_post_title) { ?>
						<?php the_title( '<h1>', '</h1>' ) ?>
					<?php } ?>
					
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
				<button id="continue-read-btn" class="btn btn-default btn-block font-slab-serif caps"><?php echo $more_btn_text; ?><i class="fa fa-plus-circle"></i></button>
				<?php } ?>	
														
			</div>
			</div>
		</div>
		
	</div>
	
</article>