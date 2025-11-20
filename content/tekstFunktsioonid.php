<?php
echo "<h2>Tekst funktioonid</h2>";
$tekst="Php on skriptikeel serveripoolne";
echo "<strong>$tekst</strong>";
echo "<br>";
echo "Teksti pikkus - .strlen(muutuja)= ".strlen($tekst). " Tähtemärgi";
echo "<br>";
echo "Esimesed 6 tähte - .substr(muutuja, 0, 6) = ".substr($tekst, 0, 6);
echo "<br>";
echo "Alates 6 tähte - .substr(muutuja, 6) = ".substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses - .str_word_count(muutuja, 6) = ".str_word_count($tekst). " Sõna lauses";
echo "<br>";
echo "Teeb kõik tähed suured - .strtoupper(muutuja) = ".strtoupper($tekst);
echo "<br>";
echo "Teeb kõik tähed väiksed - .strtolower(muutuja) = ".strtolower($tekst);
echo "<br>";
echo "Teeb kõik esimese lause tähed suured - .ucwords(muutuja) = ".ucwords($tekst);
echo "<br>";
$tekst2="       Php on skriptikeel serveri poolne";
echo "<br><strong>$tekst2</strong><br>";
echo "Eemaldab tekstist tühikuid paremal ja vasakul - trim() = ".trim($tekst2);
echo "<br>";
echo "Eemaldab tekstist tühikuid vasakul - ltrim() = ".ltrim($tekst2);
echo "<br>";
echo "Eemaldab tekstist tühikuid paremal - rtrim() = ".rtrim($tekst2);
echo "<br>";
echo "<h3>Tekst kui masiiv</h3>";
echo "1.täht massiivist - "."$tekst[0]";
echo "<br>";
echo "5.täht massiivist - "."$tekst[4]";
echo "<br>";

//määrab iga sümbool nägu eraldi element
print_r(str_word_count($tekst,1)); //Array ( [0] => Php [1] => on [2] => skriptikeel [3] => serveri [4] => poolne )
$syna=str_word_count($tekst,1);
echo "<br>";
echo "massivist 2 sõna - "."$syna[1]";
echo "<br>";

//määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst,2)); //Array ( [0] => Php [4] => on [7] => skriptikeel [19] => serveri [27] => poolne )
echo "<br>";
echo "<h2>Teksti asendamine -replace</h2>";
$asendus = "Javascript";
echo substr_replace($tekst, $asendus, 0, 3);

//ise vaheta serveripoolne - kliendipoolne
echo "<br>";
echo substr_replace($tekst, "Kliendipoolne ", 19);
echo "<br>";
$otsi=array('PHP', 'serveripoolne');
$asendav=array('Javascript', 'Kliendipoolne');
echo str_replace($otsi, $asendav, $tekst);

//ülesanne
echo "<br>";
echo "<h2>Mõistatus. Arva ära Eesti linnanimi</h2>";
//tee 5-6 funktsiooni mis aitavad aru saada milinne linnanimi oli
$linn = "Tallinn";
echo "<h3>$linn</h3>";
echo "Teksti pikkus = ".strlen($linn). " Tähtemärgi";
echo "<br>";
echo "Kõik tähed suured = ".strtoupper($linn);
echo "<br>";
echo "1.täht = "."$linn[0]";
echo "<br>";
echo "Alates 3 tähte = ".substr($linn, 3);
echo "<br>";
echo "Lisame 'on hea linn' lõppule = ".substr_replace($linn, " on hea linn", 8);
?>
<form name="testkontroll" action="tekstFunktsioonid.php" method="post">
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
?>
