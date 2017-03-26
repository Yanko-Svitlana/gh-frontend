jQuery(function ($) {

    // $('.slider').slick({
    //     dots: true,
    //     arrows: false,
    //     cssEase: 'ease-in',
    //     slidesToShow: 1,
    //     fade: true,
    //     autoplay: true,
    //     speed: 500
    // });

    $('.masonry').masonry({
        itemSelector: '.gallery-item',
        gutter: 10,
        isFitWidth: true
    });

});