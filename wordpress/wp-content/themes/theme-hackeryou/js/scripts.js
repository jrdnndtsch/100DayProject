$(function(){

	// OPEN ABOUT SECTION ON CLICK //
	$('.aboutSvg').on('click', function(){
		$('.aboutInfo').removeClass('exit').addClass('enter');
	});
	$('.close').on('click', function(){
		$('.aboutInfo').removeClass('enter').addClass('exit');
	});


	// ANIMATE POSTS ON SCROLL //
	$(window).scroll(function(){
		$('.post').each(function(i){
			var objectBottom = $(this).offset().top + $(this).outerHeight();
			var windowBottom = $(window).scrollTop() + $(window).height();
			if(windowBottom > objectBottom){
				$(this).addClass('fadeIn');
			};
		});
	});

	// SCROLL TO TOP //
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.to-top').fadeIn();
		} else {
			$('.to-top').fadeOut();
		}
	});
	
	// BUTTON - SCROLL TO TOP //
	$('.to-top').click(function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop : 0},600);
		return false;
	});

});