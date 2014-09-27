//remove possible storage items of previous session
if (typeof localStorage !== 'undefined') {
	localStorage.clear();
}

$.getScript('/resources/global/js/supported_browsers.js')
    .done(function (script, textStatus) {
        'use strict';
        isBrowserSupported();
    })
    .fail(function (jqxhr, settings, exception) {
        'use strict';
        console.log("Did not find supported_browsers.js");
    });

$(document).ready(function() {
	/**
	 * Declare types
	 */
	var styles = ['light', 'dark1', 'dark2'];
	var style = styles[Math.floor(Math.random()*styles.length)];
	$('body').attr('data-style', style);

	/**
	 * Startup
	 */
	renderSlides();

	var timer = setInterval(function() {
		rotateSlides();
	}, 3500);

	$('ul#blocks > li#slides div#selector > img').click(function() {
		clearInterval(timer);
		timer = setInterval(function() {
			rotateSlides();
		}, 6000);

		var load = $(this).index();
		$('ul#blocks > li#slides div#selector > img').attr('src', '/resources/leap3/imgs/login/Off.png');
		$('li#slides ul li.active').fadeOut(100).removeClass('active');
		$('li#slides ul li:eq(' + load + ')').fadeIn(100).addClass('active');
		$(this).attr('src', '/resources/leap3/imgs/login/On.png');
	});

	$('div#footer div.wrapper ul#contactnumbers li').click(function() {
		var contactMenu = $(this).parent();
		if(contactMenu.hasClass('open')) {
			$('div#footer div.wrapper ul#contactnumbers li.active').removeClass('active');
			$(this).addClass('active');
			contactMenu.removeClass('open');
			$('#openContact').show();
		} else {
			$('#openContact').hide();
			contactMenu.addClass('open');
		}
	});

	$('#openContact').click(function() {
		var contactMenu = $('div#footer div.wrapper ul#contactnumbers');
		if(contactMenu.hasClass('open')) {
			contactMenu.removeClass('open');
		} else {
			$(this).hide();
			contactMenu.addClass('open');
		}
	});

	$('ul#blocks > li#slides > ul > li').click(function() {
		window.location = $(this).data('url');
	});

});

function renderSlides() {
	var total = $('li#slides ul li').length;
	$('li#slides ul li').each(function() {
		$(this).css('z-index', 100-$(this).index());
		$(this).css('background-image', 'url(\'' + $(this).data('image') + '\')');
	});

	var initial = Math.floor(Math.random()*$('li#slides ul li').length);

	$('li#slides ul li:eq(' + initial + ')').addClass('active');
	for(i=0; i<total; i++) {
		$('li#slides div#selector').append('<img src="/resources/leap3/imgs/login/Off.png" />');
	}

	$('li#slides div#selector > img:eq(' + initial + ')').attr('src', '/resources/leap3/imgs/login/On.png');
}

function rotateSlides() {
	var current = $('li#slides ul li.active').index();
	var total = $('li#slides ul li').length;
	if(current+1<total) {
		var next = current+1;
	} else {
		var next = 0;
	}
	$('li#slides ul li.active').fadeOut('100').removeClass('active');
	$('ul#blocks > li#slides div#selector > img').attr('src', '/resources/leap3/imgs/login/Off.png');
	$('li#slides ul li:eq(' + next + ')').fadeIn('100').addClass('active');
	$('li#slides div#selector > img:eq(' + next + ')').attr('src', '/resources/leap3/imgs/login/On.png');
}
