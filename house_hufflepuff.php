<?php include 'php_general/header.php';?>

<body id="hufflepuff-bg" class="background house-bg">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="row container-left house-left">
            <div class="houses-icons-container" id="hufflepuff_symbols">
                <i class="fas fa-shield-alt houses-icons hufflepuff-icon menu" title="House Symbols"></i>
            </div>
            <div class="houses-icons-container" id="hufflepuff_element">
                <i class="fas fa-leaf houses-icons hufflepuff-icon menu" title="House Element"></i>
            </div>
            <div class="houses-icons-container" id="hufflepuff_traits">
                <i class="fas fa-star houses-icons hufflepuff-icon menu" title="House Traits"></i>
            </div>
            <div class="houses-icons-container" id="hufflepuff_founder">
                <i class="fas fa-chess-queen houses-icons hufflepuff-icon menu" title="House Founder"></i>
            </div>
            <div class="houses-icons-container" id="hufflepuff_commonroom">
                <i class="fas fa-chess-rook houses-icons hufflepuff-icon menu" title="House Common Room"></i>
            </div>
            <div class="houses-icons-container" id="hufflepuff_ghost">
                <i class="fab fa-snapchat-ghost houses-icons hufflepuff-icon menu" title="House Ghost"></i>
            </div>
        </div>

        <div class="row container-right house-right">
            <div class="col-xs-1 text-center">
                <br>
                <h1 class="display-6 hufflepuff-text"><b>WELCOME TO HOUSE HUFFLEPUFF</b></h1>
                <br>
            </div>
            <div class="row container-row">
                <div class="image-container">
                    <img class="main-image house-crest" src="img/hufflepuff.png">
                </div>
            </div>
            <div class="col-xs-1 text-center">
                <h4>
                    "You might belong in Hufflepuff,
                    <br>Where they are just and loyal,
                    <br>Those patient Hufflepuffs are true
                    <br>And unafraid of toil."
                </h4>
            </div>
        </div>

        <div id="hufflepuff-modal" class="modal">
            <span class="closeModalHouse close">&times;</span>
            <img class="house-modal-content" id="hufflepuff-modal-pic">
            <div id="hufflepuff-caption" class="caption caption-houses"></div>
        </div>

    </div>

    <div id="hufflepuff-descriptions">
        <input class="house-description" type="hidden" id="desc_hufflepuff_symbols"
            value="The house symbol is a badger, representing hard-working spirit and endurance.<br>The house colors yellow and black represent the earth, the element of the house.">
        <input class="house-description" type="hidden" id="desc_hufflepuff_element"
            value="Hufflepuff corresponds roughly to the element of earth, and it is for that reason that the House colours were chosen: yellow represented wheat, while black was emblematic of soil. Students sorted into Hufflepuff often demonstrate exceptional abilities in Herbology and in taking care of magical creatures, owing to their correspondence to earth.">
        <input class="house-description" type="hidden" id="desc_hufflepuff_traits"
            value="Students belonging to this house are known to be hard-working, friendly, loyal, honest and rather impartial. It may be that due to their values, Hufflepuffs are not as competitive as the other houses, and are more modest about their accomplishments. 
            <br>Hufflepuff is the most inclusive among the four houses; valuing hard work, dedication, patience, loyalty, and fair play rather than a particular aptitude. Students in Hufflepuff are known to value everyone and treat them as equal.">
        <input class="house-description" type="hidden" id="desc_hufflepuff_founder"
            value="Helga Hufflepuff was the founder of the Hufflepuff house.
            A kind and warm woman, Helga valued loyalty, patience, and hard-work above all else. She got along well with every founder, and Rowena Ravenclaw was her best friend, but she did not agree with prefering one student over another for a given skill. According to the Sorting Hat, she vowed to 'teach the lot' and she didn't judge certain students over others, no matter how much talent they had or what families they came from.
            <br>It is also known that she brought the house-elves to Hogwarts, giving them shelter during hard medieval times.
            <br>At Hogwarts, Hufflepuff was known for her talents in Charms, and used her remarkable skills for preparing food – a speciality of hers – to create splendid feasts that were enjoyed by all and would bring the whole school together in harmony. Helga Hufflepuff's fantastic recipes are still used in the Hogwarts kitchens to this day - it is her legacy that the Hogwarts feasts are always so triumphant.
            <br>Her portrait can be found in the Hufflepuff common room (situating next to the kitchen), toasting her students with her iconic golden cup engraved with a badger, the symbol of Hufflepuff House.">
        <input class="house-description" type="hidden" id="desc_hufflepuff_commonroom"
            value="The Hufflepuff Basement serves as the Hufflepuff Common Room at Hogwarts. 
            In general, it sports several motifs, such as circles, nature, copper and the colours yellow and black (all associated with the house). 
            It also emphasises comfort, said to be the cosiest common room of them all. 
            It is at one floor below the ground and is very sheltered from the elements, generally allowing students to sleep easier than those in the towers (like Gryffindor and Ravenclaw). 
            The entrance to the common room is located in a nook on the right hand side of the kitchen corridor, concealed behind a stack of barrels. 
            In order to reveal the entrance, no password is required. Instead, one must tap the barrel two from the bottom, middle of the second row, in the rhythm of 'Helga Hufflepuff', which will make the lid swing open. 
            The actual basement itself is round, earthy, low-ceilinged, welcoming, warm, and sunny. 
            There are lots of yellow hangings, burnished copper, and overstuffed sofas and armchairs upholstered in yellow and black, and circular windows that provide a vista of 'rippling grass and dandelions'. 
            There is also a large, honey coloured, wooden mantelpiece with carvings of badgers on it. This is located underneath a portrait of the house's founder, Helga Hufflepuff.">
        <input class="house-description" type="hidden" id="desc_hufflepuff_ghost"
            value="The Fat Friar is the Hufflepuff ghost. He is a plump, friendly man wearing monk robes and is always willing to help Hufflepuffs who are lost or in trouble.">
    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/houses.js"></script>
    
</body>

</html>