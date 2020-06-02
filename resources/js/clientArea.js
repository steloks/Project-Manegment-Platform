$(function () {
    $('js-redirect').click(function () {
        window.location.href = $(this).attr('data-url');
    });

    $('.toggle').click(function () {
        $('.left-side').addClass('active');
    });

    $('.close').click(function () {
        $('.left-side').removeClass('active');
    });


    window.fitMainContent = function () {
        var screenHeight = $(window).height(),
            topHeader = $('.top-header').outerHeight();

        $('.page-content').css('max-height', screenHeight - topHeader + 'px');
    };

    window.fitMainContent();
    $(window).on('resize', function(){
        window.fitMainContent();
    });
});
