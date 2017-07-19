<?php get_template_part( 'parts/headers/header', 'landing-page' );
	
$body_classes = array('atfc-desktop-css, loading');			
?>		

<body id="landing-page" <?php body_class('loading atfc-tablet-css'); ?>>
<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager -->
<?php } ?>
<a class="sr-only" href="#main-content">Skip to main content</a>	
<div class="tlw-wrapper">
	
	<!-- HEADER LOGO AND NAVIGATION -->
	<?php get_template_part( 'parts/landingPage/page', 'masthead' ); ?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content" class="page-wrapper">