jQuery(function($) {

    $('.hero-slider').slick({
        dots: true,
        arrows: false,
        cssEase: 'ease-in',
        slidesToShow: 1,
        fade: true
    });

    $('.testimonials-list').slick({
        dots: true,
        arrows: false,
        cssEase: 'ease-in',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    $('.partners-list').slick({
        dots: true,
        arrows: false,
        cssEase: 'ease-in',
        slidesToShow: 6,
        slidesToScroll: 6,
        autoplay: true,
        responsive: [
            {
                breakpoint: 680,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4

                }
            }
        ]
    });
});