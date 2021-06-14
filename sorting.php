<?php include 'php_general/header.php';?>

<body id="sorting-bg" class="background sorting-start-bg">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="col-xs-1 text-center">
            <br>
            <h1 id="quiz-title" class="display-6"><b>GET SORTED</b></h1>
            <br>
        </div>

        <div class="row container-row" id="quiz-start-div">
            <div class="row container-row">
                <div class="image-container">
                    <img class="main-image quiz-main-img" id="quiz-image" src="img/sortinghat.png">
                </div>
            </div>
            <div class="col-xs-1 text-center">
                <p id="quiz-comment">
                    <b>The Sorting Ceremony, lead by the Sorting Hat, decides the Hogwarts House of a student.</b>
                    <br>Legend has it that it was Godric Gryffindor who gave Hogwarts the Sorting Hat, a sentient piece of headwear that soon became the one to sort 
                    the school's students into houses long after Godric and the other founders were gone. The hat contains the intelligence of all founders, so it can 
                    pass on their intuition on each Hogwarts student forever.
                    <br>The Ceremony is simple : the Hat is put on the head of a student, and since it is enchanted to see the hearth and mind of a person, it can decide 
                    which house fits the student most.
                </p>
            </div>
            <div class="image-container">
                <input type="button" class="btn btn-dark btn-lg" id="quiz-start-button" name="quiz-start-button" value="GET SORTED">
            </div>
        </div>

        <div class="row container-row quiz-div hidden" id="quiz-play-div">
            <div class="row container-row question-div">
                <div class="col-12">
                    <h4 id="question-quiz"></h4>
                </div>
            </div>
            <div class="row container-row answer-div">
                <div class="col-12">
                    <input type="checkbox" name="gryffindor_answer" id="gryffindor_answer" class="answer">
                    <label for="gryffindor_answer" id="gryffindor_answer_label" class="answer_label"></label>
                </div>
            </div>
            <div class="row container-row mt-3 answer-div">
                <div class="col-12">
                    <input type="checkbox" name="hufflepuff_answer" id="hufflepuff_answer" class="answer">
                    <label for="hufflepuff_answer" id="hufflepuff_answer_label" class="answer_label"></label>
                </div>
            </div>
            <div class="row container-row mt-3 answer-div">
                <div class="col-12">
                    <input type="checkbox" name="ravenclaw_answer" id="ravenclaw_answer" class="answer">
                    <label for="ravenclaw_answer" id="ravenclaw_answer_label" class="answer_label"></label>
                </div>
            </div>
            <div class="row container-row mt-3 answer-div">
                <div class="col-12">
                    <input type="checkbox" name="slytherin_answer" id="slytherin_answer" class="answer">
                    <label for="slytherin_answer" id="slytherin_answer_label" class="answer_label"></label>
                </div>
            </div>
            <div class="col-12">
                <input type="button" class="btn btn-dark btn-lg" id="quiz-next-button" name="quiz-next-button" value="NEXT QUESTION">
                <input type="button" class="btn btn-dark btn-lg hidden" id="quiz-end-button" name="quiz-end-button" value="FINISH QUIZ">
            </div>
        </div>

        <div class="row container-row hidden" id="quiz-result-div">
            <div class="row container-row">
                <div class="image-container">
                    <label class="result-label" id="gryffindor-result-label" for="gryffindor-result"></label>
                    <label class="result-label" id="hufflepuff-result-label" for="hufflepuff-result"></label>
                    <label class="result-label" id="ravenclaw-result-label" for="ravenclaw-result"></label>
                    <label class="result-label" id="slytherin-result-label" for="slytherin-result"></label>
                </div>
            </div>
            <div class="row container-row">
                <div class="image-container">
                    <img class="result-icon" id="gryffindor-result" src="./img/gryffindor.png" title="Gryffindor Personality">
                    <img class="result-icon" id="hufflepuff-result" src="./img/hufflepuff.png" title="Hufflepuff Personality">
                    <img class="result-icon" id="ravenclaw-result" src="./img/ravenclaw.png" title="Ravenclaw Personality">
                    <img class="result-icon" id="slytherin-result" src="./img/slytherin.png" title="Slytherin Personality">
                </div>
            </div>
            <div class="image-container">
                <input type="button" class="btn btn-dark btn-lg" id="quiz-new-button" name="quiz-new-button" value="SORT AGAIN">
            </div>
        </div>

        <div id="result-modal" class="modal">
            <span class="closeModalResult close">&times;</span>
            <img class="house-modal-content" id="result-modal-pic">
        </div>

        <form id="my_form" action="sorting.php" method="post" class="hidden"></form>
        <div id="finishquiz" class="hidden"></div>

        <div class="hidden">
            <?php include 'php_descriptions/sorting_questions.php';?>
        </div>
        <div class="hidden">
            <?php include 'php_descriptions/sorting_descriptions.php';?>
        </div>

    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/sorting.js"></script>

</body>

</html>