/**
 * @requires HBS
 */

import '../lib/transitions.js';

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
		module.initNavControls();
		module.initContactFormControls();
	};

	module.initPreloader = function() {
		// Ends the preloader on initial page load
		endPreloader();

		// Starts and ends the preloader when clicking a link
		// with '.internal-link'
		$('.internal-link').on('click', function() {
			startPreloader();
			endPreloader();
		});

		// Starts and ends the preloader when the back or forward
		// buttons are clicked (popstate changes)
		$(window).on('popstate', function() {
			startPreloader();
			endPreloader();
		});

		function startPreloader() {
			// Unhides the preloader and sets it back to opacity: 0;
			$('.preloader').removeClass('hidden');

			// Closes the preloader doors after 0.1s just to give the
			// preloader time to unhide
			setTimeout(function() {
				$('.preloader').removeClass('loaded');
			}, 100);

			// Fades in the loader animation after 0.5s
			setTimeout(function() {
				$('.loader').removeClass('state-hidden');
			}, 500);
		}

		function endPreloader() {
			// Fades out the loader animation after 0.25s
			setTimeout(function() {
				$('.loader').addClass('state-hidden');
			}, 1250);

			// Runs the preloader for 1.5s
			setTimeout(function() {
				$('.preloader').addClass('loaded');
			}, 1500);

			// Sets the preloader as hidden after 2s so the page
			// isn't rendering an opacity: 0; element
			setTimeout(function() {
				$('.preloader').addClass('hidden');
			}, 2000);
		}
	}

	module.initNavControls = function() {
		// On page load searches the Url for 'work.html' or
		// 'photography.html' and add the active class
		var page = window.location.pathname;
		if (page.search('work.html') >= 0) {
			$('#work').addClass('active');
		} else if (page.search('photography.html') >= 0) {
			$('#photography').addClass('active');
		}
	}

	module.initContactFormControls = function() {
		$('.open-contact-form').on('click', function() {
			if ($('.form__popup').hasClass('hidden')) {
				$('.form__popup').removeClass('hidden');
				$('.form__cover').removeClass('hidden');

				setTimeout(function() {
					$('.form__popup').removeClass('state-closed');
					$('.form__cover').removeClass('state-closed');
				}, 100);
			}
		});

		$('.close-contact-form').on('click', function() {
			closeForm();
		});

		$('.form__cover').on('click', function() {
			closeForm();
		})

		function closeForm() {
			if (!$('.form__popup').hasClass('hidden')) {
				$('.form__popup').addClass('state-closed');
				$('.form__cover').addClass('state-closed');

				setTimeout(function() {
					$('.form__popup').addClass('hidden');
					$('.form__cover').addClass('hidden');
				}, 500);
			}
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
