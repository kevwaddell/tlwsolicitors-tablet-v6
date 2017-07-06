<?php
global $section;  
$faqs_active = $section['faqs_active'];		
?>
<?php if ($faqs_active) { ?>

<?php 
$section_title = $section['section_title'];	
$questions_ID = $section['questions'];
$faq_qestions = get_field( 'faq_qestions', $questions_ID);
?>
<div class="rule"></div>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">	
			<div class="col-xs-11">
				<h2 class="section-header"><?php echo $section_title; ?></h2>
				<div class="faq-items">
				
					<?php foreach ($faq_qestions as $k => $q) { ?>
					<div id="faq-item-<?php echo $k+1; ?>" class="faq-item<?php echo ($k == 0) ? ' active':''; ?>">
						<div class="pg-marker">Question <?php echo $k+1; ?> of <?php echo count($faq_qestions); ?></div>
						<div class="question"><?php echo $q['faq_question']; ?></div>
						<div class="answer"><?php echo $q['faq_answer']; ?></div>
					</div>
					<?php } ?>
			
				</div>
			</div>
			<div class="col-xs-1">
				<nav class="faq-nav fright">
					<button id="prev-faq" data-src="faq-item-<?php echo count($faq_qestions); ?>" class="btn btn-default"><span class="sr-only">Previous</span><i class="fa fa-angle-up"></i></button>
					<button id="next-faq" data-src="faq-item-2" class="btn btn-default"><span class="sr-only">Next</span><i class="fa fa-angle-down"></i></button>
				</nav>
			</div>
		</div>
			</div>
		</div>
	</div>	
</section>
<?php } ?>