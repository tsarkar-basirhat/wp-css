$(function(){
$('.heroSlide').owlCarousel({
  //loop:true,
  //autoplay:true,
  //autoplayHoverPause:true,
  //autoPlaySpeed: 8000,
  //autoPlayTimeout: 8000,
  smartSpeed:1500,
  items: 1,
  margin:0,
  nav:true,
  dots:false,
  onInitialized:counter2,
  onTranslated:counter2
});
function counter2(event) {
  var element = event.target;
  var items = event.item.count;
  var item = event.item.index + 1;
  var sldWidth = 100;
  var sldPercent = sldWidth * item / items;
  $('.topSlideinf').html('0'+item+" / 0"+items)
  $('.topSlideState span').css("width", sldPercent + "%");
}
});

$('.mostPop').owlCarousel({
  //smartSpeed:1500,
  items: 4,
  margin:30,
  nav:true,
  dots:false
});

$(window).load(function(){
var a = new StickySidebar('#sidebar', {
			topSpacing: 0,
			bottomSpacing: 0,
			containerSelector: '.main-content',
			innerWrapperSelector: '.sidebar__inner'
});
});
