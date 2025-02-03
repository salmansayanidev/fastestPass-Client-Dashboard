$('.achieve-list-slider').slick({
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrow: true,
    prevArrow: $('.prev-arrow'),
    nextArrow: $('.next-arrow'),
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});