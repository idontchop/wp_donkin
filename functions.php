<?php
/* Donkin's theme
*	functions.php
*/




function donkin_scripts () {
	$donkin_theme_version = wp_get_theme()['Version'];
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, $donkin_theme_version);
	echo '<!-- donkin theme version ' . $donkin_theme_version . '-->';
}

add_action('wp_enqueue_scripts', 'donkin_scripts');

function donkin_setup() {
	// featured image
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside'));
	set_post_thumbnail_size ( 1200, 9999);

	register_nav_menus( array ( 'primary' => ('Primary Menu')));
}

add_action('after_setup_theme', 'donkin_setup');

function donkin_excerpt() {
	return 80;
}

add_filter('excerpt_length', 'donkin_excerpt');

function donkin_excerpt_more( $more ) {
	return ' <a href="' . get_the_permalink() . '"><i class="fab fa-readme fa-lg"></i></a>';
}

add_filter('excerpt_more', 'donkin_excerpt_more');

function donkin_sidebar() {
	register_sidebar ( array (
		'name' => 'Donkin Sidebar',
		'id' => 'sidebar',
		'before_title' => '<header class="article-header"><h2 class="article-h2 donkin-brown">',
		'after_title' => '</h2></header>',
		'before_widget' => '<div class="donkinSideBar donkinSideBarList">'


	));
}

add_action('widgets_init', 'donkin_sidebar');


/* internal theme functions */

/*returns the about page ID for donkin author page */
function donkin_get_about_page() {
	$args = [
		'post_type'  => 'page',
		'post__in' => [11, 29],
		'posts_per_page' => 2
	];

	return new WP_Query($args);

}

/* finds related posts, defaults to any posts if no tags */
function donkin_related_posts () {
	$tagsRelated = wp_get_post_tags ( get_the_ID() );
	$tagIds = [];
	foreach ($tagsRelated as $tag) {
		$tagIds = $tag->term_id;
	}

	$argsRelated = [];

	if (!empty($tagIds)) {
		$argsRelated = [
			'tag__in' => $tagIds,
			'post__not_in' => [get_the_ID()],
			'posts_per_page' => 3
		];
	} else {
		$argsRelated = [
			'post__not_in' => [get_the_ID()],
			'posts_per_page' => 3
		];
	}

	$relatedQuery = new WP_Query($argsRelated);

	if ($relatedQuery->have_posts()) {

		while ($relatedQuery->have_posts()) {
			$relatedQuery->the_post();

			get_template_part('template-parts/related-posts');
		}
	} else {
		echo 'no posts';
	}

	wp_reset_postdata();
}
