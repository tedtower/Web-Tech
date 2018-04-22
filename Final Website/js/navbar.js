$(document).ready(function(){
	$('div').addClass('tar');
	$("a").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
        		scrollTop: $(hash).offset().top
      		}, 600, function(){
      			window.location.hash = hash;
      		});
      	}
    });
});

$(window).on('scroll', function() {
	if($(window).scrollTop()) {
		$('nav').addClass('black');
	}
	else {
		$('nav').removeClass('black');
	}
})