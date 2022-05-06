$(function () {
    /*$('.count-num').rCounter({
        duration: 50
    });*/
    $('.count-num').counterUp({
        delay: 10,
        time: 2000
    });

    $('.hamburger').click(function () {
        $('.main-menu').css({
            'left': 0,
            'transition': 'left 0.5s'
        });
    });

    /*.main-menu__close*/
    $('.main-menu__close, .nav__link').click(function () {
        let leftVal = '';
        if (screen.width < 577) {
            leftVal = '-105%';
        } else {
            leftVal = '-55%';
        }
        $('.main-menu').css({
            'left': leftVal,
            'transition': 'left 0.5s'
        });
    });

    /*Accordion*/
    $('.question__header').click(function () {
        $(this).parent('.question').siblings('.question').children('.question__answer').slideUp(500);
        if ($(this).siblings('p').css('display') == 'none') {
            $(this).siblings('p').slideDown(500);
        }else {
            $(this).siblings('p').slideUp(500);
        }
    });

    /*if (screen.width <= 768) {
        $('.features').slick({
            'autoplay' : true,
            'arrows' : false,
            'dots' : true
        });
    }*/

    $('.features').slick({
        autoplay : true,
        arrows : false,
        dots : true,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 767,
                settings: "unslick"
            }
        ]
    });
    


    $('.slick-dots').css({
        'bottom' : '35px',
    });
});