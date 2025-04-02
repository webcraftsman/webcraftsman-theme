<?php
/*
Template Name: Search
*/
?>
<?php $searchTerm = $_GET['s'];?>
<?php get_header(); ?>
<!-- <?php include('randomColor.php'); ?> -->
<body id="search_results" class="secondary_page <?php echo $selectedColor; ?>">
		<?php include('includes/branding.php'); ?>
		<main>
			<div class="post-content">
			<h1>Search Results <?php if($searchTerm):?>for '<?php echo esc_html( $searchTerm);?>'<?php endif;?></h1>
			<div class="search">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input class="searchbox" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15"/>
						<input type="hidden" name="post_type" value="post" />
						<input type="submit" id="searchsubmit" value="Search" />
					</div>
				</form>
			</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="search-listing-post">
				<h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
				<span class="search_excerpt"><?php the_excerpt();?></span>
				<a href="<?php the_permalink() ?>" class="search_link"><?php the_permalink() ?></a>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
				<?php endwhile; ?>
				<footer class="pagination">
					<?php posts_nav_link(' — ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
				</footer>
				<?php else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
			</div>
			<div id="search">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input class="searchbox" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15"/>
						<input type="hidden" name="post_type" value="post" />
						<input type="submit" id="searchsubmit" value="Search" />
					</div>
				</form>
			</div>
		</main>
<?php get_footer(); ?>