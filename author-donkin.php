<?php $header_image = '/images/placeholder-01.png'; ?>
<!-- loading donkin author.php -->
<?php require('header.php'); /*hmm, need to do it this way? */ ?>
	
	<div class="container">
		<div class="main">
		
		<?php /* Begin donkin pages */
		$donkin_about_query = donkin_get_about_page();
			/* yuck, no DRY */
		if (!$donkin_about_query->have_posts()) {
			echo "couldn't find donkin pages";
		}
		while ($donkin_about_query->have_posts()) : $donkin_about_query->the_post(); ?>
		
		<article class="mainPage">
			<header class="article-header">
				<h2 class="article-h2"><a href="<?php the_permalink(); ?>" alt="article1" class="articleTitleLink"> <?php the_title(); ?></a></h2>

			</header>
		
			

			<?php the_content(); ?>
						



		</article>
		<?php endwhile; ?>

			
			
		<?php /* begin latest donkin articles, standard for author page */		?>
		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
		
		<article class="mainPage">
			<header class="article-header">
				<h2 class="article-h2"><a href="<?php the_permalink(); ?>" alt="article1" class="articleTitleLink"> <?php the_title(); ?></a></h2>

			</header>
		
				<?php get_template_part('template-parts/author-byline'); ?>	
			
			<?php if (has_post_thumbnail()) {
			 	echo '<img src="'; the_post_thumbnail_url(); echo '" ';
				}	else {
					echo '<img src="/images/placeholder-01.png" ';
				}
			
				echo 'alt ="' . esc_html( get_the_title() ) . '" class="articleHeader" />';
			?>

			<?php the_excerpt(); ?>
			
			<?php get_template_part('template-parts/meta','bottom'); ?>
			



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
		
