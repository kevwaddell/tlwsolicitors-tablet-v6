<?php 
$services_pgs = get_field('global_main_services', 'options');
//echo '<pre>';print_r($services_for_you_pgs);echo '</pre>';

$services_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'include'		=> $services_pgs,
'order'			=> 'ASC'
);

$services = get_posts($services_args);

$videos_pg_id = get_page_id('videos');
$downloads_pg_id = get_page_id('downloads');

$media_args = array(
'post_type'		=> 'page',
'orderby'		=> 'title',
'include'		=> array($videos_pg_id, $downloads_pg_id),
'order'			=> 'ASC'
);

$media_pages = get_posts($media_args);
?>

<div class="col-xs-6">
	
	<?php if ($media_pages) { ?>
		
		<h3>TLW Media</h3>
	
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($media_pages as $media_page) { ?>
				<li><a href="<?php echo get_permalink($media_page->ID); ?>"><?php echo get_the_title($media_page->ID); ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<?php if ($services) { ?>
	
	<?php foreach ($services as $service) { ?>
	
	<?php 
	$icon = get_field('page_icon', $service->ID);
	
	if (!empty($icon)) {
	$icon_tag = '<i class="icon fa '.$icon.'"></i>';	
	}
	
	$service_args = array(
	'posts_per_page' => -1,
	'post_type'		=> 'page',
	'orderby'		=> 'menu_order',
	'post_parent'	=> $service->ID,
	'order'			=> 'ASC'
	);
	
	$service_children = get_posts($service_args);
	 ?>
	
		<div class="list-block">
			<a href="<?php echo get_permalink($service->ID); ?>" class="header-link"><?php echo $service->post_title; ?></a>
			
		<?php if ($service_children) { ?>
			
			<ul class="list-unstyled">
			
			<?php foreach ($service_children as $service_child) { 
			$gc_args = array(
			'posts_per_page' => -1,
			'post_type'		=> 'page',
			'orderby'		=> 'menu_order',
			'post_parent'	=> $service_child->ID,
			'order'			=> 'ASC'
			);
			$service_gchildren = get_posts($gc_args);
			?>
			<li><a href="<?php echo get_permalink($service_child->ID); ?>"><?php echo $service_child->post_title; ?></a></li>
				<?php if ($service_gchildren) { ?>
					<?php foreach ($service_gchildren as $g_child) { ?>
					<li><a href="<?php echo get_permalink($g_child->ID); ?>"><?php echo get_the_title($g_child->ID); ?></a></li>
					<?php } ?>
				<?php } ?>

			<?php } ?>
				
			</ul>	
			
		<?php } ?>

		</div>
	
	<?php } ?>

	<?php } ?>
					
</div>