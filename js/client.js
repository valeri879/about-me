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
        $('.contents').removeClass('active');

        $('.main-info, .border, .about-me').addClass('active');

        //about me type
        $(".about-me-type").typed({
            strings: ["about <span>me</span> "],
            typeSpeed: 100,
            showCursor: false
        });

    });


    // programming languages

    $('.prog-languages').on('click', function () {

        $('.contents, .border').removeClass('active');
        $('.programming-languages').addClass('active');

        //about me type
        $(".programming-languages-title").typed({
            strings: ["programming <span>languages</span> "],
            typeSpeed: 80,
            showCursor: false
        });

        // charts
        $('.chart').easyPieChart({
            scaleColor: "#ecf0f1",
            lineWidth: 20,
            lineCap: 'butt',
            barColor: '#f54325',
            trackColor: "#ecf0f1",
            size: 150,
            animate: 500
        });

    });


});