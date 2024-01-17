<h3>Projects</h3>
		<?php if($post->post_parent) $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&sort_order='desc'&echo=0");
  			else	$children = wp_list_pages("title_li=&child_of=".$post->ID."&sort_order='desc'&echo=0");
  			if ($children) { ?>
  			<ul class="leaf">
  				<?php echo $children; ?>
  			</ul>
  		<?php } ?>