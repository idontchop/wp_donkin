<?php 
/*  (original markup)
*				<nav role="navigation" class="articleNav">
*				<div class="navPrevious">
*					<h4 class="article-h4 nav-h4"><i class="fas fa-arrow-left fa-fw"></i>Previous Article</h4>
*				</div>
*				<div class="navNext">
*					<h4 class="article-h4 nav-h4">Next Article <i class="fa fa-arrow-right"></i></h4>
*				</div>
*			</nav>
*/
?>
			<nav role="navigation" class="articleNav">
				<div class="navPrevious">
					<?php previous_post_link('<h4 class="nav-h4"><i class="fas fa-arrow-left fa-fw"></i>%link</hr>'); ?>
				</div>
				<div class="navNext">
					 <?php next_post_link('<h4 class="nav-h4">%link <i class="fa fa-arrow-right"></i></h4>'); ?> 
				</div>
			</nav>	