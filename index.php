<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/menu.css">
</head>
<body> 
    
    <?php
        include "menu.php";
    ?>

    <!--code-->
    <div class="banner-text">
        <ul>
            <li>
                <a href="#">Menu</a>
            </li>
            <li>
                <a href="#">A propos</a>
            </li>
            <li>
                <a href="#">Portefeuille</a>
            </li>
            <li>
                <a href="#">Service</a>
            </li>
            <li>
                <input type="text" placeholder="Search..">
            </li>
        </ul>
    </div>
    
    <div class="text-zone">
        <h2 class="title">
            <a href="#">Bienvenue sur mon site</a>
        </h2>

        <div class="article">
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi voluptates itaque, nisi neque odio alias, a nihil dicta illum aspernatur rerum, libero accusantium! Perspiciatis quo et natus cupiditate fugit dignissimos?</h3>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>