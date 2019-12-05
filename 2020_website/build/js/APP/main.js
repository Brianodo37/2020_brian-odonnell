/**
 * @requires HBS
 */
(function() {
	/**
	 * @exports APP.main
	 */
	var module = {};

	/**
	 * Global init code for the whole application
	 */
	module.init = function() {
		module.initPreloader();
	};

	module.initPreloader = function() {
		// Fades out the loader animation
		setTimeout(function() {
			$('.loader').addClass('state-hidden');
		}, 2750);

		// Fakes the loading of the page for 3 seconds
		setTimeout(function() {
			$('.preloader').addClass('loaded');
		}, 3000);

		setTimeout(function() {
			$('.preloader').addClass('hidden');
		}, 3500);

		$('a').on('mousedown', stopNavigate);

		$('a').on('mouseleave', function () {
				$(window).on('beforeunload', function(){
						return 'Are you sure you want to leave?';
				});
		});

		function stopNavigate(){
			$(window).off('beforeunload');
		}
	}

	/**
	 * Initialize the app and run the bootstrapper
	 */
	$(document).ready(function() {
		module.init();
		HBS.initPage();
	});
	HBS.namespace('APP.main', module);
}());
