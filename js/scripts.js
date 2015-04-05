$(function(){
	$('.aboutSvg').on('click', function(){
		$('.aboutInfo').removeClass('exit').addClass('enter');
	});
	$('.close').on('click', function(){
		console.log('exitng');
		$('.aboutInfo').removeClass('enter').addClass('exit');
	});
});