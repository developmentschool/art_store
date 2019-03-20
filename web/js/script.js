$(function($) {
	$('.header-vertical-menu').hover(function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideDown();
	}, function() {
		$(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideUp();
	});
});