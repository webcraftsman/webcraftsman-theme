<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
	<?php include('includes/branding.php'); ?>
	<main>
		<div class="post-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="post">
					<h1 style="view-transition-name: post-<?php echo get_the_id();?>"><?php the_title();?></h1>
					<p class="post-time">
						<span>
						<?php $time_diff = current_time('timestamp') - 							get_the_time('U');
						if($time_diff < 604800){//seconds in a week = 604800
							echo 'Posted ' . human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';
						}else{
							echo get_the_date();
						}; ?>
						</span>
					</p>

				<?php if(in_category('weeknotes')):?>
				<?php $week = get_field('week_of');?>
					<?php if($week):?>
					<p class="week-of"><strong>Week of <?php echo esc_html(get_field('week_of'));?></strong></p>
					<?php endif;?>
				<?php endif;?>
					<?php the_content(); ?>
				</article>
				<div class="content-comments">
				<?php comments_template(); // Get wp-comments.php template ?>
				</div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			<?php posts_nav_link() ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</main>
<?php get_footer(); ?>