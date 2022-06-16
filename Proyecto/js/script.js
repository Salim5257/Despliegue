$(document).ready(function(){
    /* Aquí selecciono el número de elementos de mi carrusel y si quiero que pasen automáticos o manuales */
    $('.home-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1,
        autoplay: false
    });

    $('.product-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        /* Selecciono el número de elementos que quiero que se vean por la resolución seleccionada de la pantalla */
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    $('.brand-slider').owlCarousel({
        loop: true,
        items: 4,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        /* Selecciono el número de elementos que quiero que se vean por la resolución seleccionada de la pantalla */
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    });

    $('.review-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        items: 1,
        autoplay: false
    });
    
});