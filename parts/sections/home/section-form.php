<?php
$hp_form_active = get_field('hp_form_active', 'option');
$all_forms_active = get_field('all_forms_active', 'option');
?>
<?php if ($hp_form_active && $all_forms_active) {

$form = get_field('hp_form', 'option');	
?>
<section id="hp-form" class="pg-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<?php gravity_form($form->id, false, true, false, '', false);?>
			</div>
		</div>
	</div>
</section>
<?php } ?>