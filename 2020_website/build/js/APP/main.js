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
		console.log('Hi from main.init()');
	};

	/**
	 * Initialize the app and run the bootstrapper
	 */
	$(document).ready(function() {
		module.init();
		HBS.initPage();
	});
	HBS.namespace('APP.main', module);
}());
