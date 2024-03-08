<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
<?php include('includes/branding.php'); ?>
<main>
	<div class="post-content">
		<?php while (have_posts()) : the_post(); ?>
		<h1><?php the_title();?></h1>
		<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</main>
<?php get_footer(); ?>