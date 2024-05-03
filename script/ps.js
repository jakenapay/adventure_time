$( function() {
  $( "#tabs" ).tabs({
    collapsible: true
  });
} );

$( function() {
  $( "#tabs1" ).tabs({
    collapsible: true
  });
} );

$( function() {
  $( "#tabs2" ).tabs({
    collapsible: true
  });
} );

$( function() {
  $( "#tabs3" ).tabs({
    collapsible: true
  });
} );

$( function() {
  $( "#tabs4" ).tabs({
    collapsible: true
  });
} );
$( function() {
  $( "#tabs5" ).tabs({
    collapsible: true
  });
} );

var swiper = new Swiper(".brand-slider", {
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    991: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    },
  },
});
