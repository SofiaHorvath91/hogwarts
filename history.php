<?php include 'php_general/header.php';?>

<body id="history-bg" class="background">
    
    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="col-xs-1 text-center">
            <br>
            <h1 class="display-6"><b>HISTORY OF HOGWARTS</b></h1>
            <br>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <img class="main-image welcome-img" src="img/hogwarts2.png">
            </div>
        </div>
        <div class="row container-row">
            <div class="image-container history-icon-container">
                <a href="history.php#gryffindor-history">
                    <img class="studentlife-icon-img history-icon menu" id="godric-icon" src="./img/godric_icon.jpg" title="Godric Gryffindor">
                </a>
                <a href="history.php#hufflepuff-history">
                    <img class="studentlife-icon-img history-icon menu" id="helga-icon" src="./img/helga_icon.jpg" title="Helga Hufflepuff">
                </a>
                <a href="history.php#ravenclaw-history">
                    <img class="studentlife-icon-img history-icon menu" id="rowena-icon" src="./img/rowena_icon.jpg" title="Rowena Ravenclaw">
                </a>
                <a href="history.php#slytherin-history">
                    <img class="studentlife-icon-img history-icon menu" id="salazar-icon" src="./img/salazar_icon.jpg" title="Salazar Slytherin">
                </a>
            </div>
        </div>
        <div class="col-xs-1 text-center">
            <p>
                <br>Hogwarts was founded around 990 A.D. by four of the greatest wizards and witches of the age:
                <br><b>Godric Gryffindor, Helga Hufflepuff, Rowena Ravenclaw, and Salazar Slytherin.</b>
                <br>They each represented an aspect of personality that they wanted to bring out in new students.
                <br>However, shortly after founding the school, Slytherin had a falling out with the other founders
                about
                blood purity,
                <br>and wanted to admit only pure-blood students. He felt pure-blooded students deserved to learn magic,
                <br>and those of other ancestry such as Muggle-borns and Half-bloods, were unworthy.
                <br>The other three founders all disagreed, especially Gryffindor. Slytherin left the school, but not 
                before secretly building the Chamber of Secrets.
            </p>
        </div>
        <div class="row container-row">
            <?php include 'php_descriptions/history_descriptions.php';?>
        </div>

    </div>
    <?php include 'php_general/scripts.php';?>

</body>

</html>