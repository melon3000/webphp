<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Milan PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
<!--    <link rel="stylesheet" href="style/Kusitlus.css">-->
    <script src="js/Kusitlus.js"></script>
    <script src="js/kellscript.js"></script>
</head>
<body>
<?php
//päis
include("header.php");
?>
<?php
//navigeerimismenüü
include("nav.php");
?>
<div class = "flex-container">
    <div>
        <?php
        if(isset($_GET['link'])){
            include("content/".$_GET['link']);
        }
        else{
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/images.jpg" alt="City">
        <h2>Kuupäeva ja kellaaja ülesanne</h2>
        <button id="tanaOn">TÄNA ON</button>
        <div id="kellaaegvastus"></div>
        <button id="synniPaev">Minu sünnipäevani</button>
        <div id="sunnipaevani"></div>
    </div>
</div>
<?php
//jalus
include("footer.php");
?>

</body>
</html>