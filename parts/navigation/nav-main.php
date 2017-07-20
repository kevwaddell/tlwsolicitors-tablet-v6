<?php 
$contact_pg = get_page_id( 'contact-us' );
?>
<nav id="top-nav" class="nav-closed">
	
	<div class="nav-wrapper">
		
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-xs-4 col-xs-offset-1">
					<ul class="top-nav-icon-links list-inline">
						<li><a href="<?php echo get_option('home'); ?>/"><i class="fa fa-home fa-2x"></i><span class="sr-only">Home</span></a></li>
						<li><a href="<?php echo get_permalink($contact_pg); ?>"><i class="fa fa-envelope fa-2x"></i><span class="sr-only">Contact Us</span></a></li>
						<li><a href="<?php echo get_permalink($contact_pg); ?>#find-us"><i class="fa fa-map-marker fa-2x"></i><span class="sr-only">Find us</span></a></li>
					</ul>
				</div>
				<div class="col-xs-6">
				<button id="close-nav" class="btn"><i class="fa fa-times"></i><span class="sr-only">Close navigation</span></button>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<?php wp_nav_menu(array( 
					'container' => 'false', 
					'menu' => 'Hidden Navigation', 
					'menu_class'  => 'menu clearfix list-unstyled',
					'fallback_cb' => false ) ); 
					?>
				</div>
			</div>
			
		</div>
		
	</div>
</nav>