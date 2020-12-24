function makeGraph() {
    var canvas = document.getElementById("trendGraph");
    var h = canvas.clientHeight;
    var w = canvas.clientWidth;
    var ctx = canvas.getContext("2d");
    ctx.lineWidth = 5;
    ctx.strokeStyle = "green";
    ctx.moveTo(w/20, h/20);
    ctx.lineTo(w/20, 0);
    ctx.lineTo(w, h-100);
    ctx.stroke();
    console.log(w / 2 + " " + h / 2);
}
$(document).ready(function () {
    makeGraph();
    $('#nav-toggle').click(function () {
        $(this).toggleClass('open');
        $('.nav, .content').toggleClass('open');
    });
});