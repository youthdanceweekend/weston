			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 margin-trailer">
							<?php wp_nav_menu(array(
								'theme_location' => 'footer1',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'ydw-nav-list',
							)); ?>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 margin-trailer">
							<?php wp_nav_menu(array(
								'theme_location' => 'footer2',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'ydw-nav-list',
							)); ?>
						</div>
						<div class="clearfix hidden-md hidden-lg"></div>
						<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 margin-trailer">
							<?php wp_nav_menu(array(
								'theme_location' => 'footer3',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'ydw-nav-list',
							)); ?>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 margin-trailer">
							<?php wp_nav_menu(array(
								'theme_location' => 'footer4',
								'depth' => 2,
								'container' => false,
								'menu_class' => 'ydw-nav-list',
							)); ?>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</footer>
			<?php wp_footer(); ?>
		</div><!-- /.full-page -->
	</body>
</html>
