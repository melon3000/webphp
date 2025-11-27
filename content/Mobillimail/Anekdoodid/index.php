<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anekdoodid</title>
    <link rel="stylesheet" href="../../../style/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <?php
    if (isset($_GET['link'])) {
        $file = basename($_GET['link']); // защита от ../
        if (in_array($file, ['nali1.php','nali2.php','nali3.php'])) {
            include $file;
        } else {
            echo "<p>Anekdood ei leitud.</p>";
        }
    } else {
        echo "<h2>Tere tulemast veebile anekdoodidega!</h2>";
        echo "<p>Vali anekdood üles.</p>";
    }
    ?>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
