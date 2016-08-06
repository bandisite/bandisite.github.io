/****************************/
$(document).ready(function(){
$(".owl-carousel").owlCarousel({
	items: 3,
	responsive:	true
});
});
/************//**************/
$(function(){
	$('.portfolio').mixItUp();
});
/************//**************/
$(document).ready(function(){
    $("nav ul li").on("click","a", function (event) {
              event.preventDefault();
     var id  = $(this).attr('href'),
     top = $(id).offset().top;         
    $('body,html').animate({scrollTop: top}, 1000);
    });
    })

