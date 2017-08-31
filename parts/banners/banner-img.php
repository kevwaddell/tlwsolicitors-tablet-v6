<?php 
global $post;
global $img_post;
if (!isset($img_post)) {
$img_post = get_the_ID();	
}
$page_icon = get_field('page_icon', $post->ID);	

if (empty($page_icon)) {
$page_icon = get_field('page_icon', $post->post_parent);	
}
?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)">
					<header class ="banner-title font-slab-serif caps">
						<?php echo the_title(); ?>
					</header>
				</div>
				<i class="fa <?php echo $page_icon; ?>"></i>
			</div>
		</div>
	</div>
</section>
<div class="rule"></div>