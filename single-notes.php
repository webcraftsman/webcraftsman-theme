<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
	<?php include('includes/branding.php'); ?>
	<main class="single-note">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php include('includes/note-card.php'); ?>
            <?php endwhile;?>

        <?php endif;?>

        </main>
<?php get_footer(); ?>