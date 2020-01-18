"use strict";
// Dom7
var $ = Dom7;

// Init App
var app = new Framework7({
	root: '#app',
	routes: routes,
        theme:"ios",
	view: {
		pushState: false,
                iosDynamicNavbar: true,
	},
         panel: {
    swipe: 'left',
  },

});

var swiper = app.swiper.create('.swiper-container', {
    speed: 400,
    spaceBetween: 100
});

var mainView = app.views.create('.view-main', {
	url: './ViewAllGrid.html'
});

$('.hide-navbar').on('click', function () {
  app.panel.close('.panel-left');
});

//This is my report page example, I pass js script into it on load.
$(document).on('page:init', '.page[data-name="createreport"]', function (e) {
  $.getScript("init.js"); 
  $.getScript("js/functions.js");
});
//The problem I have right now is that my Ajax calls are currently not working, still trying to figure out how...
