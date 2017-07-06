<?php
global $section;
$downloads_active = $section['downloads_active'];
?>
<?php if ($downloads_active) { ?>
<?php 
$section_title = $section['section_title'];	
$download_files = $section['files'];	
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container-fluid">	
		
		<h2 class="section-header"><?php echo $section_title; ?></h2>
		<?php if ( !empty($download_section_files) ) { ?>
		<div class="download-items">
		<?php foreach ($download_section_files as $k => $file) { 
		$img = wp_get_attachment_image_src($file['file_image'], 'medium' );	
		?>
		<div class="text-center download-item">
			<a href="<?php echo $file['file_download']; ?>" target="_blank">
				<span class="cover-img"><img src="<?php echo $img[0]; ?>" height="120" /></span>
				<span class="dwnload-title"><?php echo $file['file_title']; ?></span>
			</a>
		</div>
		<?php } ?>
	
		</div>
		
		<?php } else { ?>
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="well well-lg text-center">
					<h3>Coming soon</h3>
					<p>Downloads are not available at the moment.</p>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
		
</section>
<?php } ?>