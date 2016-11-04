$(function(){
	console.log("It's alive");

	var $toggleButton = $('.toggle_button'),

	$toggleButton.on('click', function(){
		$toggleButton.toggleClass('button_open')
		$('#menu-main-nav').toggleClass('show')
		$('body').css('background-color', 'lightgrey')
	});
});

$('.home_carousel').flickity({
	// options
	contain: true,
	imagesLoaded: true,
	freeScroll: true,
	wrapAround: true,
	prevNextButtons: false,
	pageDots: false,
	lazyLoad: true,
});