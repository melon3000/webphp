<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Anekdoodid</title>
    <link rel="stylesheet" href="../../../style/anekdoot.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <?php
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $file = "anekdood{$id}.txt";

        if (file_exists($file)) {
            echo '<h2>Anekdoot ' . $id . '</h2>';
            echo '<div class="anekdoot-text">' . nl2br(file_get_contents($file)) . '</div>';
        } else {
            echo '<h2>Anekdooti ei leitud</h2>';
            echo '<p>Vali mõni teine anekdoot menüüst.</p>';
        }
    } else {
        if (file_exists("avaleht.txt")) {
            echo '<h2>Teade!</h2>';
            echo '<div class="avaleht-text">' . nl2br(file_get_contents("avaleht.txt")) . '</div>';
        } else {
            echo '<h2>Avaleht</h2>';
            echo '<p>See on anekdootide lehekülg. Vali üks anekdoot menüüst.</p>';
        }
    }
    ?>
</main>

<?php include 'footer.php'; ?>

</body>
</html>