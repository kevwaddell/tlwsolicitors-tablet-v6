<?php
$img_post = get_the_ID();
$date = get_the_date('l - jS F - Y');
?>
<section id="slim-top-banner" class="top-banner-img-slim">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="img" style="background-image: url(<?php add_banner_feat_img($img_post);?>)">
					<header class ="banner-title font-slab-serif caps">
					<?php echo $date; ?>
					</header>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="rule"></div>