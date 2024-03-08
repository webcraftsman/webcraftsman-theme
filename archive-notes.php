<?php get_header(); ?>
<?php include('includes/body_id.php'); ?>
	<?php include('includes/branding.php'); ?>
	<main>
            <h1>
                <span>Notes</span>
                <a href="https://jeffbridgforth.com/notes/feed" class="feed-icon">
                    <svg width="32" height="32" viewBox="0 0 370 370" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                        <g transform="matrix(1,0,0,1,-165.2,-95.193)">
                            <path d="M165.2,95.193L165.2,151.203L193.2,151.203C351.27,151.203 478.8,278.743 478.8,436.803L478.8,464.803L534.8,464.803L534.8,436.803C534.8,248.463 381.53,95.193 193.2,95.193L165.2,95.193ZM165.2,196.003L165.2,252.003L193.2,252.003C295.59,252.003 378,334.409 378,436.803L378,464.803L434,464.803L434,436.803C434,304.143 325.86,196.003 193.2,196.003L165.2,196.003ZM243.598,308.003C200.297,308.003 165.2,343.105 165.2,386.401C165.2,429.702 200.302,464.799 243.598,464.799C286.899,464.799 321.996,429.697 321.996,386.401C321.996,343.105 286.894,308.003 243.598,308.003Z" style="fill: currentcolor;"/>
                        </g>
                    </svg>
                </a>
            </h1>
        <?php if ( have_posts() ) : ?>
            <div id="archive-notes-listing" class="archive-notes-listing">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php include('includes/note-card.php'); ?>
            <?php endwhile;?>
            </div>
            <footer class="pagination">
                <?php posts_nav_link(' — ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
            </footer>

        <?php endif;?>

    </main>
<?php get_footer(); ?>