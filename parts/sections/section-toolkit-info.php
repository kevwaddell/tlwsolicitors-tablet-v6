<?php 
$slides_choice = get_field('tk_slides').'_tk_slides';
$slides = get_field($slides_choice, 'option');
?>

<section class="toolkit-info">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
				<?php foreach ($slides as $k => $slide) { ?>
					<div class="rule"></div>			
					<div class="tk-info-wrap">
						<div class="tk-info-txt">
							<h2 class="font-slab-serif"><?php echo $slide['slide_title']; ?></h2>
							<?php echo $slide['slide_text']; ?>
						</div>
						<figure class="tk-img" style="background-image: url(<?php echo $slide['slide_img']; ?>)"></figure>
					</div>
				
				<?php } ?>	
				</div>
			</div>
		</div>	
</section>



