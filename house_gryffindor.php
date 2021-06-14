<?php include 'php_general/header.php';?>

<body id="gryffindor-bg" class="background house-bg">

    <?php include 'php_general/navbar.php';?>

    <div class="row container-row main">

        <div class="row container-left house-left">
            <div class="houses-icons-container" id="gryffindor_symbols">
                <i class="fas fa-shield-alt houses-icons gryffindor-icon menu" title="House Symbols"></i>
            </div>
            <div class="houses-icons-container" id="gryffindor_element">
                <i class="fas fa-fire houses-icons gryffindor-icon menu" title="House Element"></i>
            </div>
            <div class="houses-icons-container" id="gryffindor_traits">
                <i class="fas fa-star houses-icons gryffindor-icon menu" title="House Traits"></i>
            </div>
            <div class="houses-icons-container" id="gryffindor_founder">
                <i class="fas fa-chess-queen houses-icons gryffindor-icon menu" title="House Founder"></i>
            </div>
            <div class="houses-icons-container" id="gryffindor_commonroom">
                <i class="fas fa-chess-rook houses-icons gryffindor-icon menu" title="House Common Room"></i>
            </div>
            <div class="houses-icons-container" id="gryffindor_ghost">
                <i class="fab fa-snapchat-ghost houses-icons gryffindor-icon menu" title="House Ghost"></i>
            </div>
        </div>

        <div class="row container-right house-right">
            <div class="col-xs-1 text-center">
                <br>
                <h1 class="display-6 gryffindor-text"><b>WELCOME TO HOUSE GRYFFINDOR</b></h1>
                <br>
            </div>
            <div class="row container-row">
                <div class="image-container">
                    <img class="main-image house-crest" src="img/gryffindor.png">
                </div>
            </div>
            <div class="col-xs-1 text-center">
                <h4 class="hufflepuff-text">
                    "You might belong in Gryffindor,
                    <br>Where dwell the brave at heart,
                    <br>Their daring, nerve and chivalry
                    <br>Set Gryffindors apart."
                </h4>
            </div>
        </div>

        <div id="gryffindor-modal" class="modal">
            <span class="closeModalHouse close">&times;</span>
            <img class="house-modal-content" id="gryffindor-modal-pic">
            <div id="gryffindor-caption" class="caption caption-houses"></div>
        </div>

    </div>

    <div id="gryffindor-descriptions">
        <input class="house-description" type="hidden" id="desc_gryffindor_symbols"
            value="The house symbol is a lion, representing the courage and bravery.<br>The house colors scarlet and golden represent the fire, the element of the house.">
        <input class="house-description" type="hidden" id="desc_gryffindor_element"
            value="Gryffindor corresponds roughly to the element of fire, and it is for this reason that the colours scarlet and gold were chosen to represent the house. The colour of fire corresponds to that of a lion as well, with scarlet representing the mane and tail and gold representing the coat.The fire also reflects to the hot-temper and unstoppable will of Gryffindors, as the lion reflects on their bravery.">
        <input class="house-description" type="hidden" id="desc_gryffindor_traits"
            value="The Gryffindor house emphasises the traits of courage, daring, chivalry and determination, thus its members are generally regarded as brave, though sometimes also quite recklessness. <br>This heroism often pairs with strong sense of justice - Gryffindors tend to take the lead on projects which aim to help the vulnerables or correct come injustice. As they are determined to the point of being stubborn, if a Gryffindor starts something important, it will be surely done, no matter the difficulties.">
        <input class="house-description" type="hidden" id="desc_gryffindor_founder"
            value="Godric Gryffindor was the founder of the Gryffindor house.
            <br>Much like the Hogwarts house he founded, Godric was known for his bravery and his sense of justice. 
            <br>He was also an accomplished dueller, he even had a special silver sword created for him by Ragnuk the First, the finest of the goblin silversmiths, which is decorated with huge blood-red rubins, the color of Gryffindor, and would present itself to any true Gryffindor in a moment of need.
            <br>He was also famous for his fight against Muggle discrimination in the wizarding world, believing that any child who displayed magical abilities before their 11th birthday should be able to attend Hogwarts. In fact, it was a serious argument between Godric and Salazar, and though they were best friends, this dispute divided them, making finally the Slytherin founder leave Hogwarts. 
            <br>Legend has it that Godric was also the one who gave Hogwarts the Sorting Hat, a sentient piece of headwear that soon became the one to sort the school’s students into houses long after Godric and the other founders were gone. The hat contains the intelligence of all founders, so it can pass on their intuition on each Hogwarts student forever.">
        <input class="house-description" type="hidden" id="desc_gryffindor_commonroom"
            value="Gryffindor Tower, which consists of the Gryffindor Common Room and the dormitories, serves as the living quarters for students in Gryffindor House. 
            It is one of the three tallest towers of Hogwarts Castle, alongside Ravenclaw Tower and the Astronomy Tower.
             <br>The entrance to the Gryffindor common room is concealed under the portrait of the Fat Lady, on the lavish Gryffindor Landing. 
             <br>The common room is a circular room where Gryffindor students can relax after a long day of studying. It is full of squashy armchairs, tables, and a bulletin board where school notices, ads, lost posters, etc. can be posted.
             The room is decorated in several shades of red, which is associated with the house. The walls are covered with scarlet tapestries that depict witches and wizards, but also various animals.
             There are also bookcases located in the room, filled with various novels. Is is quite is comfortable, but not more comfortable than the Hufflepuff basement. 
             <br>There are many windows that look out onto the grounds of the school, and a large fireplace dominates one wall. 
             The mantle of the fireplace is adorned with a portrait of a lion. The fireplace is also connected to the Floo Network, but as it is extremely public except in the dead of night.">
        <input class="house-description" type="hidden" id="desc_gryffindor_ghost"
            value="The Gryffindor House ghost is Sir Nicholas de Mimsy-Porpington, or Nearly Headless Nick. He was beheaded, but the axe was blunt so it took many chops until he was finally dead, leaving his head half on his neck. He is a friendly ghost who will help any who need it.">
    </div>

    <?php include 'php_general/scripts.php';?>
    <script type="text/javascript" src="js/houses.js"></script>

</body>

</html>