<?php 
$img_post = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id( $img_post );
$banner_img = wp_get_attachment_image_src($post_thumbnail_id, 'large' );

$freephone_num = get_field('freephone_num', 'options');
$office_tel = get_field('office_num', 'options');
$fax = get_field('main_fax', 'options');
$email = get_field('main_email', 'options');
//echo '<pre class="debug">';print_r($img);echo '</pre>';
?>
<section id="contact-us-banner">
	
	<div class="container-fluid">
	<div class="row"><div class="col-md-10 col-md-offset-1">	
		
		<div class="img" style="background-image: url(<?php echo $banner_img[0];?>)"></div>
		<div class="row">
			<div class="col-xs-7">
				<div class="intro">
					<p class="header">We can help 24/7<br>365 days a year</p>
					<p>You can contact us using any of the following methods</p>
				</div>
			</div>
		</div>
		
		<div class="contact-info">
			<a href="tel:<?php echo str_replace(" ", "", $office_tel); ?>" class="contact-info-link">Office: <?php echo $office_tel; ?></a>
			<a href="mailto:<?php echo $email; ?>" class="contact-info-link"><?php echo $email; ?></a>
			<a href="#request-a-callback" class="contact-info-link jump-2-link">Request a Callback</a>	
		</div>
		
	</div></div>	
	</div>	
		
</section>
<div class="rule"></div>