(function ($) {
 "use strict";
 
$('.menu>li').slice(-2).addClass('last-elements'); 
 
 
$('.main-menu nav').meanmenu({
	meanScreenWidth: "991",
	meanMenuContainer: '.mobile-menu'
}); 
 
$('.grid').imagesLoaded( function() {
	
// filter items on button click
$('.portfolio-menu').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});	

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  percentPosition: true,
  masonry: {
    // use outer width of grid-sizer for columnWidth
    columnWidth: '.grid-item',
  }
});



});

$('.portfolio-menu button').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});


/* portfolio active  */ 
$('.portfolio-slider').owlCarousel({
    loop:true,
    items:1,
    dots:false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',	
    nav:true,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
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

 
})(jQuery);  
