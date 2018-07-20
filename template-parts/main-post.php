<?php if (has_post_thumbnail()) {
  echo '<img src="'; the_post_thumbnail_url(); echo '" ';
  }	else {
    echo '<img src="/images/placeholder-01.png" ';
  }

  echo 'alt ="' . esc_html( get_the_title() ) . '" class="articleHeader" />';
?>

<?php the_excerpt(); ?>

<?php get_template_part('template-parts/meta','bottom'); ?>
