var quizBg = document.getElementById("sorting-bg");
var quizTitle = document.getElementById("quiz-title");
var quizImage = document.getElementById("quiz-image");
var quizStartBtn = document.getElementById("quiz-start-button");
var quizNextBtn = document.getElementById("quiz-next-button");
var quizEndBtn = document.getElementById("quiz-end-button");
var quizStartDiv = document.getElementById("quiz-start-div");
var quizPlayDiv = document.getElementById("quiz-play-div");
var quizComment = document.getElementById("quiz-comment");
var quizResultDiv = document.getElementById("quiz-result-div");

var question = document.getElementById("question-quiz");
var answerGryffindor = document.getElementById("gryffindor_answer_label");
var answerHufflepuff = document.getElementById("hufflepuff_answer_label");
var answerRavenclaw = document.getElementById("ravenclaw_answer_label");
var answerSlytherin = document.getElementById("slytherin_answer_label");
var answerCheckboxes = document.getElementsByClassName('answer')

var modalResult = document.getElementById("result-modal");
var modalImgResult = document.getElementById("result-modal-pic");

var totalQuestionNum = document.getElementsByClassName('quiz_qa').length;
var currQuestionNum;

var countGryffindor = 0;
var countHufflepuff = 0;
var countRavenclaw = 0;
var countSlytherin = 0;

var mainHouse = [];
var otherHouses = [];

$("#quiz-start-button").click(function () {
    quizBg.classList.remove("sorting-start-bg");
    quizBg.classList.add("sorting-play-bg");
    quizTitle.classList.add("quiz-div");
    quizTitle.innerHTML = "SORTING CEREMONY";
    quizStartDiv.classList.add("hidden");
    quizPlayDiv.classList.remove("hidden");
    currQuestionNum = 1;

    setQuestionAnswer(currQuestionNum);
});

$("#quiz-next-button").click(function () {
    next();
});

$("#quiz-end-button").click(function () {
    end();
});

$("#quiz-new-button").click(function () {
    document.getElementById("my_form").submit();
});

$(".result-icon")
    .mouseover(function () {
        var id = $(this).attr('id');
        document.getElementById(id.split("-")[0] + "-result-label").classList.add(id.split("-")[0] + "-text");

    })
    .mouseout(function () {
        var id = $(this).attr('id');
        document.getElementById(id.split("-")[0] + "-result-label").classList.remove(id.split("-")[0] + "-text");
    })
    .click(function () {
        var id = $(this).attr('id');
        modalResult.style.display = "block";
        modalImgResult.src = "img/" + id.split("-")[0] + "_description.png";
    });

function next() {
    if (getAnswer() < answerCheckboxes.length) {
        getAnswerValue(answerCheckboxes[getAnswer()].id.split("_")[0]);
    }
    else {
        alert("An answer should be selected!");
        return;
    }

    for (var j = 0; j < answerCheckboxes.length; j++) {
        answerCheckboxes[j].checked = false;
    }

    currQuestionNum++;
    if (currQuestionNum == totalQuestionNum) {
        quizNextBtn.classList.add("hidden");
        quizEndBtn.classList.remove("hidden");
    }
    setQuestionAnswer(currQuestionNum);
}

function getAnswer() {
    var i = 0;
    while (i < answerCheckboxes.length && answerCheckboxes[i].checked != true) {
        i++;
    }

    return i;
}

function getAnswerValue(house) {
    switch (house) {
        case "gryffindor": countGryffindor++; break;
        case "hufflepuff": countHufflepuff++; break;
        case "ravenclaw": countRavenclaw++; break;
        case "slytherin": countSlytherin++; break;
    }
}

function setQuestionAnswer(num) {
    var qa = document.getElementById("qa_" + num.toString()).value.split("_");
    question.innerHTML = qa[0];
    answerGryffindor.innerHTML = qa[1];
    answerHufflepuff.innerHTML = qa[2];
    answerRavenclaw.innerHTML = qa[3];
    answerSlytherin.innerHTML = qa[4];
}

function end() {
    if (getAnswer() < answerCheckboxes.length) {
        getAnswerValue(answerCheckboxes[getAnswer()].id.split("_")[0]);
    }
    else {
        alert("An answer should be selected!");
        return;
    }

    currQuestionNum = 0;
    result();
}

function result() {
    quizPlayDiv.classList.add("hidden");
    quizStartBtn.classList.add("hidden");
    quizStartDiv.classList.remove("hidden");
    quizResultDiv.classList.remove("hidden");

    getHouses();
    sendResult();
    setMainTitle();
    setComment();
    quizComment.innerHTML += "<br><br>Click on the icons for a detailed description of the house personalities!";
}

function getHouses() {
    var results = [
        { house: "Gryffindor", point: countGryffindor },
        { house: "Hufflepuff", point: countHufflepuff },
        { house: "Ravenclaw", point: countRavenclaw },
        { house: "Slytherin", point: countSlytherin }
    ];
    results.sort(function (a, b) { return a.point - b.point });

    for (var i = 0; i < results.length; i++) {
        document.getElementById(results[i].house.toLowerCase() + "-result-label").innerHTML
            = toPercentage(results[i].point).toString() + "%";
    }

    var max_point = Math.max.apply(Math, results.map(function (o) { return o.point; }));
    var max_house = results.filter(x => parseInt(x.point) === parseInt(max_point)).map(x => x);
    for (var i = 0; i < max_house.length; i++) {
        mainHouse.push(max_house[i]);
    }

    var other_houses = results.filter(x => !max_house.includes(x)).map(x => x);
    for (var i = 0; i < other_houses.length; i++) {
        otherHouses.push(other_houses[i]);
    }
}

function sendResult() {
    var hr = new XMLHttpRequest();
    var url = "sorting.php";
    var vars = "house=" + createResult(mainHouse, 0, 100);
    if (!noOtherHouses()) {
        var strongs = createResult(otherHouses, 29, 100);
        var milds = createResult(otherHouses, 10, 29);
        if (strongs != "") {
            vars += "&strongs=" + strongs;
        }
        if (milds != "") {
            vars += "&milds=" + milds;
        }
    }
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function () {
        console.log(hr);
        if (hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("finishquiz").innerHTML = return_data;
        }
    }
    hr.send(vars);
    document.getElementById("finishquiz").innerHTML = "processing...";
}

function createResult(array, min, max) {
    var string = "";

    for (var i = 0; i < array.length; i++) {
        var percentage = toPercentage(array[i].point);
        if (percentage > min && percentage <= max) {
            string += array[i].house.toLowerCase();
            if (i < array.length - 1) {
                string += " ";
            }
        }
    }

    return string;
}

function setMainTitle() {
    quizImage.classList.remove("quiz-main-img");
    quizImage.classList.add("house-crest");
    quizComment.classList.add("quiz-div");

    if (mainHouse.length == 1) {
        quizImage.src = "img/" + mainHouse[0].house.toLowerCase() + ".png";
        quizTitle.innerHTML = "YOU BELONG TO HOUSE<br>" + mainHouse[0].house.toUpperCase();
    }
    else {
        quizImage.src = "img/hogwarts.png";
        quizTitle.innerHTML = "YOU BELONG TO HOUSES<br>";
        for (var i = 0; i < mainHouse.length; i++) {
            quizTitle.innerHTML += mainHouse[i].house.toUpperCase();
            if (i < mainHouse.length - 1) {
                quizTitle.innerHTML += " & ";
            }
        }
    }
}

function setComment() {

    quizComment.innerHTML = "";
    if (noOtherHouses()) {
        setMainHouse()
    }
    else {
        if (equalOtherHouses()) {
            equalHouses();
        }
        else {
            setMainHouse();
            quizComment.innerHTML += "<br>However, you also show ";
            for (var i = otherHouses.length - 1; i >= 0; i--) {
                var percentage = toPercentage(otherHouses[i].point);
                if (percentage > 29) {
                    setOtherHouses(i, "strong");
                }
                else if (percentage > 10) {
                    setOtherHouses(i, "mild");
                }
            }
            quizComment.innerHTML += ".";
        }
    }
}

function equalHouses() {
    quizComment.innerHTML = "You belong to " + mainHouse[0].house + ", meaning that you are ";
    setCommentMainHouse();

    quizComment.innerHTML += " <br>But in fact, given your tendencies, you belong strongly to all other houses as well!<br>"
        + " That means that depending on the situation, you can also be ";

    for (var i = 0; i < otherHouses.length; i++) {
        setCommentOtherHouses(otherHouses[i].house.toString());
        quizComment.innerHTML += " as a real " + otherHouses[i].house;
        if (i == otherHouses.length - 2) {
            quizComment.innerHTML += ", as well as ";
        }
        else if (i == otherHouses.length - 1) {
            quizComment.innerHTML += ".";
        }
        else {
            quizComment.innerHTML += ", ";
        }
    }
}

function setMainHouse() {
    if (mainHouse.length == 1) {
        quizComment.innerHTML = "You are ";
        setCommentMainHouse();
    }
    else {
        quizComment.innerHTML = "You equally belong to these houses, meaning that you are ";
        setCommentMainHouse();
    }
}

function setCommentMainHouse() {
    for (var i = 0; i < mainHouse.length; i++) {
        if (mainHouse.length == 1 && !equalOtherHouses()) {
            quizComment.innerHTML += document.getElementById("main_" + mainHouse[i].house.toLowerCase()).value;
        } else {
            quizComment.innerHTML += document.getElementById("tendency_" + mainHouse[i].house.toLowerCase()).value + " as a real " + mainHouse[i].house;
            if (i < mainHouse.length - 2) {
                quizComment.innerHTML += ", ";
            }
            else if (i < mainHouse.length - 1) {
                quizComment.innerHTML += ", but also ";
            }
            else {
                quizComment.innerHTML += ".";
            }
        }
    }
}

function setOtherHouses(i, tendency) {
    if (i < otherHouses.length - 2) {
        quizComment.innerHTML += ", as well as a ";
    }
    else if (i < otherHouses.length - 1) {
        quizComment.innerHTML += ", and a ";
    }
    else if (i < otherHouses.length) {
        quizComment.innerHTML += "a ";
    }
    quizComment.innerHTML += tendency + " tendency toward " + otherHouses[i].house + ", so you can be ";
    setCommentOtherHouses(otherHouses[i].house.toString());
}

function setCommentOtherHouses(house) {
    quizComment.innerHTML += document.getElementById("tendency_" + house.toLowerCase()).value;
}

function equalOtherHouses() {
    if ((mainHouse[0].point - otherHouses[otherHouses.length - 1].point) == 1) {
        var i = 0;
        while (i < otherHouses.length && otherHouses[i].point == otherHouses[otherHouses.length - 1].point) {
            i++;
        }
        return i == otherHouses.length;
    }
}

function noOtherHouses() {
    return otherHouses[otherHouses.length - 1].point == 0 || otherHouses[otherHouses.length - 1].point == 1;
}

function toPercentage(number) {
    return parseFloat((number / totalQuestionNum) * 100).toFixed(1);
}

var spanModalResult = document.getElementsByClassName("closeModalResult")[0];
spanModalResult.onclick = function () {
    modalResult.style.display = "none";
}

document.querySelectorAll('.answer').forEach(item => {
    item.addEventListener('click', event => {
        for (var i = 0; i < answerCheckboxes.length; i++) {
            if (answerCheckboxes[i].id != item.id) {
                answerCheckboxes[i].checked = false;
            }
        }
    })
})
