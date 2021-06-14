var modalHouse;
var modalImgHouse;
var captionTextHouse;

/* Show modal image and text by click on icon */
$(".houses-icons-container").click(function () {
    var id = $(this).attr('id');
    var description = document.getElementById("desc_" + id).value;

    setModalElements(id.split("_")[0]);
    setImgSrc(id.split("_")[1], id);

    modalHouse.style.display = "block";
    captionTextHouse.innerHTML = description;
});

function setModalElements(house) {
    modalImgHouse = document.getElementById(house + "-modal-pic");
    modalHouse = document.getElementById(house + "-modal");
    captionTextHouse = document.getElementById(house + "-caption");
}

function setImgSrc(element, id) {
    if (modalImgHouse.classList.contains("model-content-small")) {
        modalImgHouse.classList.remove("model-content-small");
    }

    if (element == "founder" || element == "ghost") {
        modalImgHouse.src = "img/" + id + ".gif";
    }
    else if (element == "element" || element == "symbols") {
        modalImgHouse.classList.add("model-content-small");
        modalImgHouse.src = "img/" + id + ".png";
    }
    else {
        modalImgHouse.src = "img/" + id + ".jpg";
    }
}

/* Close modal */
var spanModalHouse = document.getElementsByClassName("closeModalHouse")[0];
spanModalHouse.onclick = function () {
    modalHouse.style.display = "none";
}
