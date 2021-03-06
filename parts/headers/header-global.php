<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
<head id="www-tlwsolicitors-co-uk" data-template-set="tlw-solicitors-theme">
<script type="text/javascript">
    var elm=document.getElementsByTagName("html")[0];
    elm.style.display="none";
</script>	
	<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PLBR4F');</script>
	<!-- End Google Tag Manager -->
	<?php } ?>
	<style id="critical-css"><?php readfile(get_stylesheet_directory() . '/_/css/criticalCSS.css'); ?></style>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<meta name="viewport" content="user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">
	
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=zXdkgBvmkj">
	<link rel="icon" type="image/png" href="/favicon-32x32.png?v=zXdkgBvmkj" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png?v=zXdkgBvmkj" sizes="16x16">
	<link rel="manifest" href="/manifest.json?v=zXdkgBvmkj">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=zXdkgBvmkj" color="#cc015a">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
	<script>
		var loadDeferredStyles = function() {
			var addStylesNode = document.getElementById("deferred-styles");
			var gfStylesNode = document.getElementById("gf-deferred-styles");
			var replacement = document.createElement("div");
			var elm = document.getElementsByTagName("html")[0];
			replacement.innerHTML = gfStylesNode.textContent + addStylesNode.textContent;
			document.body.appendChild(replacement);
			gfStylesNode.parentElement.removeChild(gfStylesNode);
			addStylesNode.parentElement.removeChild(addStylesNode);
			elm.style.display="block";
		};
	 
		var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
	  if (raf) { 
		  raf(function() { 
		   window.setTimeout(loadDeferredStyles, 0); 
			});
	 	} else { 
		 	window.addEventListener('load', loadDeferredStyles); 
		 }
	</script>
</head>