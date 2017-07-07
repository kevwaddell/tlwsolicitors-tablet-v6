<?php 
$children_args = array(
	'sort_column' => 'menu_order',
	'hierarchical' => 0,
	'post_type' => 'page'
);

if ($post->post_parent == 0) {
$children_args['parent'] = $post->ID;
} else {
$children_args['parent'] = $post->post_parent;	
}

$children = get_pages($children_args);	

//echo '<pre>';print_r($children);echo '</pre>';
?>	
<?php if (!empty($children)) { ?>
<div class="rule"></div>
<nav class="child-page-links text-center">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<?php foreach ($children as $child) { ?>
					<a href="<?php echo get_permalink($child->ID); ?>" class="btn btn-default no-border no-rounded"><?php echo get_the_title($child->ID); ?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</nav>		
<?php } ?>