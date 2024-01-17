<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php if ( is_page('8230') ) { bloginfo('name');} elseif (is_single() || is_page() || is_archive()) { wp_title('',true); echo(' | '); bloginfo('name');} else { wp_title('',true); } ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1"/>
		<meta name="description" content="Jeff Bridgforth is a senior developer with LGND.">
		<link rel="icon" href="/favicon.ico"><!-- 32×32 -->
		<link rel="icon" href="/jb-logo.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/jb-logo-180.png"><!-- 180×180 -->
		<link rel="manifest" href="/manifest.json">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.min.css?<?php echo filemtime(__DIR__.$filename);?>">
		<script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>
<!--		<?php wp_enqueue_script("jquery"); ?> -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;700&family=Nunito:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
</head>