<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
<head id="www-wordpress-test-dev" data-template-set="tlw-base-theme">
	
	<style><?php readfile(get_stylesheet_directory() . '/_/css/criticalCSS.css'); ?></style>
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	<meta name="robots" content="noindex, nofollow" /> 
	
	<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<meta name="format-detection" content="telephone=yes">
		   
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad-retina.png" />
	<link rel="apple-touch-startup-image" href="<?php bloginfo('template_directory'); ?>/_/img/apple-start-up-img.png">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	
	<?php wp_head(); ?>
	
	<script>
		var loadDeferredStyles = function() {
		var addStylesNode = document.getElementById("deferred-styles");
		var gfStylesNode = document.getElementById("gf-deferred-styles");
		var replacement = document.createElement("div");
		var criticalCSS = document.getElementById("critical-css");
		replacement.innerHTML = gfStylesNode.textContent + addStylesNode.textContent;
		document.body.appendChild(replacement);
		gfStylesNode.parentElement.removeChild(gfStylesNode);
		addStylesNode.parentElement.removeChild(addStylesNode);
		document.body.classList.remove("atfc-tablet-css");
		criticalCSS.parentNode.removeChild(criticalCSS);
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

<body id="login" <?php body_class('loading atfc-tablet-css'); ?>>
	
	<section id="user-wrap">