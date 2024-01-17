
		<footer id="site_info">
			<p id="copyright">&copy; <?php echo date('Y'); ?> Jeff Bridgforth</p>
			<ul id="social">
				<li><a href="https://mastodon.social/@webcraftsman">Mastodon</a></li>
				<li class="linkedin"><a href="http://www.linkedin.com/in/jeffbridgforth">LinkedIn</a></li>
				<li class="codepen"><a href="http://codepen.io/webcraftsman">Codepen</a></li>
				<li><a href="https://jeffbridgforth.com/feed/">Blog Feed</a></li>
				<li><a href="https://jeffbridgforth.com/notes/feed">Notes Feed</a></li>
			</ul>

		</footer>

		<?php if( is_single() || is_page() ) : ?>
			<script async src="https://codepen.io/assets/embed/ei.js"></script>
			<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/atom-one-dark.min.css">
			<script src="<?php bloginfo("template_url"); ?>/js/highlight.min.js"></script>
			<script>hljs.highlightAll();</script>
		<?php endif; ?>
<?php wp_footer(); ?>
<!-- StatCounter Code -->
<!--
<script type="text/javascript">
var sc_project=1045003;
var sc_invisible=1;
var sc_partition=9;
var sc_security="84e7cebb";
</script>
<script type="text/javascript" src="https://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a class="statcounter" href="https://www.statcounter.com/"><img class="statcounter" src="http://c10.statcounter.com/counter.php?sc_project=1045003&java=0&security=84e7cebb&invisible=1" alt="web stats script" /></a></div></noscript>
-->

<?php if(is_post_type_archive('notes')):?>

<?php endif;?>
	</body>
</html>