<?php include 'php_general/header.php';?>

<body id="studentlife-bg" class="background">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="col-xs-1 text-center">
            <br>
            <h1 class="display-6"><b>DISCOVER THE LIFE IN HOGWARTS</b></h1>
            <br>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <a href="studentlife.php#studentlife-recruitment">
                    <img class="studentlife-icon-img menu" src="./img/recruitment-icon.jpg" title="Recruitment">
                </a>
                <a href="studentlife.php#studentlife-dailylife">
                    <img class="studentlife-icon-img menu" src="./img/dailylife-icon.jpg" title="Daily Life">
                </a>
                <a href="studentlife.php#studentlife-teamsclubs">
                    <img class="studentlife-icon-img menu" src="./img/teamsclubs-icon.jpg" title="Teams & Clubs">
                </a>
                <a href="studentlife.php#studentlife-specialevents">
                    <img class="studentlife-icon-img menu" src="./img/specialevents-icon.jpg" title="Special Events">
                </a>
            </div>
        </div>
        <div class="col-xs-1 text-center">
            <p>
                <br><b>Hogwarts is not only a school - it is a home for the students during 7 seven years and even
                    after.</b>
                <br>Naturally, the main aim is the education of the young witches and wizards and their preparation
                to the life in the Wizarding World.
                <br>But beside the academic success, it is also an egally important goal to make each student feel
                that they belong, to encourage their dreams and ambitions, and to help them discover and unleash their
                real potential.
                <br>Hogwarts is also a great place to form relations - since students live like a big family,
                depending on and supporting each other to become finally adults together, the friendships born in
                Hogwarts often last for a life-time.
                <br>Furthermore, since the Wizarding World is a more closed society than the Muggle World, the
                relations made in Hogwarts can be fruitful during the professional wizarding life.
                <br><b>Let's have a look at the life in Hogwarts, from the recruitment, through the everyday life
                    and special events, to the possible activites!</b>
            </p>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <img src="img/iconWand.png" class="icon" />
            </div>
        </div>
        <div id="studentlife-recruitment" class="row container-row">
            <?php include 'php_descriptions/studentlife_recruitment.php';?>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <img src="img/iconWand.png" class="icon back cursor" title="Back to Menu" />
            </div>
        </div>
        <div id="studentlife-dailylife" class="row container-row">
            <?php include 'php_descriptions/studentlife_dailylife.php';?>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <img src="img/iconWand.png" class="icon back cursor" title="Back to Menu" />
            </div>
        </div>
        <div id="studentlife-teamsclubs" class="row container-row">
            <?php include 'php_descriptions/studentlife_teamsclubs.php';?>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <img src="img/iconWand.png" class="icon back cursor" title="Back to Menu" />
            </div>
        </div>
        <div id="studentlife-specialevents" class="row container-row">
            <?php include 'php_descriptions/studentlife_specialevents.php';?>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <img src="img/iconWand.png" class="icon back cursor" title="Back to Menu" />
            </div>
        </div>
        
    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/studentlife.js"></script>

</body>

</html>