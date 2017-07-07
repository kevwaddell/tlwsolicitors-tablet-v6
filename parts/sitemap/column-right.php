<?php 
$company_page = get_post(12);
$company_page_icon = get_field('page_icon', $company_page->ID);

$company_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $company_page->ID,
'order'			=> 'ASC',
'posts_per_page' => -1,
);

$company_pages = get_posts($company_args);

$rescources_args = array(
'post_type'		=> 'page',
'orderby'		=> 'title',
'include'		=> array(10, 95),
'order'			=> 'ASC'
);

$rescources_pages = get_posts($rescources_args);

$legal_page = get_page_by_title('Legal Notices');
$legal_page_icon = get_field('page_icon', $legal_page->ID);

$legal_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $legal_page->ID,
'order'			=> 'ASC'
);

$legal_pages = get_posts($legal_args);

$news_page_ID = get_option('page_for_posts');
$news_page = get_page($news_page_ID);
$news_page_icon = get_field('page_icon', $news_page->ID);

$topics_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'hierarchical'       => 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'desc'
); 
$topics = get_categories($topics_args);

$subjects_args = array(
	'type'			=> 'post',
	'hide_empty'	=> 0,
	'parent'		=> 0,
	'orderby'		=> 'meta_value',
	'order'			=> 'ASC'
); 
$subjects = get_tags($subjects_args);

//echo '<pre>';print_r($topics);echo '</pre>';

 ?>
<div class="col-xs-6">
	<?php if ($services_for_biz) { ?>
	
	<a href="<?php echo get_permalink($for_biz_pg); ?>" class="header-link"></a>
	

	<?php foreach ($services_for_biz as $service) { ?>
	
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
			<a href="<?php echo get_permalink($service->ID); ?>" class="header-link"><?php echo $service->post_title; ?></a></h4>
			
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
			
		<?php } ?>
		
			</ul>
		
		</div>
	
	<?php } ?>
	
	<?php } ?>
	
	<a href="<?php echo get_permalink($company_page->ID); ?>" class="header-link"><?php echo $company_page->post_title; ?></a>
	
	<?php if ($company_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($company_pages as $company_page) { ?>
				<li><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
						
	<h3>General</h3>
	
	<?php if ($rescources_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($rescources_pages as $rescources_page) { ?>
				<li><a href="<?php echo get_permalink($rescources_page->ID); ?>"><?php echo $rescources_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<a href="<?php echo get_permalink($legal_page->ID); ?>" class="header-link"><?php echo $legal_page->post_title; ?></a>
	
	<?php if ($legal_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($legal_pages as $legal_page) { ?>
									 
				<li><a href="<?php echo get_permalink($legal_page->ID); ?>"><?php echo $legal_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<?php if ($topics) { ?>
		<a href="<?php echo get_permalink($news_page->ID); ?>" class="header-link"><?php echo $news_page->post_title; ?>: Categories</a>
		
		<div class="list-block">
			<ul class="list-unstyled">
		<?php foreach ($topics as $topic) { ?>

				<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
			
		<?php } ?>
			</ul>
		</div>
			
	<?php } ?>
	
	<?php if ($subjects) { ?>
		<h3><?php echo $news_page->post_title; ?>: Tags</h3>
		
		<div class="list-block" style="text-transform: capitalize;">
			<?php wp_tag_cloud('smallest=14&largest=14&unit=px&separator= | '); ?>
		</div>
			
	<?php } ?>
	
</div>