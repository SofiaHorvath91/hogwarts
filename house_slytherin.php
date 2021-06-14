<?php include 'php_general/header.php';?>

<body id="slytherin-bg" class="background house-bg">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="row container-left house-left">
            <div class="houses-icons-container" id="slytherin_symbols">
                <i class="fas fa-shield-alt houses-icons slytherin-icon menu" title="House Symbols"></i>
            </div>
            <div class="houses-icons-container" id="slytherin_element">
                <i class="fas fa-tint houses-icons slytherin-icon menu" title="House Element"></i>
            </div>
            <div class="houses-icons-container" id="slytherin_traits">
                <i class="fas fa-star houses-icons slytherin-icon menu" title="House Traits"></i>
            </div>
            <div class="houses-icons-container" id="slytherin_founder">
                <i class="fas fa-chess-queen houses-icons slytherin-icon menu" title="House Founder"></i>
            </div>
            <div class="houses-icons-container" id="slytherin_commonroom">
                <i class="fas fa-chess-rook houses-icons slytherin-icon menu" title="House Common Room"></i>
            </div>
            <div class="houses-icons-container" id="slytherin_ghost">
                <i class="fab fa-snapchat-ghost houses-icons slytherin-icon menu" title="House Ghost"></i>
            </div>
        </div>

        <div class="row container-right house-right">
            <div class="col-xs-1 text-center">
                <br>
                <h1 class="display-6 slytherin-text"><b>WELCOME TO HOUSE SLYTHERIN</b></h1>
                <br>
            </div>
            <div class="row container-row">
                <div class="image-container">
                    <img class="main-image house-crest" src="img/slytherin.png">
                </div>
            </div>
            <div class="col-xs-1 text-center">
                <h4 class="slytherin-second-text">
                    "Or perhaps in Slytherin
                    <br>You'll make your real friends,
                    <br>Those cunning folk use any means
                    <br>To achieve their ends."
                </h4>
            </div>
        </div>

        <div id="slytherin-modal" class="modal">
            <span class="closeModalHouse close">&times;</span>
            <img class="house-modal-content" id="slytherin-modal-pic">
            <div id="slytherin-caption" class="caption caption-houses"></div>
        </div>

    </div>

    <div id="slytherin-descriptions">
        <input class="house-description" type="hidden" id="desc_slytherin_symbols"
            value="The house symbol is a snake, representing resourcefulness and cunning.<br>The house colors green and silver represent the water, the element of the house.">
        <input class="house-description" type="hidden" id="desc_slytherin_element"
            value="Slytherin corresponds roughly with the element of water due to serpents being commonly associated with the sea and lochs in western European mythology, as well as serpents being physically fluid and flexible animals. Similarly, in Celtic mythology, water is seen as a portal to another world, leading some to speculate that the element was chosen to symbolise many Slytherins' hope for a pure-blood only community. The colours also correspond with waters around lakes and lochs often being green, and silver being often associated with grey rainwater.">
        <input class="house-description" type="hidden" id="desc_slytherin_traits"
            value="The qualities Salazar Slytherin valued most in his students included cleverness, resourcefulness, determination and a flexibility for the rules. Therefore, Slytherins tend to be ambitious, shrewd, cunning, strong leaders, and achievement-oriented. 
            <br>They also have highly developed senses of self-preservation - this means that Slytherins rather hesitate before acting, to weigh all possible outcomes before deciding exactly what should be done. As Slytherins are often self-assured and confident of their own competence, they tend to take charge and possess strong leadership skills. 
            <br>Though they are often cold and dismissive toward those who they don't consider as one of theirs, to those who they choose to include in their circle, they can be very loyal.">
        <input class="house-description" type="hidden" id="desc_slytherin_founder"
            value="Salazar Slytherin was the founder of the Slytherin house.
            <br>Sly and cunning, Salazar valued ambition and those students who were not afraid to use any means to achieve their goals.
            <br>He was a talented wizard, skilled in Legilemency and Parseltongue, and also the best friend of Godric Griffyndor, but he had radical views about Muggle-born students : <br>he believed strongly that only wizards of pure blood (i.e., those with a mother and father from wizarding families) should be allowed to attend Hogwarts.
            <br>Slytherin caused great dispute over this with the other founders, and it eventually caused a permanent rift with Gryffindor, which led to Slytherin's departure from the school. However, before he left, he created the secret room, called the Chamber of Secrets, to hide a monster in Hogwarts that only he and his descendants can control.He predicted that the Chamber would remain a secret, until Slytherin’s true heir came to Hogwarts, ready to finish his ancestor’s work to clean the school from those who are (after Salazar) not worthy to attend there. 
            <br>Though Slytherin's legacy was mostly quite twisted, he also left behind something else : A very distant descendant of his, Isolt Sayre, would go on to find Ilvermorny, the most famous american wizarding school, and Salazar’s wand would eventually be buried in the school’s grounds, turning into a snakewood tree with leaves with restorative powers. ">
        <input class="house-description" type="hidden" id="desc_slytherin_commonroom" value="The Slytherin Dungeon, also known as the Slytherin Common Room, serves as the common room for students in Slytherin house at Hogwarts. 
            <br>In general, it sports several shades of green and the mantle is adorned with a portrait of a serpent (all associated with the house). 
            There is a door on the right side of the Entrance Hall (if coming down the marble staircase facing the front doors of the castle) that is most frequently used by Slytherin students to get to their common room. 
            Behind the door is a set of stone steps which descend deep into the dungeons. 
            <br>The entrance to the common room is located behind a bare stretch of stone wall in the dungeons and a password is required to enter it, which changes every fortnight, and is posted on the noticeboard. 
            <br>The common room is a dungeon-like room with greenish lamps and chairs. This dungeon extends partway under the lake, giving the light in the room a green tinge. 
            The common room has lots of low backed black and dark green button-tufted, leather sofas; skulls; and dark wood cupboards. 
            It is decorated with tapestries featuring the adventures of famous Medieval Slytherins. ">
        <input class="house-description" type="hidden" id="desc_slytherin_ghost"
            value="The Bloody Baron is the Slytherin House ghost. He seems mysterious and unfriendly to the other houses, but he is actually very kind to Slytherins and will usually agree to scare people for them if asked nicely. Just don't ask how he got bloodstained, he doesn't like this question.">
    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/houses.js"></script>
    
</body>

</html>