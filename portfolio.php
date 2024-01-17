<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
	<body <?php body_class(); ?>>
		<?php include('includes/branding.php'); ?>
		<div id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title();?></a></h2>
			<div id="content_main">
				<div id="content_posts">
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
 			<div id="content_secondary">
 			<?php echo get_post_meta($post->ID, "portfolio_image", $single = true); ?>
			<h3>Projects</h3>
		<?php if($post->post_parent) $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&sort_column=menu_order&sort_order=DESC&echo=0");
  			else $children = wp_list_pages("title_li=&child_of=".$post->ID."&sort_column=menu_order&sort_order=DESC&echo=0");
  			if ($children) { ?>
  			<ul class="leaf">
  				<?php echo $children; ?>
  			</ul>
  		<?php } ?>
			</div>
		</div>
<?php get_footer(); ?>