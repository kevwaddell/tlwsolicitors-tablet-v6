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

$videos_pg_id = get_page_id('videos');
$downloads_pg_id = get_page_id('downloads');
$toolkits_pg_id = get_page_id('tlw-toolkits');
//echo '<pre>';print_r($topics);echo '</pre>';

 ?>
<div class="col-md-6">
	
	<h3>TLW Media & Rescources</h3>

	<div class="list-block">

		<ul class="list-unstyled">
			
			<li><a href="<?php echo get_permalink($toolkits_pg_id); ?>"><?php echo get_the_title($toolkits_pg_id); ?></a></li>
			<li><a href="<?php echo get_permalink($videos_pg_id); ?>"><?php echo get_the_title($videos_pg_id); ?></a></li>
			<li><a href="<?php echo get_permalink($downloads_pg_id); ?>"><?php echo get_the_title($downloads_pg_id); ?></a></li>
			
		</ul>
		
	</div>
	
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
	
</div>