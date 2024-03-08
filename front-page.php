<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
	<?php include('includes/branding.php'); ?>
	<main>

		<div class="introduction">
			<figure class="headshot">
				<img src="<?php bloginfo('template_directory'); ?>/images/jeff-home.jpg" alt="" width="756" height="756" />
			</figure>
			<div class="text">
				<h1>I build websites</h1>
				<p>My name is Jeff Bridgforth. I am a <a href="https://jeffbridgforth.com/front-of-the-front-end-developer/">&lsquo;front of the front-end developer&rsquo;</a> for <a href="https://lgnd.com">LGND</a>, which is just a fancy way of saying that I build websites created by our design team.</p>
				<p><a href="https://jeffbridgforth.com/the-origin-of-my-online-handle/">Webcraftsman</a> is not just my online handle. It describes me to a “t.” I put my heart and soul into every design I code. My craftsmanship is embodied in my style, dedication, and attention to detail.</p>
				<p>You can contact me at <strong>webcraftsman@jeffbridgforth.com</strong></p>
			</div>
		</div>

		<div class="latest-posts">
			<h2>
				<span>Latest from My Blog</span><a href="https://jeffbridgforth.com/feed" class="feed-icon" aria-label="Blog Post RSS Feed">
					<svg width="32" height="32" viewBox="0 0 370 370" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						<g transform="matrix(1,0,0,1,-165.2,-95.193)">
							<path d="M165.2,95.193L165.2,151.203L193.2,151.203C351.27,151.203 478.8,278.743 478.8,436.803L478.8,464.803L534.8,464.803L534.8,436.803C534.8,248.463 381.53,95.193 193.2,95.193L165.2,95.193ZM165.2,196.003L165.2,252.003L193.2,252.003C295.59,252.003 378,334.409 378,436.803L378,464.803L434,464.803L434,436.803C434,304.143 325.86,196.003 193.2,196.003L165.2,196.003ZM243.598,308.003C200.297,308.003 165.2,343.105 165.2,386.401C165.2,429.702 200.302,464.799 243.598,464.799C286.899,464.799 321.996,429.697 321.996,386.401C321.996,343.105 286.894,308.003 243.598,308.003Z" style="fill: currentcolor;"/>
						</g>
					</svg>
				</a>
			</h2>
		<?php query_posts('showposts=9'); ?>
			<div class="post-listing">
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<?php if (has_post_thumbnail()) :?>
						<figure><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url() ;?>" alt="<?php the_title();?>" /></a></figure>
					<?php else: ?>
						<figure><a href="<?php the_permalink();?>"><img src="http://jeffbridgforth.com/wp-content/uploads/philip-swinburn-vS7LVkPyXJU-unsplash.jpg" /></a></figure>
					<?php endif; ?>
					<div class="date"><?php echo get_the_date(); ?></div>
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<?php if(in_category('weeknotes')):?>
					<?php $week = get_field('week_of');?>
						<?php if($week):?>
						<div class="week-of"><?php the_field('week_of');?></div>
						<?php endif;?>
					<?php endif;?>
				</article>
			<?php endwhile; ?>
			</div>
			<p class="all-posts"><a href="/archive/">View All Posts</a></p>
		</div>
<?php
    $args = array(
        'post_type' => 'notes',
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    $notes_query = new WP_Query($args);
?>
	<?php if ($notes_query->have_posts()): ?>
		<div class="notes-listing">
			<h2>
				<span>Notes</span><a href="https://jeffbridgforth.com/notes/feed" class="feed-icon" aria-label="Notes RSS Feed">
						<svg width="32" height="32" viewBox="0 0 370 370" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
							<g transform="matrix(1,0,0,1,-165.2,-95.193)">
								<path d="M165.2,95.193L165.2,151.203L193.2,151.203C351.27,151.203 478.8,278.743 478.8,436.803L478.8,464.803L534.8,464.803L534.8,436.803C534.8,248.463 381.53,95.193 193.2,95.193L165.2,95.193ZM165.2,196.003L165.2,252.003L193.2,252.003C295.59,252.003 378,334.409 378,436.803L378,464.803L434,464.803L434,436.803C434,304.143 325.86,196.003 193.2,196.003L165.2,196.003ZM243.598,308.003C200.297,308.003 165.2,343.105 165.2,386.401C165.2,429.702 200.302,464.799 243.598,464.799C286.899,464.799 321.996,429.697 321.996,386.401C321.996,343.105 286.894,308.003 243.598,308.003Z" style="fill: currentcolor;"/>
							</g>
						</svg>
					</a>
			</h2>
		<?php while($notes_query->have_posts()): $notes_query->the_post();?>
			<?php include('includes/note-card.php'); ?>
		<?php endwhile;?>
			<p class="all-posts"><a href="/notes/">View All Notes</a></p>
		</div>
	<?php endif;?>
	</main>
<?php get_footer(); ?>