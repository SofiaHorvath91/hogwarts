var map = document.getElementById('grounds-map-pic');

/* Grounds + Castle => Handle image map resize at window resize */
$("map").each(function () {
    $(this).imageMapResize();
});

/* Scroll to map on click on div */
$(".grounds-icon").click(function () {
    window.scroll(0, position(map));
});

function position(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop + 20;
        } while (obj = obj.offsetParent);
        return [curtop];
    }
}
