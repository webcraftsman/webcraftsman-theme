<?php
/*
Template Name: GasPedal
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); echo(' | '); bloginfo('name');} else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>
		<!-- <link href="/wp-content/themes/chocolate/css/jeff.css" rel="stylesheet" type="text/css" /> -->
		<!--[if !IE 6]><!--><link rel="stylesheet" type="text/css" href="/aten-introduction/css/jeff.css" media="screen, projection" /><!--<![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="http://universal-ie6-css.googlecode.com/files/ie6.0.2.css" media="screen, projection" /><![endif]-->
		<link rel="stylesheet" rev="stylesheet" href="/wp-content/themes/chocolate/css/jeff_print.css" type="text/css" media="print" />

	</head>
	<body id="gaspedal">
		<div id="wrapper">
			<div id="branding">
			<h1><a href="/index.php">Jeff Bridgforth :: Webcraftsman</a></h1>
			<p id="branding_tagline"></p>
			</div>
			<ul id="nav_main">
				<li id="intro"><a href="http://jeffbridgforth.com/gaspedal-introduction/">Introduction</a></li>
				<li id="current_page">GasPedal Redesign</li>
				<li><a href="http://jeffbridgforth.com/resume.doc">Resum&eacute;</a></li>
			</ul>
			<div id="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					 <?php the_content(); ?>						
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>	
			</div>
			<div id="site_info">
			</div>
		</div>
	</body>
</html>