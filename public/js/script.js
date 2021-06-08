var owl = $('.owl-carousel');
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
    loop:true,
    items:1,
    lazyLoad:true,
    margin:0
});
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
$('.owl-history').on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

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

    // define variables
    var items = document.querySelectorAll(".timeline li");

    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
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

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
})();
var article=$('.owl-article');
var destination=$('.owl-destination');
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

$('#destination .nav-prev,#destionation .nav-next').mouseleave(function(){
    destination.trigger('play.owl.autoplay');
})