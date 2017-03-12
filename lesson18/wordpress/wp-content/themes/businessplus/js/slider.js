jQuery(function () {

    jQuery('.sliders').slick({
        dots: true,
        arrows: false,
        cssEase: 'ease-in',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        speed: 500
    });

    jQuery('.testimonials-slider').slick({
        dots: true,
        arrows: false,
        cssEase: 'ease-in',
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
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

    jQuery('.partners-slider').slick({
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
