<?php
global $section;
$feedback_active = $section['feedback_active'];
$colors = array('purple','green','pink', 'orange', 'blue');
?>

<?php if ($feedback_active) { 
$feedback_option = $section['feedback_option'];		
?>
			
	<?php if ($feedback_option == 'single') { ?>
	<?php get_template_part( 'parts/sections/section', 'feedback-single' ); ?>		
	<?php } ?>
	
	<?php if ($feedback_option == 'slider') { ?>
	<?php get_template_part( 'parts/sections/section', 'feedback-slider' ); ?>
	<?php } ?>
	
	<?php if ($feedback_option == 'list') { ?>
	<?php get_template_part( 'parts/sections/section', 'feedback-list' ); ?>		
	<?php } ?>

<?php } ?>