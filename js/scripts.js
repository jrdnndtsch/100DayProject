$(function(){
	$('.aboutSvg').on('click', function(){
		$('.aboutInfo').removeClass('exit').addClass('enter');
	});
	$('.close').on('click', function(){
		console.log('exitng');
		$('.aboutInfo').removeClass('enter').addClass('exit');
	});

	$(window).scroll(function(){
		$('.post').each(function(i){
			var objectBottom = $(this).offset().top + $(this).outerHeight();
			var windowBottom = $(window).scrollTop() + $(window).height();
			if(windowBottom > objectBottom){
				$(this).addClass('fadeIn');
			};
		});
	});
});