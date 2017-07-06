<?php 
global $jobs_pg;
$content = apply_filters( 'the_content', $jobs_pg->post_content );
?>
<article <?php post_class("content-section page"); ?>>
	
	<?php get_template_part( 'parts/global/page', 'breadcrumbs' ); ?>
	
	<div class="container-fluid">
			
		<div class="row">

			<div class="col-md-10 col-md-offset-1">
				
				<div class="entry">
					
					<div class="main-txt">
						<?php echo $content; ?>
					</div>
																
				</div>
				
			</div>
			
		</div>
									
	</div>

</article>