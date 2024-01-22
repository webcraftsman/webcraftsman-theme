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
		</div>
<?php get_footer(); ?>