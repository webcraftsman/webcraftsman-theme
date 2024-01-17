<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
		<?php include('includes/branding.php'); ?>
		<div id="content">
			<div id="content_main">
				<div id="content_posts">
					<?php while (have_posts()) : the_post(); ?>
  					<h1><?php the_title();?></h1>
   					<?php the_content(); ?>
 					<?php endwhile; ?>
 				</div>
 			</div>
<!-- 			<div id="content_secondary">
				<?php if (is_page(221)) { ?>
				<?php include('includes/about_nav.php'); ?>
				<?php } elseif (is_page(6490)) { ?>
				<?php include('includes/about_nav.php'); ?>
				<?php } elseif (is_page(6513)) { ?>
				<?php include('includes/about_nav.php'); ?>
				<?php } elseif (is_page(226) || $post->post_parent == '226') { ?>
				<?php include('includes/portfolio_nav.php'); ?>
				<?php } elseif (is_page('Delicious Links')) { ?>
				<?php include('includes/read.php'); ?>
				<?php } elseif (is_page('1117')) { ?>
				<?php include('includes/css3.php'); ?>
				<?php } elseif (is_page(214)) { ?>
				<h3>On the Web</h3>
      				<ul id="findme">
        			<li><img src="http://bridgforthfamily.com/favicon.jpg" alt="" width="16" height="16" align="absmiddle" /> <a href="http://bridgforthfamily.com">Bridgforthfamily.com</a></li>
        			<li><img src="/images/twitter_feed.png" alt="" align="absmiddle" /> <a href="http://twitter.com/webcraftsman">Twitter</a></li>
        			<li><img src="http://jeffbridgforth.com/wp-content/plugins/lifestream/icons/default/flickr.png" alt="" align="absmiddle" /> <a href="http://www.flickr.com/photos/bridgforth/">Flickr</a></li>
        			<li><img src="http://del.icio.us/favicon.ico" alt="" align="absmiddle" /> <a href="http://del.icio.us/JBridg4th">delicious</a></li>
        			<li><img src="http://www.facebook.com/favicon.ico" alt="" align="absmiddle" /> <a href="http://www.facebook.com/profile.php?id=500017042">Facebook</a></li>
        			<li><img src="http://www.linkedin.com/favicon.ico" alt="" align="absmiddle" /> <a href="http://www.linkedin.com/in/jbridgforth">LinkedIn</a></li>
        			<li><img src="http://www.veer.com/favicon.ico" alt="" align="absmiddle" /> <a href="http://ideas.veer.com/members/jeffbridgforth">Veer</a></li>
        			<li><img src="http://jeffbridgforth.com/wp-content/plugins/lifestream/icons/default/readernaut.png" alt="" align="absmiddle" /><a href="http://readernaut.com/JBridg4th/">Readernaut</a></li>
      				</ul>
				<?php } else { }?>
			</div> -->
		</div>
<?php get_footer(); ?>