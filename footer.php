		<?php 
		$awards_section_active = get_field( 'awards_section_active', 'options' );	
		?>
		
		<?php if ($awards_section_active) { ?>
		<?php get_template_part( 'parts/sections/section', 'credits' ); ?>		
		<?php } ?>
		
		<div class="rule"></div>
		<!-- FOOTER START -->
		<section id="footer-info">
			
			<footer class="container-fluid">	
				
				<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'text-center legal-nav list-inline', 'theme_location' => 'legal_links_menu', 'fallback_cb' => false ) ); ?>
				
				<div class="compliance-notice text-center">
				&copy; <?php bloginfo( 'name' ); ?> <?php echo date("Y"); ?>. All rights reserved.
				<?php $compliance_notice = get_field('compliance_notice', 'option');?>
				<?php if (isset($compliance_notice)) { ?>
				<?php echo $compliance_notice; ?>
				<?php }  ?>
				</div>
				
				<?php wp_nav_menu(array( 'container' => '', 'menu_class' => 'text-center social-links list-inline', 'theme_location' => 'social_links_menu', 'fallback_cb' => false ) ); ?>

			</footer>
			
		</section>
		</main>	
</div><!-- MAIN WRAPPER END -->
		
		<?php get_template_part( 'parts/global/popups/all', 'popups' ); ?>
				
		<?php wp_footer(); ?>

	</body>
</html>