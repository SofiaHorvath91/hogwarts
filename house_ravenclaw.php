<?php include 'php_general/header.php';?>

<body id="ravenclaw-bg" class="background house-bg">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="row container-left house-left">
            <div class="houses-icons-container" id="ravenclaw_symbols">
                <i class="fas fa-shield-alt houses-icons ravenclaw-icon menu" title="House Symbols"></i>
            </div>
            <div class="houses-icons-container" id="ravenclaw_element">
                <i class="fas fa-cloud houses-icons ravenclaw-icon menu" title="House Element"></i>
            </div>
            <div class="houses-icons-container" id="ravenclaw_traits">
                <i class="fas fa-star houses-icons ravenclaw-icon menu" title="House Traits"></i>
            </div>
            <div class="houses-icons-container" id="ravenclaw_founder">
                <i class="fas fa-chess-queen houses-icons ravenclaw-icon menu" title="House Founder"></i>
            </div>
            <div class="houses-icons-container" id="ravenclaw_commonroom">
                <i class="fas fa-chess-rook houses-icons ravenclaw-icon menu" title="House Common Room"></i>
            </div>
            <div class="houses-icons-container" id="ravenclaw_ghost">
                <i class="fab fa-snapchat-ghost houses-icons ravenclaw-icon menu" title="House Ghost"></i>
            </div>
        </div>

        <div class="row container-right house-right">
            <div class="col-xs-1 text-center">
                <br>
                <h1 class="display-6 ravenclaw-text"><b>WELCOME TO HOUSE RAVENCLAW</b></h1>
                <br>
            </div>
            <div class="row container-row">
                <div class="image-container">
                    <img class="main-image house-crest" src="img/ravenclaw.png">
                </div>
            </div>
            <div class="col-xs-1 text-center">
                <h4 class="ravenclaw-second-text">
                    "Or yet in wise old Ravenclaw,
                    <br>If you've a ready mind,
                    <br>Where those of wit and learning,
                    <br>Will always find their kind."
                </h4>
            </div>
        </div>

        <div id="ravenclaw-modal" class="modal">
            <span class="closeModalHouse close">&times;</span>
            <img class="house-modal-content" id="ravenclaw-modal-pic">
            <div id="ravenclaw-caption" class="caption caption-houses"></div>
        </div>

    </div>

    <div id="ravenclaw-descriptions">
        <input class="house-description" type="hidden" id="desc_ravenclaw_symbols"
            value="The house symbol is a eagle, representing open-minded thinking and intelligence.<br>The house colors blue and bronze represent the air, the element of the house, and the feathers of the eagle.">
        <input class="house-description" type="hidden" id="desc_ravenclaw_element"
            value="Ravenclaw corresponds roughly to the element of air, and it is for that reason that the House colours were chosen; blue and bronze represent the sky and eagle feathers respectively. Their correspondance with air also reflects in their flying intellect.">
        <input class="house-description" type="hidden" id="desc_ravenclaw_traits"
            value="Ravenclaws possess the traits of cleverness, wisdom, wit, intellectual ability and creativity. 
            <br>While others may be inclined to shun and ridicule such people, Ravenclaws celebrate these eccentrics. Students in Ravenclaw are noted for their individuality and acceptance of people and things that others would consider weird, as well as their outstanding intelligence. They can also be quirky and possess unusual intellectual interests, often dismissing certain social expectations for the sake of satisfying their own intellectual curiosity. 
            <br>Ravenclaws are very competitive when it comes to academic success - they are known to back stab each other in order to get top marks. But their prefectionism often pays off, many well-known inventors and innovators have come from Ravenclaw. ">
        <input class="house-description" type="hidden" id="desc_ravenclaw_founder"
            value="Rowena Ravenclaw was the founder of the Ravenclaw house.
            Rowena was the most brilliant witch of her time, a sharp and intelligent woman - no wonder that intellect and knowledge are the most highly valued assets to the students of her house.
            <br>By calling out for the children with the highest intelligence, she wanted to make Hogwarts the very finest magical school on earth. To achieve this, she also founded the Hogwarts library, one of the largest libraries of the wizarding world.
            <br>Rowena was very vain about her intellect, so in order to be always the brightest of them all, she created a diadem, decorated with the symbol of Ravenclaw House, an eagle, that was said to grant wisdom to the wearer. Even after her daughter, Helena stole it from her and ran away, she claimed to have it until her death. 
            <br>It is told that it took a long time to Rowena to forgive her daughter, but when she fell ill, she wanted to see her one more time, so she sent a baron, who was in love with Helena, to find and bring her home. Unfortunately, when he found her and Helena said no to returning with him, the baron killed her in his deadly rage. 
            <br>The legend tells us that Rowena died of a broken hearth when she learned the tragedy, and her diadem was lost for more than a thousand year.">
        <input class="house-description" type="hidden" id="desc_ravenclaw_commonroom"
            value="Ravenclaw Tower serves as the common room for students in Ravenclaw House. It is one of the three tallest towers of Hogwarts Castle, alongside Gryffindor Tower and the Astronomy Tower.
            <br>The entrance to the common room is located on the west side of Hogwarts at the top of a spiral staircase, presumably located on the fifth floor, and is a door without a doorknob or keyhole, 
            but a bronze knocker in the shape of an eagle. In order to enter the room, a person must answer a riddle asked by the eagle knocker; if they answer incorrectly, they must wait for someone else who gets it right. 
            <br>The Ravenclaw common room is one of the airiest rooms at Hogwarts. In general, it sports several shades of blue with bronze (all associated with the house). 
            It is a wide, circular room with arched windows hung with blue and bronze silks and a midnight blue carpet covered in stars, which is reflected onto the domed ceiling. 
            The room is furnished with tables, chairs, and bookcases; and by the door leading up to the dormitories stands a tall statue of Rowena Ravenclaw made of white marble.">
        <input class="house-description" type="hidden" id="desc_ravenclaw_ghost"
            value="The Grey Lady also known as Helena Ravenclaw, Rowena's daughter, is the Ravenclaw ghost. She is very shy and rarely speaks to anyone outside Ravenclaw, but is a great resource for Ravenclaws who are lost or have lost something.">
    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/houses.js"></script>

</body>

</html>