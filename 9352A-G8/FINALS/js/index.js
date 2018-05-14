//Adding Color On Scroll Navigation
$(window).on('scroll', function() {
	if($(window).scrollTop()) {
		$('nav').addClass('black');
	}
	else {
		$('nav').removeClass('black');
	}
})

//Adding background on navbar when clicked
function addBG() {
	$('nav').addClass('black');
}

//Disabling Right Click At The Video
$('video').bind('contextmenu', function(e) {
    return false;
}); 