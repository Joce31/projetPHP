<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/Styles/styles.css">
    <link rel="stylesheet" href="./Public/scripts/scripts.js">
    <title>Document</title>
</head>
<body>
<main>
<article>
    <!--import du menu -->

    <?php include './App/Vue/viewMenu.php';?>
    <div id="card_ent">
            
            

        <div class="card_image1">
            <p>Auto-entrepreneurs</p>
            <img src="./images/Supplement-Fitness.jpg">
            <a href="#"><img src="./images/user_customer_man_14016.png" class="user_add"></a>
            <img src="./images/plus-black-symbol_icon-icons.com_73453.png" class="user_add1">
        </div>

        <p id="bienvenue">BIENVENUE</p>

        <div class="card_image1">
            <p>Entreprises</p>
            <img src="./images/vecteezy_unfocused-image-of-man- (2).jpg">
            <a href="#"><img src="./images/user_customer_man_14016.png" class="user_add2"></a>
            <img src="./images/plus-black-symbol_icon-icons.com_73453.png" class="user_add1">
        </div>

    </div>
</article>

</main>

<?php include './App/Vue/viewFooter.php';?>
</body>
</html>