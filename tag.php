<?php $term = get_queried_object();  ?>
<?php get_header(); ?>
<!-- <?php include('randomColor.php'); ?> -->
<body id="search_results" class="secondary_page <?php echo $selectedColor; ?>">
		<?php include('includes/branding.php'); ?>
		<main>
				<div class="post-content">
				<h1>Tag: <?php if($term):?><?php echo'"'.$term->name.'"';?><?php endif;?></h1>
				<?php the_archive_description( '<p class="taxonomy-description">', '</p>' ); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post-listing">
					<h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
					<span class="search_excerpt"><?php the_excerpt();?></span>
					<a href="<?php the_permalink() ?>" class="search_link"><?php the_permalink() ?></a>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
					<?php endwhile;?>
					<footer class="pagination-links">
					<?php echo paginate_links(array(
						'prev_next' => false,
						'end_size' => 1,
						'mid_size' => 3
						)); ?>
					</footer>
					<?php else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

					<?php endif; ?>
 				</div>
		</main>
<?php get_footer(); ?>