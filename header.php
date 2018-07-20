<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Donkin's Blog</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<?php wp_head(); ?>


</head>

<body>
	<div class="headerContainer" style="background: url('<?php echo $header_image; ?>') no-repeat; background-size: 100%; overflow: hidden;">
	<header class="donkinHeader articleIndex">
		<a href="<?php echo esc_url(home_url()); ?>">
		<h1 class="donkinHeader donkinHeaderH1">Donkin's</h1><img src="/images/Donkey-05.png" class="donkinLogo"><h1 class="donkinHeader donkinHeaderH1">Blog</h1><h1 class="donkinHeader donkinHeaderH1Small">Donkin's Blog</h1></a>
		<nav class="donkinNavBar">
			
				<?php $args = array ('theme_location' => 'primary', 'menu_class' => 'donkinNavTitle');
				wp_nav_menu($args);
				?>
				
		</nav>
	</header>
	</div>