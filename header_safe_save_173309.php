<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php if ( is_page('8230') ) { bloginfo('name');} elseif (is_single() || is_page() || is_archive()) { wp_title('',true); echo(' | '); bloginfo('name');} else { wp_title('',true); } ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<meta name="description" content="Jeff Bridgforth is a front-end developer who specializes in buidling mobile-first responsive websites. Jeff is a master builder with Craft CMS and WordPress. ">
		
		<link rel="icon" href="/jeff-logo.ico"><!-- 32×32 -->
		<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/jeff-logo.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/jeff-logo-180.png"><!-- 180×180 -->
		<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/manifest.webmanifest">

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.min.css">
		<?php if( is_single() ) : ?>
			<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/color-brewer.css" />
		<?php endif; ?>
		<script src="<?php bloginfo("template_url"); ?>/js/respond.min.js"></script>
		<script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>
<!--		<?php wp_enqueue_script("jquery"); ?> -->
<link href='https://fonts.googleapis.com/css?family=Merriweather:300,500,700|Merriweather+Sans:300,400,700,800|Source+Code+Pro' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
</head>	