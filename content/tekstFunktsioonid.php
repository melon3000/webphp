<div id="flex-container-ajaf">

    <?php
    function clearVarsExcept($url, $varname){
        $url = basename($url);
        if (str_starts_with($url, "?")){
            return "?$varname=" . $_REQUEST[$varname];
        }
        return strtok($url, "?") . "?$varname=" . $_REQUEST[$varname];
    }

    // --- БЛОК 1: Tekst funktioonid ---
    echo "<div class='flex-row'>";
    echo "<h2>Tekst funktioonid</h2>";
    $tekst="Php on skriptikeel serveripoolne";
    echo "<strong>$tekst</strong><br>";
    echo "Teksti pikkus - .strlen(muutuja)= ".strlen($tekst)." Tähtemärgi<br>";
    echo "Esimesed 6 tähte - .substr(muutuja, 0, 6) = ".substr($tekst, 0, 6)."<br>";
    echo "Alates 6 tähte - .substr(muutuja, 6) = ".substr($tekst, 6)."<br>";
    echo "Sõnade arv lauses - .str_word_count(muutuja) = ".str_word_count($tekst)." Sõna lauses<br>";
    echo "Teeb kõik tähed suured - .strtoupper(muutuja) = ".strtoupper($tekst)."<br>";
    echo "Teeb kõik tähed väiksed - .strtolower(muutuja) = ".strtolower($tekst)."<br>";
    echo "Teeb kõik esimese lause tähed suured - .ucwords(muutuja) = ".ucwords($tekst)."<br>";
    echo "</div>";

    // --- БЛОК 2: Trim & tekst2 ---
    $tekst2="       Php on skriptikeel serveri poolne";
    echo "<div class='flex-row'>";
    echo "<strong>$tekst2</strong><br>";
    echo "Eemaldab tekstist tühikuid paremal ja vasakul - trim() = ".trim($tekst2)."<br>";
    echo "Eemaldab tekstist tühikuid vasakul - ltrim() = ".ltrim($tekst2)."<br>";
    echo "Eemaldab tekstist tühikuid paremal - rtrim() = ".rtrim($tekst2)."<br>";
    echo "</div>";

    // --- БЛОК 3: Tekst kui massiiv ---
    echo "<div class='flex-row'>";
    echo "<h3>Tekst kui massiiv</h3>";
    echo "1.täht massiivist - ".$tekst[0]."<br>";
    echo "5.täht massiivist - ".$tekst[4]."<br>";
    $syna=str_word_count($tekst,1);
    echo "massivist 2 sõna - ".$syna[1]."<br>";
    echo "</div>";

    // --- БЛОК 4: Teksti asendamine ---
    echo "<div class='flex-row'>";
    echo "<h2>Teksti asendamine -replace</h2>";
    $asendus = "Javascript";
    echo substr_replace($tekst, $asendus, 0, 3)."<br>";
    echo substr_replace($tekst, "Kliendipoolne ", 19)."<br>";
    $otsi=array('PHP', 'serveripoolne');
    $asendav=array('Javascript', 'Kliendipoolne');
    echo str_replace($otsi, $asendav, $tekst)."<br>";
    echo "</div>";

    // --- БЛОК 5: Mõistatus ---
    $linn = "Tallinn";
    echo "<div class='flex-row'>";
    echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
    echo "<h3>$linn</h3>";
    echo "Teksti pikkus = ".strlen($linn)." Tähtemärgi<br>";
    echo "Kõik tähed suured = ".strtoupper($linn)."<br>";
    echo "1.täht = ".$linn[0]."<br>";
    echo "Alates 3 tähte = ".substr($linn, 3)."<br>";
    echo "Lisame 'on hea linn' lõppule = ".substr_replace($linn, " on hea linn", 8)."<br>";
    ?>

    <form name="testkontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
        <label for="linn">Sisesta linnanimi:</label>
        <input type="text" id="linn" name="linn">
        <input type="submit" value="Kontrolli">
    </form>

    <?php
    if (isset($_REQUEST["linn"])){
        if ($_REQUEST["linn"]=="$linn"){
            echo $_REQUEST["linn"]. " On õige";
        }
        else{
            echo $_REQUEST["linn"]. " On vale";
        }
    }
    echo "</div>"; // конец блока mõistatus
    ?>
</div>
