var dropdowns = document.getElementsByClassName('dropdown-content');

/* Navigation bar - Show dropdown lists */
function dropdown(id) {
    var dropdownlist = document.getElementById('dropdownlist-' + id.split('-')[1]);
    if (!dropdownlist.classList.contains('show')) {

        dropdownlist.classList.toggle('show');

        for (var i = 0; i < dropdowns.length; i++) {
            if (dropdowns[i].id != dropdownlist.id) {
                dropdowns[i].classList.remove('show');
            }
        }
    }
    else {
        dropdownlist.classList.remove('show');
    }
}

/* Scroll to top of page */
$(".back").click(function () {
    window.scroll(0, 0);
});
