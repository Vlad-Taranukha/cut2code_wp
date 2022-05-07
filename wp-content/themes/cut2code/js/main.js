$(function () {

    /*Counters start*/
    $('.count-num').counterUp({
        delay: 10,
        time: 2000
    });

    /*Menu hamburger (shows main menu)*/
    $('.hamburger').click(function () {
        $('.main-menu').css({
            'left': 0,
            'transition': 'left 0.5s'
        });
    });

    /*Hiding main menu*/
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

    /*Slick slider for features sliding on mobiles*/
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
    
    /*Slick dots styling*/
    $('.slick-dots').css({
        'bottom' : '35px',
    });
});