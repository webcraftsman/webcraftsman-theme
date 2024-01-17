<?php
/*
Template Name: Portfolio 3
*/
?>
<?php get_header(); ?>
	<body <?php body_class(); ?>>
		<div id="branding">
		<?php include('includes/branding.php'); ?>
	</div>
	<div id="navigation">
	<?php include('includes/navigation.php'); ?>
		</div>
		<div id="content">
			<div id="content_main">
			<ul id="content_portfolio">
			<!-- http://wordpress.org/support/topic/297090 -->
			<?php query_posts('post_type=page&post_parent=226&sort_column=menu_order&sort_order=DESC'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>">
			<?php $portfolioThumb = get_post_meta($post->ID, 'portfolio_thumb', true); ?>
			<img src="<?php echo $portfolioThumb ?>" border="0" alt="" width="382" height="382" /></a><?php the_title();?></li>
			<?php endwhile; ?>
			<?php endif; ?>
</ul>			</div>
</div>
<?php get_footer(); ?>