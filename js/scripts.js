$(function(){
	console.log("It's alive");

	var $toggleButton = $('.toggle_button'),

	$toggleButton.on('click', function(){
		$toggleButton.toggleClass('button_open')
		$('#menu-main-nav').toggleClass('menu_show');
	});

	gulp.task('bs', function() {
		browserSync.init({
			proxy: 'http://localhost:8888'
		});
	});

});

