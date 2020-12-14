$(document).ready(function () {
    checkSize();
    $(window).resize(checkSize);
    $('#nav-toggle').click(function () {
        $(this).toggleClass('open');
        $('.nav, .content').toggleClass('open');
    });
});
function checkSize() {
    if ($('.nav').css("width") == "20vw") {
        $('#nav-toggle, .nav, .content').toggleClass('open');
    }
}