var owl = $('.owl-carousel');
$('.owl-culinary').owlCarousel({
    autoplayHoverPause:true,
    autoplay:true,
    dots:false,
    nav:false,
    loop:true,
    items:1,
    lazyLoad:true,
    margin:0,
    animeteOut: 'slideOutDown',
    animateIn:'slideInUp'
});
$('.owl-article').owlCarousel({
    autoplayHoverPause:true,
    dots:true,
    nav:true,
    autoplay:true,
    loop: true,
    margin: 30,
    lazyLoad:true,
    responsiveClass: true,
    responsive: {
    0: {
        items: 2,
        margin: 5,
        stagePadding: 20,
    },
    600: {
        items: 3,
        margin: 10,
    },
    1000: {
        items: 4
    }
    }
});
$('.owl-history').owlCarousel({
    autoplayHoverPause:true,
    autoplay:true,
    dots:false,
    nav:false,
    loop:true,
    items:1,
    lazyLoad:true,
    margin:0
})

$('.owl-destination').owlCarousel({
    autoplayHoverPause:true,
    autoplay:true,
    dots:false,
    nav:false,
    loop:true,
    items:1,
    lazyLoad:true,
    margin:0
})

var rellax = new Rellax('.rellax');

anime({
    targets: '#title path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: true
});

(function () {
    "use strict";

    var items = document.querySelectorAll(".timeline li");

    function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
    }

    function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
        }
    }
    }

    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
})();
var article=$('.owl-article');
var destination=$('.owl-destination');
var historia=$('.owl-history');
$('.owl-history-wrapper .nav-next .carousel-next').click(function(){
    historia.trigger('next.owl.carousel');
});
$('.owl-history-wrapper .nav-prev .carousel-prev').click(function(){
    historia.trigger('prev.owl.carousel');
});

$('#article .nav-next .carousel-next').click(function(){
    article.trigger('next.owl.carousel');
});

$('#article .nav-prev .carousel-prev').click(function(){
    article.trigger('prev.owl.carousel');
});

$('#destination .nav-prev .carousel-prev').click(function(){
    destination.trigger('prev.owl.carousel');
});

$('#destination .nav-next .carousel-next').click(function(){
    destination.trigger('next.owl.carousel');
});

$('#article .nav-prev,#article .nav-next').mouseover(function(){
    article.trigger('stop.owl.autoplay');
})

$('#article .nav-prev,#article .nav-next').mouseleave(function(){
    article.trigger('play.owl.autoplay');
})

$('#destination .nav-prev,#destination .nav-next').mouseover(function(){
    destination.trigger('stop.owl.autoplay');
})

$('#destination .nav-prev,#destination .nav-next').mouseleave(function(){
    destination.trigger('play.owl.autoplay');
})

$('.owl-history-wrapper .nav-next,.owl-history-wrapper .nav-prev').mouseover(function(){
    historia.trigger('stop.owl.autoplay');
});
$('.owl-history-wrapper .nav-next,.owl-history-wrapper .nav-prev').mouseleave(function(){
    historia.trigger('play.owl.autoplay');
});
$('.loader').fadeIn(1000);
$(window).on('load', function () {
    $('.loader').fadeOut(500);
});
$offset=$('.section-nav').offset();
var sticky=new Rellax('.sticky');
console.log($offset.top);
console.log($(window).scrollTop());
$(window).on('scroll',function(){
    if ($(window).scrollTop()+190 >= $offset.top) {
        $('.section-nav').addClass('fixed-top');
        sticky.destroy();
        $('.section-nav').removeClass('sticky');      
    }
    else {
        if($('.section-nav').hasClass('fixed-top')){
            $('.section-nav').removeClass('fixed-top');
            $('.section-nav').addClass('sticky');
            sticky=new Rellax('.sticky');
        }
    }
});

$('.card-preview').on('click',function(){
    $this=this;
    // $(this).siblings().first().addClass('card-after-hide');
    // if($(this).siblings().first().css("display","none")){
    //     $(this).siblings().first().addClass('card-after-in');
    //     $(this).siblings().first().removeClass('card-after-out');
    // }
    // else{
    //     $(this).siblings().first().addClass('card-after-out');
    //     $(this).siblings().first().removeClass('card-after-in');
    // }
    $($this).parent().siblings('.flex-item').find('.card-after').hide();
    $($this).siblings().first().slideToggle(300);
    // if($($this).parent().siblings().not($($this).parent()).children().first().css("display","block")){
    //     $($this).parent().siblings().children().first().hide(function(){
    //         $($this).siblings().first().show(500);
    //     });  
    // }
    // else{
    //     $($this).siblings().first().slideToggle(500);
    // }
    
});