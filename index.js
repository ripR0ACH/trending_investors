$(document).ready(function () {
    $('#nav-toggle').click(function () {
        $(this).toggleClass('open');
        $('.nav, .content').toggleClass('open');
    });
});