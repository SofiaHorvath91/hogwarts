<?php include 'php_general/header.php';?>

<body id="castle-bg" class="background">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row">
        <div class="col-xs-1 text-center">
            <br>
            <h1 class="display-6"><b>DISCOVER THE HOGWARTS CASTLE</b></h1>
            <br>
        </div>
        <div class="col-xs-1 text-center">
            <h3>Hover over the map and click on the place you wish to explore!</h3>
            <p>You can also learn more about different places, just select from the side menu!</p>
        </div>
        <div class="row container-row">
            <div class="image-container">
                <a href="castle_grounds.php">
                    <img src="img/iconWand.png" class="icon" title="Back to Grounds & Castle"/>
                </a>
            </div>
        </div>
    </div>
    <div class="row container-left mt-3">
        <?php include 'php_descriptions/castle_descriptions.php';?>
    </div>

    <div class="row container-right mt-3">
        <img id="castle-map-pic" class="img-general" usemap="#castlemap" src="img/castlemap.jpg"
            alt="Hogwarts Castle" />
        <map id="castlemap" name="castlemap">
            <area href="#" class="map-element" id="astronomytower_0" name="astronomytower" shape="rect"
                coords="200,320,320,340" title="Astronomy Tower">
            <area href="#" class="map-element" id="belltowers_1" name="belltowers" shape="rect" coords="480,0,560,70"
                title="Bell Towers">
            <area href="#" class="map-element" id="clocktower_2" name="clocktower" shape="rect" coords="70,490,160,510"
                title="Clock Tower">
            <area href="#" class="map-element" id="clocktowercourtyard_3" name="clocktowercourtyard" shape="rect"
                coords="60,630,210,660" title="Clocktower Courtyard">
            <area href="#" class="map-element" id="coveredbridge_4" name="coveredbridge" shape="rect"
                coords="0,670,100,690" title="Covered Bridge">
            <area href="#" class="map-element" id="dadaclassroom_5" name="dadaclassroom" shape="rect"
                coords="180,410,280,450" title="Defense Against the Dark Arts Classroom">
            <area href="#" class="map-element" id="divination_6" name="divination" shape="rect" coords="100,200,210,240"
                title="Divination Classroom">
            <area href="#" class="map-element" id="entrancecourtyard_7" name="entrancecourtyard" shape="rect"
                coords="560,630,620,660" title="Entrance Courtyard">
            <area href="#" class="map-element" id="entrancehall_8" name="entrancehall" shape="rect"
                coords="510,790,560,830" title="Entrance Hall">
            <area href="#" class="map-element" id="staircases_9" name="staircases" shape="rect" coords="305,710,405,730"
                title="Grand Staircase & Moving Staircases">
            <area href="#" class="map-element" id="greathall_10" name="greathall" shape="rect" coords="420,830,490,860"
                title="Great Hall">
            <area href="#" class="map-element" id="gryffindortower_11" name="gryffindortower" shape="rect"
                coords="550,580,610,610" title="Gryffindor Tower">
            <area href="#" class="map-element" id="headmaster_12" name="headmaster" shape="rect"
                coords="230,740,310,770" title="Headmaster's Office">
            <area href="#" class="map-element" id="greenhouses_13" name="greenhouses" shape="rect" coords="570,0,720,70"
                title="Herbology Greenhouses">
            <area href="#" class="map-element" id="hospital_14" name="hospital" shape="rect" coords="170,470,220,520"
                title="Hospital Wing">
            <area href="#" class="map-element" id="hufflepuffdungeon_15" name="hufflepuffdungeon" shape="rect"
                coords="230,820,300,860" title="Hufflepuff Basement">
            <area href="#" class="map-element" id="kitchen_16" name="kitchen" shape="rect" coords="230,800,290,820"
                title="Kitchens">
            <area href="#" class="map-element" id="library_17" name="library" shape="rect" coords="130,140,200,180"
                title="Library">
            <area href="#" class="map-element" id="moaningmyrtle_18" name="moaningmyrtle" shape="rect"
                coords="410,390,480,450" title="Moaning Myrtle's Bathroom">
            <area href="#" class="map-element" id="owlery_19" name="owlery" shape="rect" coords="90,0,190,90"
                title="Owlery">
            <area href="#" class="map-element" id="pavedcourtyard_20" name="pavedcourtyard" shape="rect"
                coords="210,680,320,700" title="Paved Courtyard">
            <area href="#" class="map-element" id="potions_21" name="potions" shape="rect" coords="490,490,540,520"
                title="Potions Classroom">
            <area href="#" class="map-element" id="ravenclawtower_22" name="ravenclawtower" shape="rect"
                coords="660,410,730,450" title="Ravenclaw Tower">
            <area href="#" class="map-element" id="slytherindungeon_23" name="slytherindungeon" shape="rect"
                coords="670,470,720,510" title="Slytherin Dungeon">
            <area href="#" class="map-element" id="stonebridge_24" name="stonebridge" shape="rect"
                coords="460,530,510,580" title="Stone Bridge">
            <area href="#" class="map-element" id="suspensionbridge_25" name="suspensionbridge" shape="rect"
                coords="300,430,370,470" title="Suspension Bridge">
            <area href="#" class="map-element" id="transfigurationclassroom_26" name="transfigurationclassroom"
                shape="rect" coords="170,370,280,400" title="Transfiguration Classroom">
            <area href="#" class="map-element" id="transfigurationcourtyard_27" name="transfigurationcourtyard"
                shape="rect" coords="220,250,320,300" title="Transfiguration Courtyard">
            <area href="#" class="map-element" id="viaduct_28" name="viaduct" shape="rect" coords="570,520,620,540"
                title="Viaduct">
        </map>

        <div id="castle-map-modal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="castle-modal-pic">
            <div id="caption" class="caption"></div>
        </div>
    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/imageMapResizer.js"></script>
    <script type="text/javascript" src="js/castle.js"></script>

</body>

</html>