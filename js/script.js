$( document ).ready(function() {
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    speed:200,
    autoplay:true,
    // "autoHeight": true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
  })
});



