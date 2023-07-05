<!doctype html>
<!--
	Author by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Author</title>
	<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" />
	<link href="<?php bloginfo('template_url'); ?>/css/slick.css" rel="stylesheet" />
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
</head>
<body>

	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
			<img src="<?php bloginfo('template_url'); ?>/images/site-logo.png" alt="site logo">
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="#">Homepage</a></li>
					<li><a href="#">Page 1</a></li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
					<li><a href="#">Page 4</a></li>
				</ul>
			</div>
			<div id="myBtn" class="burger-container" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>
