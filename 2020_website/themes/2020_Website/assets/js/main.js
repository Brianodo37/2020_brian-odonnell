// import "./transitions.js";
// import "./lib/particles.min.js";
import AOS from "./lib/aos.js";

(function ($) {
	'use strict';

	// ----- Preloader Controls -----
	// endPreloader();

	// Starts and ends the preloader when clicking a link
	// with '.internal-link'
	// $('.internal-link').on('click', function() {
	// 	startPreloader();
	// 	endPreloader();
	// });

	// Runs when the back or forward button is clicked
	// (popstate changes)
	// $(window).on('popstate', function() {
	// 	startPreloader();
	// 	endPreloader();
	// });

	// function startPreloader() {
	// 	setTimeout(function() {
	// 		$('.preloader').removeClass('loaded');
	// 	}, 0);
	// }

	// function endPreloader() {
	// 	// Runs the preloader for 1.5s
	// 	setTimeout(function() {
	// 		$('.preloader').addClass('loaded');
	// 	}, 1500);
	// }

	// ----- Active Nav Tab Controls -----
	// setActive();

	// Runs any time a link is clicked
	// $('a').on('click', function() {
	// 	setActive();
	// });

	// Runs when the back or forward button is clicked
	// (popstate changes)
	// $(window).on('popstate', function() {
	// 	setActive();
	// });

	// function setActive() {
	// 	After a 1sec delay it searches for '.work' and '.photography'
	// 	and sets them as active if found
	// 	setTimeout(function() {
	// 		var activePage = $('#page')[0].attributes['data-router-view'].value;
	// 		if ($('#' + activePage)) {
	// 			$('.nav-link.active').removeClass('active');
	// 			$('#' + activePage).addClass('active');
	// 		}
	// 	}, 1200);
	// }

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

	// ----- Seting active nav link -----
	var page = $('#page')[0].attributes['data-router-view'].value;

	$('body').addClass(page);

	var pageID = '#' + $('#page')[0].attributes['data-router-view'].value;

	$(pageID).addClass('active');

	// ----- Initialize Particles JS -----
	// if ($('body').hasClass('home')) {
	// 	particlesJS.load('particles-js', '/wp-content/themes/2020_Website/assets/json/particles-config.json', function() {
	// 	});
	// }

	// initParticles();

	// $('.internal-link').on('click', function() {
	// 	initParticles();
	// })

	// $(window).on('popstate', function() {
	// 	initParticles();
	// });

	// function initParticles() {
	// 	var particlesCheck = setInterval(function() {
	// 		if ($('.loader').css('opacity') == 0 && $('body').hasClass('home-page')) {
	// 			particlesJS.load('particles-js', 'wp-content/themes/2020_Website/assets/json/particles-config.json', function() {
	// 			});
	// 			clearInterval(particlesCheck);
	// 		}
	// 	}, 100);
	// }


	// ----- Initialize Animate On Scroll (AOS) -----
	initAOS();

	$('.internal-link').on('click', function() {
		initAOS();
	});

	$(window).on('popstate', function() {
		initAOS();
	});

	function initAOS() {
		AOS.init({
			once: true
		})
	}

	// function initAOS() {
	// 	var preloaderFinish = setInterval(function() {
	// 		if ($('.preloader__cover--left')[0].scrollWidth == 0 && $('.preloader').hasClass('loaded')) {
	// 			AOS.init({
	// 				once: true
	// 			});
	// 			clearInterval(preloaderFinish);
	// 		}
	// 	}, 100);
	// }

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

	// $('.nav-link').on('click', function() {
	// 	if (!$('.mobile-nav-js').hasClass('state-closed')) {
	// 		setTimeout(function() {
	// 			$('.mobile-nav-js').addClass('state-closed');
	// 			$('body').removeClass('noscroll');
	// 		}, 1000);
	// 	}
	// });

	// ----- Generate random offset for photos -----
	// var middle = $('.middle');
	// console.log(middle);
	// for (var i = 0; i < middle.length; i++) {
	// 	var offset = randomNumber();
	// 	var offsetDeg = 'rotate(' + offset + 'deg)';
	// 	console.log('rotate = ' + offsetDeg);
	// 	middle[i].css('opacity', '0');
	// }

	// function randomNumber() {
	// 	return Math.floor(Math.random() * 5) + 1;
	// }

	$('.single-item').slick({
		// autoplay: true,
		pauseOnHover: true,
		dots: true,
		laxyload: 'ondemand',
		autoplaySpeed: '5000',
		speed: '500'
	});

	var apiUrl = 'https://www.goodreads.com/review/list/42381592-brian-o-donnell.xml?per_page=50&sort=date_read&shelf=read&key=Iwsr63XkubkuB5u8IuiSBQ&v=2';

	// Handles CORS request (https -> http)
	$.ajaxPrefilter(function(options) {
		if (options.crossDomain && $.support.cors) {
			options.url = 'https://cors-anywhere.herokuapp.com/' + apiUrl;
		}
	});

	$.ajax ({
		url: apiUrl,
		type: 'GET',
		crossDomain: true,
		dataType: 'xml',
		success: parseXml,
		error: function() {
			apiFailed();
		}
	});

	function parseXml(xml) {
		var booksThisYear = 1;
		$(xml).find('review').each(function() {
			var fullBookDateString = $(this)[0].children[10].textContent;
			var bookYearString = fullBookDateString.slice(26);
			var currentYearObject = new Date().getFullYear();
			var currentYearString = currentYearObject.toString();

			if (bookYearString == currentYearString) {
				booksThisYear++;
			}
		});

		countReplace(booksThisYear);
	}

	function countReplace(booksThisYear) {
		var space = '&nbsp;';
		var bookNumber = booksThisYear.toString()
		bookNumber = bookNumber.concat(space);
		console.log(bookNumber);
		$('#bookNumber')[0].innerHTML = bookNumber;

		hideSpinner();
	}

	function apiFailed() {
		$('#bookNumber')[0].innerHTML = 15;

		hideSpinner();
	}

	function hideSpinner() {
		$('.stats__item--book').addClass('js-numberAdded');

		// Hide spinner after 2s
		setTimeout(
			function() {
				$('.spinner').addClass('hidden');
			}, 2000
		);
	}

}(jQuery));

