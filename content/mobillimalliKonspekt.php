<h1>Konspekt</h1>
<br>
<div class="flex-row">
    <h2>Sissejuhatus</h2>
    <b>Ülesanded:</b> Luua mobiilisõbralik veebileht anekdootide näitamiseks. <br>
    <b>Kasutatud tehnoloogiad:</b> HTML5, CSS3, PHP, meta viewport.
</div>
<br>

<div class="flex-row">
    <h2>1. Failide lugemine PHP-ga</h2>
    <b>Mida teeb:</b> Loeb tekstifailidest sisu ja kuvab lehel.
    <div class="flex-row">
        <?php
        $code = '<?php
echo nl2br(file_get_contents("teade.txt"));
echo file_get_contents("autor.txt");
?>';
        echo '<pre>' . htmlspecialchars($code) . '</pre>';
        ?>
    </div>
    <?php
    $html = 'Selgitus: file_get_contents() loeb faili, nl2br() muudab reavahetused <br> tagideks.';
    echo '<pre>' . htmlspecialchars($html) . '</pre>';
    ?>
</div>
<br>

<div class="flex-row">
    <h2>2. Mobiilne Meta Tag</h2>
    <div class="flex-row">
        <?php
        $meta = '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<pre>' . htmlspecialchars($meta) . '</pre>';
        ?>
    </div>
    Selgitus: Leht kohandub seadme ekraani laiusega.
</div>
<br>

<div class="flex-row">
    <h2>3. Anekdootide ja avalehte dünaamiline laadimine</h2>
    <b>Mida teeb:</b> Kontrollib URL parameetrit ja kuvab faili sisu.
    <div class="flex-row">
        <?php
        $code = '<?php
if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $file = "anekdood{$id}.txt";

    if (file_exists($file)) {
        echo "<h2>Anekdoot " . $id . "</h2>";
        echo "<div class=\"anekdoot-text\">" . nl2br(file_get_contents($file)) . "</div>";
    } else {
        echo "<h2>Anekdooti ei leitud</h2>";
        echo "<p>Vali mõni teine anekdoot menüüst.</p>";
    }
} else {
    if (file_exists("avaleht.txt")) {
        echo "<h2>Teade!</h2>";
        echo "<div class=\"avaleht-text\">" . nl2br(file_get_contents("avaleht.txt")) . "</div>";
    } else {
        echo "<h2>Avaleht</h2>";
        echo "<p>See on anekdootide lehekülg. Vali üks anekdoot menüüst.</p>";
    }
}
?>';
        echo '<pre>' . htmlspecialchars($code) . '</pre>';
        ?>
    </div>
</div>

<br>

<div class="flex-row">
    <h2>4. CSS mobiilivaatele</h2>
    <b>Mida teeb:</b> Lihtne kujundus, mis töötab mobiilse seadme ekraanil.
    <div class="flex-row">
        <?php
        $code = '@media (max-width: 360px) {
    html {font-size: 13px;}
    body {font-size: 0.85rem;}
    nav a {padding: 8px 12px;}
    header, footer {padding: 12px 8px;}
    main {font-size: 0.85rem;}
    .text-content {font-size: 0.85rem;}
}';
        echo '<pre>' . htmlspecialchars($code) . '</pre>';
        ?>
    </div>
</div>
<br>

<div class="flex-row">
    Leht kohandub automaatselt väikese ekraani laiusega. Menüü lühendatakse, tekst väiksemaks, kõik elemendid mahuvad ekraanile.
    <h2>Mobiilne vaade</h2>
    <picture>
        <img src="../image/mobile_view1.png" alt="Mobiilne vaade nr1">
    </picture>
    <picture>
        <img src=../image/mobile_view2.png alt="Mobiilne vaade nr2">
    </picture>
</div>

