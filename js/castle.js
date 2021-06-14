var modal = document.getElementById("castle-map-modal");
var modalImg = document.getElementById("castle-modal-pic");
var captionText = document.getElementById("caption");
var numOfChildren = document.getElementsByClassName("collapsible-description").length;
var coll = document.getElementsByClassName("collapsible");
var i;

/* Grounds + Castle => Handle image map resize at window resize */
$("map").each(function () {
    $(this).imageMapResize();
});

/* Show modal image and text by click on map */
$(".map-element").click(function () {
    var id = $(this).attr('id');

    var idSplit = id.split("_");
    if (document.getElementById("value" + idSplit[1]) != null) {
        var description = document.getElementById("value" + idSplit[1]).value;

        modal.style.display = "block";
        modalImg.src = "img/" + id + ".jpg";
        captionText.innerHTML = description;
    }
});

/* Close modal */
var spanModalCastle = document.getElementsByClassName("close")[0];
spanModalCastle.onclick = function () {
    modal.style.display = "none";
}

/* Fill collapsible elements and handle collapsible dropdown */
for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        }
        else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}

for (var i = 0; i <= numOfChildren; i++) {
    if (document.getElementById("value" + i) != null) {
        txt = document.getElementById("value" + i).value;
        document.getElementById("input" + i).innerHTML = "<br>" + txt;
    }
}
