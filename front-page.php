<?php $header_image = home_url() . '/images/frontpage-header.jpg'; ?>
<!-- loading donkin front-page.php -->
<?php require('header.php'); /*hmm, need to do it this way? */ ?>

	<div class="container">
		<div class="main">
		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
		<article class="mainPage">
			<header class="article-header">
				<h2 class="article-h2"><a href="<?php the_permalink(); ?>" alt="article1" class="articleTitleLink"> <?php the_title(); ?></a></h2>

			</header>


				<?php get_template_part('template-parts/author-byline');

				/* support for asides and posts. Asides show all the content with no header */

				get_template_part('template-parts/main',get_post_format()); ?>




		</article>

		<?php endwhile; ?>
		<?php else: ?>
			<?php echo wpautop('no posts found'); ?>
		<?php endif; ?>


		<div class="navigation">
			<h4 class="nav-h4">
				<?php posts_nav_link('&nbsp; <i class="fas fa-exchange-alt faw"></i> &nbsp;', '<i class="fas fa-angle-left faw"></i> Newer Posts',
									'Older Posts <i class="fas fa-angle-right faw"></i>'); ?>
			</h4>
		</div>

		</div>

<?php get_footer(); ?>
