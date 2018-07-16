
(function($){
  $(function(){

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

var slider = document.querySelector('.slider');
M.Slider.init(slider,{
	indicators: false,
	transition: 500,
	interval: 6000
});

$(document).ready(function(){
  $('.collapsible').collapsible();
});