<header class="header" role="banner">	
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
		
			<div class="col-xs-6">
				<a href="<?php echo get_option('home'); ?>/" class="logo text-hide"><?php bloginfo('name'); ?></a>
			</div>
			
			<div class="col-xs-6">
				<div class="header-action-btns text-right">
					<button id="search-btn" class="btn btn-default"><span class="sr-only">Search</span><i class="fa fa-search fa-lg"></i></button>
					<button id="nav-btn" class="btn btn-default in-active"><span class="sr-only">Menu</span><i class="fa fa-bars fa-lg"></i></button>
				</div>
			</div>
		
		</div>
			</div>
		</div>
	</div>
	
	<?php get_template_part( 'parts/global/color', 'strip' ); ?>	
			
</header>
