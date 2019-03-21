$(function($) {
	$('.header-vertical-menu').hover(function() {
		$(this).find('.dropdown-menu').addClass('show');
	}, function() {
		$(this).find('.dropdown-menu').removeClass('show');
	});
});