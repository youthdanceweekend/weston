<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="full-page">
			<header class="site-header--ydw" style="background-image: url('<?= esc_url(get_header_image()) ?>')">
				<h1 class="site-title--ydw animated fadeInDown">Youth Dance Weekend</h1>
				<a href="#" data-toggle="menu" class="nav-toggle"><i class="fa fa-bars"></i> Menu</a>
			</header>
			<div class="container">
				<nav class="navbar navbar-default navbar-overlap navbar-ydw nav-menu animated fadeIn">
					<div class="container-fluid">
						<?php get_search_form(); ?>
						<ul class="nav navbar-nav">
							<li><a href="#">Home</a></li>
							<li><a href="#">General Info</a></li>
							<li><a href="#">YDW 2015</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">Contact YDW</a></li>
						</ul>
					</div>
				</nav>
			</div>
