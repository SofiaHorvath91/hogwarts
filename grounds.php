<?php include 'php_general/header.php';?>

<body id="grounds-bg" class="background">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="col-xs-1 text-center">
            <br>
            <h1 class="display-6"><b>DISCOVER THE HOGWARTS GROUNDS</b></h1>
            <br>
        </div>
        <div class="col-xs-1 text-center">
            <h3>Hover over the map and click on the place you wish to explore!</h3>
            <p>Once you explore the selected place, click on the little icon to return to the map!</p>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <a href="castle_grounds.php">
                    <img src="img/iconWand.png" class="icon" title="Back to Grounds & Castle"/>
                </a>           
             </div>
        </div>
        <img id="grounds-map-pic" class="img-general" usemap="#hogwartsmap" src="img/grounds.jpg"
            alt="Hogwarts Grounds" />
        <map id="hogwartsmap" name="hogwartsmap">
            <area shape="rect" coords="0,0,370,120" alt="Hogsmeade" href="#hogsmeade" title="Hogsmeade">
            <area shape="rect" coords="410,0,520,130" alt="Gate" href="#gate" title="Entrance Gates">
            <area shape="rect" coords="740,90,880,170" alt="Cabin" href="#cabin"
                title="Gamekeeper's Cabin & Pumpkin Patch">
            <area shape="rect" coords="850,0,1050,150" alt="Forest" href="#forest" title="Forbidden Forest">
            <area shape="rect" coords="900,150,1050,300" alt="Forest" href="#forest" title="Forbidden Forest">
            <area shape="rect" coords="570,150,770,450" alt="Castle" href="#castle" title="Hogwarts Castle">
            <area shape="rect" coords="780,170,860,280" alt="Willow" href="#willow" title="Whomping Willow">
            <area shape="rect" coords="810,300,940,370" alt="Greenhouses" href="#greenhouses" title="Greenhouses">
            <area shape="rect" coords="270,120,460,300" alt="Quidditch" href="#quidditch" title="Quidditch Grounds">
            <area shape="rect" coords="250,300,500,650" alt="Lake" href="#lake" title="Black Lake">
            <area shape="rect" coords="500,450,950,570" alt="Lake" href="#lake" title="Black Lake">
            <area shape="rect" coords="560,570,1000,770" alt="Station" href="#station" title="Hogsmead Station">
        </map>
        <div class="row container-row">
            <?php include 'php_descriptions/grounds_descriptions.php';?>
        </div>

    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/imageMapResizer.js"></script>
    <script type="text/javascript" src="js/grounds.js"></script>

</body>

</html>