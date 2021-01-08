$(document).ready(function () {
    $('#nav-toggle').click(function () {
        $('#nav-toggle').toggleClass('open');
        $('.nav, .content, #title').toggleClass('open');
    });
});