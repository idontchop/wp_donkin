			<div class="article-author-div">		
				<span class="article-author"><i class="fa fa-clock fa-fw"></i><?php the_date('F d, Y'); ?></span>

				<span class="article-author"><img src="/images/DonkeyAuthor.png" alt="donkin" class="authorLogo">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ))); ?>">	By <?php the_author(); ?></a></span>
				

			</div>