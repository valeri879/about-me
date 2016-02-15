$(document).ready(function () {

    //name type
    $(".typed").typed({
        strings: ["I am <span>val</span> kharitonashvili"],
        typeSpeed: 100,
        showCursor: false
    });


    $('.menu').on('click', function () {
        $(this).toggleClass('active');
        $(this).siblings('ul').toggleClass('active');
        $('.fa-bars').toggleClass('hide');
        $('.fa-times').toggleClass('active');
        $('.main-section li, .about-me, .main-info').removeClass('active');
    });

    //menu active

    $('.main-section li').on('click', function () {
        $('.main-section li').removeClass('active');
        $(this).addClass('active');
    });


    //about
    $('.about-nav').on('click', function () {
        $('.main-info, .border, .about-me').toggleClass('active');

        //about me type
        $(".about-me-type").typed({
            strings: ["about <span>me</span> "],
            typeSpeed: 100,
            showCursor: false
        });

    });

});