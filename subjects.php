<?php include 'php_general/header.php';?>

<body id="subjects-bg" class="background">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="col-xs-1 text-center">
            <br>
            <h1 class="display-6"><b>SUBJECTS IN HOGWARTS</b></h1>
            <br>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <img class="main-image subject-welcome-img" src="img/subjectspic.png">
            </div>
        </div>
        <div class="col-xs-1 text-center">
            <p>
                <br>There are a variety of classes taught at Hogwarts School of Witchcraft and Wizardry.
                These include both the core curriculum and the electives, available from third year forward.
                <br>In the fifth year, students take the Ordinary Wizarding Level (O.W.L.) exams to determine
                if they can achieve a score high enough to continue to N.E.W.T.-level (Nastily Exhausting Wizarding
                Test) for the class in the remaining two years.
                <br>Some classes, including the core classes, may be dropped in sixth year.
                <br>Extra-curriculars are available from first / sixth year, depending on the topic, provided there is
                sufficient demand.
            </p>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <a href="subjects.php#core-title">
                    <img class="studentlife-icon-img subject-icon menu" src="./img/core-icon.png" title="Core Subjects">
                </a>
                <a href="subjects.php#electives-title">
                    <img class="studentlife-icon-img subject-icon menu" src="./img/elective-icon.png" title="Electives">
                </a>
                <a href="subjects.php#extracurr-title">
                    <img class="studentlife-icon-img subject-icon menu" src="./img/extracurr-icon.png"
                        title="Extra-Curricular Subjects">
                </a>
            </div>
        </div>
        <div class="row container-row">
            <?php include 'php_descriptions/subjects_descriptions.php';?>
        </div>

    </div>

    <?php include 'php_general/scripts.php';?>

</body>

</html>