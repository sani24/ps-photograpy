$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
            $('.navbar').addClass('shadow');
        } else {
            $('.navbar').removeClass('active');
            $('.navbar').removeClass('shadow');
        }
    });
})