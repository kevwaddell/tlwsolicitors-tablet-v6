<?php  
global $section;
$map_active = $section['map_active'];		
?>
<?php if ($map_active) { ?>

<?php
	$location = get_field('global_location', 'options');	
	$address = get_field('global_address', 'options');
	$section_title = $section['section_title'];
	$options = $section['map_section_options'];
	if (empty($section_title)) {
	$section_title = "Location map";
	}
?>
<a name="find-us" id="find-us" class="section-target"></a>
<div class="rule"></div>
<section id="wide-map" class="pg-section">
	<div class="container-fluid">
		<div class="row"><div class="col-md-10 col-md-offset-1">
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		<div class="row">
			<div class="col-xs-5 col-md-4">
				<div class="location-box">
					
					<?php foreach ($options as $op) { ?>
						<?php if ($op == 'address') { ?>
							<address>
							<span class="company bold caps col-red font-size-25"><?php bloginfo('name'); ?></span><br>
							<?php echo $address; ?>
							</address>	
						<?php } ?>
						<?php if ($op == 'route') { ?>
						<button id="route-finder-btn" class="btn btn-block"><i class="fa fa-car"></i> Route finder</button>			
						<?php } ?>	
					<?php } ?>
									
				</div>
			</div>
			<div class="col-xs-7 col-md-8">
				<div id="map-canvas" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
		</div></div>
	</div>
</section>
<?php } ?>