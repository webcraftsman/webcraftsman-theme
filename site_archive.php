<?php
/*
Template Name: Archive
*/
?>
<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
		<?php include('includes/branding.php'); ?>
		<main>

			<?php function wpb_total_posts() {
				$total = wp_count_posts()->publish;
				echo $total .' Total Posts';
			} ;?>
				<div class="post-content">
				<h1>Blog Archive (<?php wpb_total_posts();?>)</h1>
				<div class="search">
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
						<div>
							<input class="searchbox" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15"/>
							<input type="hidden" name="post_type" value="post" />
							<input type="submit" id="searchsubmit" value="Search" />
						</div>
					</form>
				</div>
				<!-- https://wordpress.org/support/topic/list-all-posts-on-a-page-split-them-by-year -->
				<ul class="archive-jump-links">
				<?php foreach(posts_by_year() as $year => $posts) : ?>
					<li><a href="#year-<?php echo $year; ?>"><?php echo $year; ?></a></li>
				<?php endforeach; ?>
				</ul>

				<?php foreach(posts_by_year() as $year => $posts) : ?>
				<?php $yearNumber = $year;
					  $i = 0;

				?>
				<?php foreach($posts as $post) : setup_postdata($post); ?>
					<?php $i++;?>
				<?php endforeach;?>

				  <h2 id="year-<?php echo $yearNumber; ?>"><?php echo $yearNumber; ?> (<?php echo $i;?> posts) </h2>

				  <div class="post-listing">
				    <?php foreach($posts as $post) : setup_postdata($post); ?>
				      <article>
				      	<?php if (has_post_thumbnail()) :?>
				      		<figure><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url() ;?>" alt="<?php the_title();?>" /></a></figure>
				      	<?php else: ?>
				      		<figure><a href="<?php the_permalink();?>"><img src="http://jeffbridgforth.com/wp-content/uploads/philip-swinburn-vS7LVkPyXJU-unsplash.jpg" /></a></figure>
				      	<?php endif; ?>
				      	<p class="date"><?php echo get_the_date(); ?></p>
				      	<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				      	<?php if(in_category('weeknotes')):?>
						<?php $week = get_field('week_of');?>
							<?php if($week):?>
							<div class="week-of"><?php the_field('week_of');?></div>
							<?php endif;?>
						<?php endif;?>
				      </article>
				    <?php endforeach; ?>
				  </div>
				<?php endforeach; ?>

 				</div>
		</main>
<?php get_footer(); ?>