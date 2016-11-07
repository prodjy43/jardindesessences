$(document).ready(function(){
	$('.menu-btn').on('click', function(){
		$('nav ul.small').toggleClass('active')
		$('.menu-btn').toggleClass('active')
	})
})