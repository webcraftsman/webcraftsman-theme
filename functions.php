<?php function the_title_trim($title) {
	$title = attribute_escape($title);
	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);
	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);
	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

// Menus
	function register_my_menus() {
		register_nav_menus(
		array(
			'banner-nav' => __( 'Main Navigation' ),
			'footer-nav' => __(' Footer Navigation'),
		)
		);
	}
	add_action( 'init', 'register_my_menus' );

// SVG Support
	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
?>
<?php
remove_action('wp_head', 'wp_generator');
add_theme_support('menus');
add_theme_support('automatic-feed-links');
add_theme_support('post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio'));
// http://www.kevinleary.net/enable-oembed-for-excerpts
add_filter('the_excerpt', array($GLOBALS['wp_embed'], 'autoembed'), 9);

// https://wordpress.org/support/topic/list-all-posts-on-a-page-split-them-by-year
function posts_by_year() {
  // array to use for results
  $years = array();

  // get posts from WP
  $posts = get_posts(array(
    'numberposts' => -1,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => is_user_logged_in() ? array('publish', 'private') : array('publish'),
  ));

  // loop through posts, populating $years arrays
  foreach($posts as $post) {
    $years[date('Y', strtotime($post->post_date))][] = $post;
  }

  // reverse sort by year
  krsort($years);

  return $years;
}

	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails', array( 'post') );
	}


	function my_custom_login_logo() {
	    echo '<style type="text/css">
	        .login h1 a { background:url('.get_bloginfo('template_directory').'/images/jb.png) !important; width:43px !important; height:61px !important;}
	        #loginform {background:rgba(255,255,255,.75) !important;}
	        body { background:url('.get_bloginfo('template_directory').'/images/chat.jpg) no-repeat center top !important; background-size:cover !important;}
	        #nav a,#backtoblog a {color:#fff !important;}
        #backtoblog {padding-left:7px !important;)
	    </style>';
	}
	add_action('login_head', 'my_custom_login_logo');

	/*
	 * Disable Emojis
	*/

	function disableEmojis() {
	  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	  remove_action( 'wp_print_styles', 'print_emoji_styles' );
	  remove_action( 'admin_print_styles', 'print_emoji_styles' );
	  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	  add_filter( 'tiny_mce_plugins', 'disableTinyMCEEmojis' );
	}
	function disableTinyMCEEmojis($plugins)
	{
	  if (is_array($plugins))
	    return array_diff($plugins, array('wpemoji'));
	  else
	    return array();
	}
	add_action('init', 'disableEmojis');

	// Add post slug to body class
	function add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
		}
		add_filter( 'body_class', 'add_slug_body_class' );

	// Remove Gutenberg Block Library CSS from loading on the frontend
	function smartwp_remove_wp_block_library_css(){
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
	   }
	// add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );


	   function cptui_register_my_cpts() {

		/**
		 * Post Type: Notes.
		 */

		$labels = [
			"name" => esc_html__( "Notes", "custom-post-type-ui" ),
			"singular_name" => esc_html__( "Note", "custom-post-type-ui" ),
		];

		$args = [
			"label" => esc_html__( "Notes", "custom-post-type-ui" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"rest_namespace" => "wp/v2",
			"has_archive" => true,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"can_export" => true,
			"rewrite" => [ "slug" => "notes", "with_front" => true ],
			"query_var" => true,
			"menu_icon" => "dashicons-superhero",
			"supports" => [ "title", "editor", "thumbnail" ],
			"show_in_graphql" => false,
		];

		register_post_type( "notes", $args );
	}

	add_action( 'init', 'cptui_register_my_cpts' );

//	add_filter('next_posts_link_attributes', 'posts_link_attributes');

	function posts_link_attributes() {
		if ( is_post_type_archive('notes') ) {  return 'id="load-more-notes" class="load-more-notes"'; }
	}

	// Scripts
	function site_scripts(){
		$base = get_template_directory_uri();
		wp_enqueue_script('jquery');
	}
	add_action('wp_enqueue_scripts', 'site_scripts');


?>