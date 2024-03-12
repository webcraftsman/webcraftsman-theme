<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
		<?php include('includes/branding.php'); ?>
		<main>
			<div class="post-content">
			<?php if ($posts) { ?>
			<h1><?php echo single_cat_title(); ?></h1>
			<?php the_archive_description( '<p class="taxonomy-description">', '</p>' ); ?>
			<div class="post-listing grid">
			<?php foreach ($posts as $post) : start_wp(); ?>
				<article>
				      	<?php if (has_post_thumbnail()) :?>
				      		<figure><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url() ;?>" alt="<?php the_title();?>" /></a></figure>
				      	<?php else: ?>
				      		<figure><a href="<?php the_permalink();?>"><img src="http://jeffbridgforth.com/wp-content/uploads/philip-swinburn-vS7LVkPyXJU-unsplash.jpg" /></a></figure>
				      	<?php endif; ?>
				      	<p class="date"><?php echo get_the_date(); ?></p>
				      	<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				      	<?php $week = get_field('week_of');?>
							<?php if($week):?>
							<div class="week-of"><?php the_field('week_of');?></div>
							<?php endif;?>
				      </article>
			<?php endforeach; ?>
		</div>

			<footer class="pagination-links">
	        <?php echo paginate_links(array(
	            'prev_next' => false,
	            'end_size' => 1,
	            'mid_size' => 3
	            )); ?>
	         </footer>
		<?php } else { ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php } ?>
 			</div>
		</main>
<?php get_footer(); ?>