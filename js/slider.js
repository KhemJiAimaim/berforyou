$('.slider').owlCarousel({
    loop:true,
    item:1,
    nav:true,
    autoplay: true,
    autoplayTimeout: 4000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true
        },
        1000:{
            items:1,
            nav:true,
        }
    }
});

$('.slide-review').owlCarousel({
    loop:true,
    margin:10,
    item:1,
    responsiveClass:true,
    dot:true,
    responsive:{
        0:{
            items:1,
            nav:true,
        },
        600:{
            items:4,
            nav:true,
        },
        1000:{
            items:7,
            nav:true,
        }
    }
});


