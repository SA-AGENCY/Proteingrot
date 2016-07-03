$('body').css('opacity', 1);
$('.discountOverlay').hide();

$('.if_couponCode').click(function() {
  $('.discountOverlay').fadeIn(500);
});

$('.discountClose').click(function() {
	$('.discountOverlay').fadeOut(500);
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        $(".main-nav").addClass("scrolled");
    } else {
        $(".main-nav").removeClass("scrolled");
    }
});

function onScrollInit( items, trigger ) {
  items.each( function() {
    var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
      
        osElement.css({
          '-webkit-animation-delay':  osAnimationDelay,
          '-moz-animation-delay':     osAnimationDelay,
          'animation-delay':          osAnimationDelay
        });

        var osTrigger = ( trigger ) ? trigger : osElement;
        
        osTrigger.waypoint(function() {
          osElement.addClass('animated').addClass(osAnimationClass);
          },{
              triggerOnce: true,
              offset: '90%'
        });
  });
}

 onScrollInit( $('.os-animation') );
 onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );