$(document).ready(function () {

    $(".typed").typed({
        strings: ["I am <span>val</span> kharitonashvili"],
        typeSpeed: 100,
        showCursor: false
    });

    $('.menu').on('click', function () {
        $(this).siblings('ul').toggleClass('active');
    });

});