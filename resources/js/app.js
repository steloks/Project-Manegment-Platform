

window.fitFooter = function () {
    var screenHeight = $(window).height(),
        header = $('.header').outerHeight(),
        content = $('.content-holder').outerHeight(),
        footer = $('.footer').outerHeight(),
        x = screenHeight - (header + content + footer);

    $('.footer').css('margin-top', (x < 50 ? 50 : x) + 'px');

};

window.fitFooter();
$(window).on('resize', function () {
    window.fitFooter();
});
