<?php
/*
Template Name: Full Page
*/
?>
<?php get_header(); ?>
	<body <?php body_class(); ?>>
		<?php include('includes/branding.php'); ?>
		<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="content_main">
				<div id="content_posts">
				<h1><?php the_title();?></h1>
					 	<div class="post">
					   		<?php the_content(); ?>
					   	</div>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<?php posts_nav_link() ?>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
 				</div>
 			</div>
		</div>
<?php get_footer(); ?>