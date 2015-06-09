<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title('| ', true, 'right'); ?><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>

		<?php if(is_random_header_image()): ?>
			<script type="text/javascript">
				// Cache-safe random header image:
				// Only selects from "uploaded" headers, not default ones.
				(function () {
					var header_images = [
						<?php $images = get_uploaded_header_images(); ?>
						<?php foreach($images as $image): ?>
							'<?= $image['url'] ?>'<?php if ($image !== end($images)): ?>,<?php endif; ?>
						<?php endforeach; ?>
					];
					// On domready, assign a random image to the header:
					$(function () {
						var random_image = header_images[Math.floor(Math.random() * header_images.length)];
						$('.site-header--ydw').css('background-image', 'url("'+ random_image +'")');
						console.log(random_image);
					});
				}());
			</script>
		<?php endif; ?>
	</head>
	<body>
		<div class="full-page">
			<header class="site-header--ydw" style="background-image: url('<?= esc_url(get_header_image()) ?>')">
				<h1 class="site-title--ydw<?php if (is_front_page()): ?> animated fadeInDown<?php endif; ?>">Youth Dance Weekend</h1>
				<a href="#" data-toggle="menu" class="nav-toggle"><i class="fa fa-bars"></i> Menu</a>
			</header>
			<div class="container">
				<nav class="navbar navbar-default navbar-overlap navbar-ydw nav-menu<?php if (is_front_page()): ?> animated fadeIn<?php endif; ?>">
					<div class="container-fluid">
						<?php get_search_form(); ?>
						<?php wp_nav_menu(array(
							'theme_location' => 'primary',
							'depth' => 0,
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
							'walker' => new wp_bootstrap_navwalker(),
						)); ?>
					</div>
				</nav>
			</div>
