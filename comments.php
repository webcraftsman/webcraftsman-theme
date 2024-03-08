<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_'.$cookiehash] != $post->post_password) {  // and it doesn't match the cookie
				?>

				<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>

				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h2><?php comments_number('No Responses', '1 Comment', '% Comments' );?> </h2>

	<ol class="comment-list">
	<!--Check if comment is by the author-->
	<?php foreach ($comments as $comment) : ?>
	<?php
		$isByAuthor = false;
		$isByAdmin = false;
		if($comment->comment_author_email == get_the_author_email()) {
			$isByAuthor = true;
		}elseif($comment->comment_author_email == "jeff.bridgforth@gmail.com" || $comment->comment_author_email == "jeff.bridgforth@gmail.com"){
			$isByAdmin = true;
		};
		?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
		<div class="avatar">
		<?php echo get_avatar($comment, '64'); ?>


		</div>
		<div class="comment">
			<p class="comment_author"><cite><?php comment_author_link() ?></cite>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?></p>
			<p class="comment_date"><?php comment_date('F jS, Y') ?><?php edit_comment_link('e','',''); ?></p>
			<div class="comment_content"><?php comment_text() ?></div>
		</div>


		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post-> comment_status) : ?>
<h2>Comment on this post </h2>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="../connections/<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>

<?php else : ?>

<p><label for="author">Name <?php if ($req) _e('(required)'); ?></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>"/>
</p>

<p><label for="email">Email (will not be published) <?php if ($req) _e('(required)'); ?></label>
<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
</p>

<p><label for="url">Your Web site</label>
<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" />
</p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p><label for="comment">Your Comments</label>
<textarea name="comment" id="comment"></textarea></p>
<p><input name="submit" type="submit" id="submit" value="Post Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>