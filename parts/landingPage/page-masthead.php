<?php 
$freephone_num = get_field('freephone_num', 'option');	
?>
<header class="header" role="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
				<div class="col-xs-6">
					<a href="<?php echo get_option('home'); ?>/" class="logo text-hide"><?php bloginfo('name'); ?></a>						</div>
				<div class="col-xs-6">
				<div class="tel-num bold txt-col-red inline pull-right"><span class="caps txt-col-gray font-lite">Freephone: </span> <?php echo $freephone_num; ?></div>
				</div>
			</div>
				</div>
			</div>
		</div>
<?php get_template_part( 'parts/global/color', 'strip' ); ?>			
</header>