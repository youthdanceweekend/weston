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

		$('[data-toggle="menu"]').on('click.slidingnav touchend.slidingnav', nav_toggle_handler);
		$('.full-page').on('click.slidingnav touchend.slidingnav', nav_out_handler);
	});
}(jQuery));
