<?php if (have_posts()) : the_post(); ?>
<?php if (has_post_thumbnail()) {
	$header_image = get_the_post_thumbnail_url();
} else {
	$header_image = "/images/placeholder-01.png";
}
require('header.php'); ?>
	
	<div class="articlecontainer">

		<div class="main">
			
		<article class="articlePage">
			<header class="article-header">
			<h1 class="article-h1"><?php the_title(); ?></h1>		
			</header>
				<?php get_template_part('template-parts/author-byline'); ?>		
			<div class="articleContent">
				<?php  the_content(); ?>
			</div>

			

			<div class="nextContent">
				<h3 class="next-h3 article-h3">Related Articles</h3>
				<?php donkin_related_posts(); ?>				
			</div>
			
			
			<?php get_template_part('template-parts/single-page-nav'); ?>	
			
			<?php get_template_part("template-parts/meta","bottom"); ?>
			

			
			<div class="container clearfix">
			<?php comments_template(); ?>
			</div>
			
		</article>
		
		</div>

	
<?php get_footer(); ?>

<?php else : echo 'Error in single.php: didn\'t find post'; ?>
<?php endif; ?>
</div>