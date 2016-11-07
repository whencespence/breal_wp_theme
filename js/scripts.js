$(function(){
	console.log("It's alive");

	//handy browser sync
	gulp.task('bs', function() {
		browserSync.init({
			proxy: 'http://localhost:8888'
		});
	});

	//script for custom nav toggle button
	var $toggleButton = $('.toggle_button'),

	$toggleButton.on('click', function(){
		$toggleButton.toggleClass('button_open')
		$('#menu-main-nav').toggleClass('show')
	}); //end of custom nav toggle button

});

