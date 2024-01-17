<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
		<?php include('includes/branding.php'); ?>
		<div id="content">
			<div id="content_main">
				<div id="content_posts">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					 	<div class="post">
					  		<h1><?php the_title();?></h1>
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
							<p class="week-of"><strong>Week of <?php the_field('week_of');?></strong></p>
							<?php endif;?>
						<?php endif;?>
					   		<?php the_content(); ?>
					   	</div>
					   	<div id="content_comments">
					   	<?php comments_template(); // Get wp-comments.php template ?>
					   	</div>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					<?php posts_nav_link() ?>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
 				</div>
 			</div>
<!-- 			<div id="content_secondary">
 				<div id="nav_secondary">
					<h3 id="write">What I Write About</h3>
					<ul id="categories"><?php wp_list_cats('sort_column=name'); ?></ul>
				</div>
			</div> -->
		</div>
<?php get_footer(); ?>