<?php 
$company_page_id = get_page_id('about-tlw-solicitors');
$company_page = get_post($company_page_id);

$company_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $company_page->ID,
'order'			=> 'ASC',
'posts_per_page' => -1,
);

$company_pages = get_posts($company_args);

$contact_pg_id = get_page_id('contact-us');
$mailing_list_pg_id = get_page_id('join-our-mailing-list');

$rescources_args = array(
'post_type'		=> 'page',
'orderby'		=> 'title',
'include'		=> array($contact_pg_id, $mailing_list_pg_id),
'order'			=> 'ASC'
);

$rescources_pages = get_posts($rescources_args);

$legal_page = get_page_by_title('Legal Notices');

$legal_args = array(
'post_type'		=> 'page',
'orderby'		=> 'menu_order',
'post_parent'	=> $legal_page->ID,
'order'			=> 'ASC'
);

$legal_pages = get_posts($legal_args);

$news_page_ID = get_option('page_for_posts');
$news_page = get_page($news_page_ID);

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

	<a href="<?php echo get_permalink($company_page_id); ?>" class="header-link"><?php echo get_the_title($company_page_id); ?></a>
	
	<?php if ($company_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($company_pages as $company_page) { ?>
				<li><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo get_the_title($company_page->ID); ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
						
	<h3>General</h3>
	
	<?php if ($rescources_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($rescources_pages as $rescources_page) { ?>
				<li><a href="<?php echo get_permalink($rescources_page->ID); ?>"><?php echo get_the_title($rescources_page->ID); ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<a href="<?php echo get_permalink($legal_page->ID); ?>" class="header-link"><?php echo get_the_title($legal_page->ID); ?></a>
	
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