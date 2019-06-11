$(document).ready(function(){
    $('.cabi_carousel--slick').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        //centerMode: true,
        focusOnSelect: true,
        infinite: true,
        speed: 500,
        prevArrow: '<button type="button" class="slick-prev">&laquo;</button>',
        nextArrow: '<button type="button" class="slick-next">&raquo;</button>',
        responsive: 
        [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false
                }
            },
            {
                breakpoint: 480,
                settings: "unslick"
            }
        ]
    });

    console.log('ciao');
});