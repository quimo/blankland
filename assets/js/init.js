$(document).ready(function(){

    /**
     * Smooth scroll
     * https://github.com/cferdinandi/smooth-scroll
     */
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 500
    });
    
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

    $('#informazioni').submit(function(e){
        var error = false;
        var target;

        $(".cabi_block--form__error_message").remove();
        $("#privacy").parent().removeClass('cabi_block--form__error_warning');
        $("#informazioni input").each(function(index) {
            $(this).removeClass('cabi_block--form__error_warning');
        });

        target = $("#email");
        if ($(target).val() === "") {
            error = true;
            $(target).addClass('cabi_block--form__error_warning');
            $(target).attr('placeholder', 'Email: campo obbligatorio!');
        }

        /* rimuovo il messaggio di errore */
        $('.cabi_block--form__error_message').remove();

        /* accettazione privacy */
        target = $("#privacy");
        if (!$(target).is(':checked')) {
            error = true;
            $(target).parent().addClass('cabi_block--form__error_warning');
        }

        if (error) $("#informazioni").append("<div class='cabi_block--form__error_message'>Verifica i campi contrassegnati per proseguire!</div>");
        return !error;
    });


});