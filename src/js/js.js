


$(document).ready(function () {



    $('.slide-one').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        autoplayHoverPause: true
    });


    $('.slide-fourd').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        loop: true,
        items: 5,
        margin: 0,
        padding: 0,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 5
            }
        }
    });


    $('.slide-five').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        loop: true,
        items: 1,
        margin: 0,
        padding: 0,
        nav: false,
        // responsive: {
        //     0: {
        //         items: 1
        //     },
        //     600: {
        //         items: 2
        //     },
        //     1000: {
        //         items: 5
        //     }
        // }
    });


    $('.slide-two').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        autoplayHoverPause: false,
        nav: false,
        dots: false,
        animateOut: 'fadeOut'
    });










    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);

    var sceneBottom = document.getElementById('sceneBottom');
    var parallaxBottom = new Parallax(sceneBottom);


});





