/* Student life / Recruitment => Slide Show variables */
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");

var slideIndex = 1;
showSlides(slideIndex); /* Initiate Slide Show */

/* Student life / Daily Life => Lightbox variables */
var slideIndexLightBox = 1;

/* Student life / Teams+Clubs => Modals variables */
var modal = document.getElementById("modalClub");
var modalImg = document.getElementById("modalClubImg");
var captionText = document.getElementById("captionClub");
var overlayText = document.getElementsByClassName("textLay")[0];

/* Student life / Special Events => Slide Show Gallery variables */
var slidesGallery = document.getElementsByClassName("mySlidesGallery");
var dotsGallery = document.getElementsByClassName("demo");
var captionTextGallery = document.getElementById("caption");

var slideIndexGallery = 1;
showSlidesGallery(slideIndexGallery); /* Initiate Slide Show Gallery */

/* Student life / Recruitment => Slide Show functions */
$(".dot").click(function () {
    var id = $(this).attr('id');
    currentSlide(parseInt(id.split("_")[1]));
});

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activeDot", "");
    }

    if (slides[slideIndex - 1] != null) {
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " activeDot";
    }
}

/* Student life / Daily Life => Lightbox functions */
function openModalLightbox(classname) {
    document.getElementById(classname).style.display = "block";
}

function closeModalLightbox(classname) {
    document.getElementById(classname).style.display = "none";
}

function plusSlidesLightbox(n, slidesName, dotsName, captionTextname) {
    showSlidesLightbox(slideIndexLightBox += n, slidesName, dotsName, captionTextname);
}

function currentSlideLightbox(n, slidesName, dotsName, captionTextname) {
    showSlidesLightbox(slideIndexLightBox = n, slidesName, dotsName, captionTextname);
}

function showSlidesLightbox(n, slidesName, dotsName, captionTextname) {
    var i;
    var slides = document.getElementsByClassName(slidesName);
    var dots = document.getElementsByClassName(dotsName);
    var captionText = document.getElementById(captionTextname);

    if (n > slides.length) {
        slideIndexLightBox = 1;
    }
    if (n < 1) {
        slideIndexLightBox = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activeLightBox", "");
    }

    slides[slideIndexLightBox - 1].style.display = "block";
    dots[slideIndexLightBox - 1].className += " activeLightBox";
    captionText.innerHTML = dots[slideIndexLightBox - 1].alt;
}

/* Student life / Teams+Clubs => Modals functions */
$(".clubImg").click(function () {
    var id = $(this).attr('id');
    ShowClubModalPic(id);
});

function ShowClubModalPic(id) {

    var idSplit = id.split("_");

    modal.style.display = "block";
    modalImg.src = "img/" + id + ".jpg";
    captionText.innerHTML = document.getElementById(id).alt;
    overlayText.innerHTML = document.getElementById(idSplit[1]).value;
}

var spanModalClub = document.getElementsByClassName("closeModalClub")[0];
spanModalClub.addEventListener('click', () => {
    modal.style.display = "none";
});

/* Student life / Special Events => Slide Show Gallery functions */
function plusSlidesGallery(n) {
    showSlidesGallery(slideIndexGallery += n);
}

function currentSlideGallery(n) {
    showSlidesGallery(slideIndexGallery = n);
}

function showSlidesGallery(n) {
    var j;
    if (n > slidesGallery.length) {
        slideIndexGallery = 1
    }
    if (n < 1) {
        slideIndexGallery = slidesGallery.length
    }

    for (j = 0; j < slidesGallery.length; j++) {
        slidesGallery[j].style.display = "none";
    }
    for (j = 0; j < dotsGallery.length; j++) {
        dotsGallery[j].className = dotsGallery[j].className.replace(" activeImg", "");
    }

    if (slidesGallery[slideIndexGallery - 1] != null) {
        slidesGallery[slideIndexGallery - 1].style.display = "block";
        dotsGallery[slideIndexGallery - 1].className += " activeImg";
        captionTextGallery.innerHTML = dotsGallery[slideIndexGallery - 1].alt;
    }
}