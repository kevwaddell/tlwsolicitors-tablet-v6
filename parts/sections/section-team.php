<?php 
global $profiles;
$profiles_total = count($profiles);
$section_title = "Our Team";
//echo '<pre class="debug">';print_r($profiles);echo '</pre>';
?>
<section id="our-team-section" class="pg-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<h2 class="section-header"><?php echo $section_title; ?></h2>
				
				<div class="intro-txt">
					<?php the_content(); ?>
				</div>
				<div class="rule"></div>
				<?php foreach ($profiles as $post) : ?>
				<?php
				setup_postdata($post);	 
				$position = get_field('position');
				$email = get_field('email');
				$departments = get_field('departments');
				$profile_img = get_field('profile_img'); 
				?>
					<div class="profile">
						<div class="profile-img" style="background-image: url(<?php echo $profile_img['sizes']['profile-thumb']; ?>);"></div>
						<div class="profile-txt">
							<h3><?php the_title(); ?></h3>
							<div class="email"><a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a></div>
							<div class="position caps font-slab-serif"><?php echo $position; ?></div>
							<?php the_content(); ?>
						</div>
					</div>
				<?php endforeach; ?>	
				<?php wp_reset_postdata(); ?>	
		
			</div>
		</div>
	</div>
	
</section>