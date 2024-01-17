<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
	<?php include('includes/branding.php'); ?>
	<div id="content" class="single-note">
		<div id="content_main">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php include('includes/note-card.php'); ?>
            <?php endwhile;?>

        <?php endif;?>
        </div>

    </div>
<?php get_footer(); ?>