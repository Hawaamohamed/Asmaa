$(document).ready(function(){
	
	$('.carousel').carousel
	({interval:4000});
	

$(".gear-check").click(function(){
$(".color-option").fadeToggle();});


/*scroll-top*/
var scrollButton = $("#scroll-top");
$(window).scroll(function(){
	if($(this).scrollTop()>=300)
	{
		scrollButton.show();
	}
	else{
		scrollButton.hide();
	}
});
scrollButton.click(function(){
	$("html,body").animate({scrollTop:0},600);
});

});