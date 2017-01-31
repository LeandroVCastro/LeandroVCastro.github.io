$(document).ready(function(){
	$(".button-collapse").sideNav();

	 new WOW().init();

	 $(".flipContainer").flip({
	 	trigger: 'hover'
	 });

	 $('.parallax').parallax();

	 $('.modal-trigger').leanModal();


	 $('.tooltipped').tooltip({delay: 50});

})
