(function ($) {
	'use strict';

	// JQuery fallback: add title attribute from placeholder
	$('input, textarea').attr('title', function () {
		return $(this).attr('placeholder');
	});
	
	// Focus Search if Searchform is empty
	$('.search-form').on('submit', function (event) {
		var search = document.getElementById('s');
		if (search.value === '') {
			search.focus();
			return false;
		}
	});
	

	//initialize stacked Slick slider
	$('.slick-slider.stacked').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		responsive: [
			{			
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}  
	  	]
	}); 

	//initialize side-by-side Slick slider
	$('.slick-slider.single').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		// responsive: [
		// 	{
		// 		breakpoint: 480,
		// 		settings: {
		// 			slidesToShow: 1,
		// 			slidesToScroll: 1
		// 		}
		// 	} 
	 //  	]
	});
}(jQuery));