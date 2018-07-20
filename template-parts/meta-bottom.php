<?php 	$categories = get_the_category_list(', ');
		$tags = get_the_tag_list('',', ');
?>

		<footer class="articleMeta">
				<div class="articleMetaDiv"><i class="fa fa-folder-open fa-fw donkin-brown"></i>
				<?php echo $categories; ?></div>
				<div class="articleMetaDiv"><i class="fa fa-tags fa-fw"></i>
				<?php echo $tags; ?></div>
			</footer>
