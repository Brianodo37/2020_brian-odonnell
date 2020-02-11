import "./transitions.js";
import "./lib/particles.min.js";
import AOS from "./lib/aos.js";

(function ($) {
	'use strict';

	// ----- Preloader Controls -----
	endPreloader();

	// Starts and ends the preloader when clicking a link
	// with '.internal-link'
	$('.internal-link').on('click', function() {
		startPreloader();
		endPreloader();
	});

	// Runs when the back or forward button is clicked
	// (popstate changes)
	$(window).on('popstate', function() {
		startPreloader();
		endPreloader();
	});

	function startPreloader() {
		setTimeout(function() {
			$('.preloader').removeClass('loaded');
		}, 0);
	}

	function endPreloader() {
		// Runs the preloader for 1.5s
		setTimeout(function() {
			$('.preloader').addClass('loaded');
		}, 1500);
	}

	// ----- Active Nav Tab Controls -----
	setActive();

	// Runs any time a link is clicked
	$('a').on('click', function() {
		setActive();
	});

	// Runs when the back or forward button is clicked
	// (popstate changes)
	$(window).on('popstate', function() {
		setActive();
	});

	function setActive() {
		// After a 1sec delay it searches for '.work' and '.photography'
		// and sets them as active if found
		setTimeout(function() {
			var activePage = $('#page')[0].attributes['data-router-view'].value;
			if ($('#' + activePage)) {
				$('.nav-link.active').removeClass('active');
				$('#' + activePage).addClass('active');
			}
		}, 1200);
	}

	// ----- Contact Form Controls -----
	$('.open-form-js').on('click', function() {
		if ($('.form__popup').hasClass('hidden')) {
			$('.form__popup').removeClass('hidden');
			$('.form__cover').removeClass('hidden');
			$('body').addClass('noscroll');

			setTimeout(function() {
				$('.form__popup').removeClass('state-closed');
				$('.form__cover').removeClass('state-closed');
			}, 100);
		}
	});

	$('.close-form-js').on('click', function() {
		closeForm();
	});

	$('.form__cover').on('click', function() {
		closeForm();
	});

	function closeForm() {
		if (!$('.form__popup').hasClass('hidden')) {
			$('.form__popup').addClass('state-closed');
			$('.form__cover').addClass('state-closed');
			$('body').removeClass('noscroll');

			setTimeout(function() {
				$('.form__popup').addClass('hidden');
				$('.form__cover').addClass('hidden');
			}, 500);
		}
	}

	// ----- Initialize Particles JS -----
	initParticles();

	$('.internal-link').on('click', function() {
		initParticles();
	})

	$(window).on('popstate', function() {
		initParticles();
	});

	// function initParticles() {
	// 	setTimeout(function() {
	// 		if ($('body').hasClass('home-page')) {
	// 			particlesJS.load('particles-js', 'wp-content/themes/2020_Website/assets/json/particles-config.json', function() {
	// 			});
	// 		}
	// 	}, 1000)
	// }

	console.log($('.loader').css('opacity'));
	function initParticles() {
		var particlesCheck = setInterval(function() {
			console.log($('.loader').css('opacity'));
			if ($('.loader').css('opacity') == 0 && $('body').hasClass('home-page')) {
				console.log('Success');
				particlesJS.load('particles-js', 'wp-content/themes/2020_Website/assets/json/particles-config.json', function() {
				});
				clearInterval(particlesCheck);
			}
		}, 100);
	}


	// ----- Initialize Animate On Scroll (AOS) -----
	initAOS();

	$('.internal-link').on('click', function() {
		initAOS();
	});

	$(window).on('popstate', function() {
		initAOS();
	});

	function initAOS() {
		var preloaderFinish = setInterval(function() {
			if ($('.preloader__cover--left')[0].scrollWidth == 0 && $('.preloader').hasClass('loaded')) {
				AOS.init({
					once: true
				});
				clearInterval(preloaderFinish);
			}
		}, 100);
	}

	// ----- Add page specific class to body on intial page load -----
	var page = $('#page')[0].attributes['data-router-view'].value + '-page';
	$('body').addClass(page);

	// ----- Mobile Nav Controls -----
	$('.open-nav-js').on('click', function() {
		if ($('.mobile-nav-js').hasClass('state-closed')) {
			$('.mobile-nav-js').removeClass('state-closed');
			$('body').addClass('noscroll');
		}
	});

	$('.close-nav-js').on('click', function() {
		if (!$('.mobile-nav-js').hasClass('state-closed')) {
			$('.mobile-nav-js').addClass('state-closed');
			$('body').removeClass('noscroll');
		}
	});

	$('.nav-link').on('click', function() {
		if (!$('.mobile-nav-js').hasClass('state-closed')) {
			setTimeout(function() {
				$('.mobile-nav-js').addClass('state-closed');
				$('body').removeClass('noscroll');
			}, 1000);
		}
	});

}(jQuery));
