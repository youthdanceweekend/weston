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

		// Create a backdrop element:
		$('<div class="nav-backdrop"></div>').appendTo($body);

		// Add the toggle action to the menu button:
		$('[data-toggle="menu"]').on('click.slidingnav touchend.slidingnav', nav_toggle_handler);

		// Add the nav out action to the entire page:
		$('.nav-backdrop, .nav-close').on('click.slidingnav touchend.slidingnav', nav_out_handler);

	});
}(jQuery));
