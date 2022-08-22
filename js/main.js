$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });



  var owl = $('.owl-carousel');
owl.owlCarousel({
    center: true,
    loop: true,
    startPosition: 1,
    margin: 10,
    items : 3
});
// Go to the next item
$('.slider_btn-prev').click(function() {
    owl.trigger('prev.owl.carousel');
})
$('.slider_btn-next').click(function() {
    owl.trigger('next.owl.carousel');
})