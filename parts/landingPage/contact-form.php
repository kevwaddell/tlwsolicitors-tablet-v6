<?php
global $form;	
?>
<div class="rule"></div>
<section id="form-section" class="pg-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">

			<h2 class="section-header">Make your claim today</h2>
			<?php 
			gravity_form($form->id, false, true, false, '', false); 
			gravity_form_enqueue_scripts( $form->id );	
			?>
			</div>
		</div>
	</div>
</section>	
