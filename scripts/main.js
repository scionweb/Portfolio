(function ($) {

	function scrollTo (duration, offset, href) {
		$.scrollTo(href, {
			duration: duration,
			offset: {top: offset},
			onAfter: function() {
				history.pushState(null, document.title, href);
			}
		});
	}

	$(function() {
		var $links = $('a[href^="#"]');

		$links
		.on('click', function (event) {
			var $this = $(this);
			var $header = $this.closest('#header');
			var height = $header.outerHeight();
			var href = $this.attr('href');
			scrollTo(1000, (height*-1), href);
			

			event.preventDefault();
		});

		$(window).on('popstate', function (event) {
			var href = location.hash;
			var height=$('#header').outerHeight();
			scrollTo(1000, (height*-1), href);
			event.preventDefault();

		});
	});

}(jQuery));