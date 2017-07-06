<?php  
//echo '<pre class="debug">';print_r($banner_bg_img);echo '</pre>';
$hp_banner_quick_links = get_field('hp_banner_quick_links', 'option');	
$links_total = count($hp_banner_quick_links);
?>
<section id="top-banner">
	<div class="container-fluid">
	<ul class="text-center list-unstyled clearfix banner-links-imgs links-total-<?php echo $links_total; ?>">
	<?php foreach ($hp_banner_quick_links as $bl) { 
	$thumb_id = get_post_thumbnail_id($bl['link_page']);
	$bg_full_src = wp_get_attachment_image_src($thumb_id, 'full' );
	$bg_thumb_src = wp_get_attachment_image_src($thumb_id, 'thumbnail' );	
	?>
		<li class="pull-left">
			<a href="<?php echo get_permalink($bl['link_page']); ?>" class="services-nav-link">
				<span class="img has-bg-img" data-src="<?php echo $bg_full_src[0]; ?>" style="background-image: url(<?php echo $bg_thumb_src[0]; ?>)"></span>
				<span class="title"><span><?php echo get_the_title($bl['link_page']); ?></span></span>
			</a>
		</li>
	<?php } ?>
	</ul>
	</div>
</section>