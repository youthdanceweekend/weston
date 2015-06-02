;(function ($) {
	"use strict";

	$(function () {
		var $body = $(document.body),
			$html = $('html'),
		nav_toggle_handler = function (e) {
			$body.toggleClass('nav-in');
			e.preventDefault();
			e.stopPropagation();
		},
		nav_out_handler = function (e) {
			if ($body.hasClass('nav-in')) {
				$body.removeClass('nav-in');
				e.preventDefault();
				e.stopPropagation();
			}
		};

		// Add the toggle action to the menu button:
		$('[data-toggle="menu"]').on('click.slidingnav touchend.slidingnav', nav_toggle_handler);

		// Add the nav out action to the entire page:
		$('.full-page').on('click.slidingnav touchend.slidingnav', nav_out_handler);

		// Prevent the nav out action from functioning when someone pushes on the nav menu:
		$('.nav-menu').on('click.slidingnav touchend.slidingnav', function (e) { e.stopPropagation(); });
	});
}(jQuery));
