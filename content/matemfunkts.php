<?php
echo "<h2>Matemaatilised tehed</h2>";

$arv1 = 1;
$arv2 = 2.21 ;

echo "Esimine arv: $arv1, Teine arv: $arv2<br>";

echo "Liitmine + : ".($arv1+$arv2)."<br>";
echo "<br>";
echo "Lahutamine - : ".($arv1-$arv2)."<br>";
echo "<br>";
echo "Korruamine * : ".($arv1*$arv2)."<br>";
echo "<br>";
echo "Jagamine / : ".($arv1/$arv2)."<br>";
echo "<br>";

echo "<h3>Matemaatilised funktsioonid</h3>";

echo "Väiksem arv : ".min($arv1,$arv2)."<br>";
echo "Suurem arv : ".max($arv1,$arv2)."<br>";

echo "round($arv2) Ümardamine täisarvuni : ".round($arv2)."<br>";
echo "ceil($arv2) Ümardamine järgmise täisarvuni : ".ceil($arv2)."<br>";
echo "floor($arv2) Ümardamine allapoole täisarvuni : ".floor($arv2)."<br>";
echo "round($arv2,1) Ümardamine ühe komma kohtani : ".round($arv2,1)."<br>";
echo "rand(1,100) Random arv : ".rand(1,100)."<br>";
echo "pow($arv1, 2) Arv astendamine : ".pow($arv1, 2)."<br>";
echo "sqrt($arv2) Arvu ruutjuur : ".sqrt($arv2)."<br>";
echo "pi()  pi : ".pi()."<br>";

echo "<h2>Omistamise operaatorid</h2>";
$x = 10;
$y = 20;
echo "Esimine arv: $x, Teine arv: $y<br>";

$x ++;
echo "X++ = ".$x."<br>";
$x --;
echo "X-- = ".$x."<br>";
$x*=$y;
echo "X*=Y = ".$x."<br>";
$x/=$y;
echo "X/=Y = ".$x."<br>";

$nimi = "Milan";
$perenimi = "Petrovski";
$nimi .= $perenimi;
echo $nimi."<br>";
$format = "Tere, %s %s, arv x: %d";
printf($format, $perenimi, $nimi, $x);

echo"<br><br>";

// Saladuslikud numbrid
$number1 = 7;
$number2 = 15;

echo "Esimene number on vahemikus 1-10<br>";
echo "Teine number on vahemikus 10-20<br>";
echo "Esimene number on paaritu<br>";
echo "Teine number jagub 3-ga<br>";
echo "Numbrite summa on: ".($number1 + $number2)."<br>";
echo "Numbrite korrutis on: ".($number1 * $number2)."<br>";

function clearVarsExcept($url, $varname)
{
    $url = basename($url);
    if (str_starts_with($url, "?")) {
        return "?$varname=$_REQUEST[$varname]";
    }
    return strtok($url, "?") . "?$varname=" . $_REQUEST[$varname];
}
?>

    <form name="numbrikontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
        <label for="number1">Sisesta esimene number (1-10):</label>
        <input type="number" name="number1" id="number1" min="1" max="10" required><br><br>
        <label for="number2">Sisesta teine number (10-20):</label>
        <input type="number" name="number2" id="number2" min="10" max="20" required><br><br>
        <input type="submit" value="Kontrolli" id="kontroll">
    </form>

<?php
if(isset($_REQUEST['number1']) && isset($_REQUEST['number2'])){
    $guess1 = (int)$_REQUEST['number1'];
    $guess2 = (int)$_REQUEST['number2'];

    if($guess1 == $number1 && $guess2 == $number2){
        echo "<strong>Õige! Mõlemad numbrid on õiged: ".$guess1." ja ".$guess2."</strong>";
    } elseif($guess1 == 7){
        echo "Esimene number ".$guess1." on õige, aga teine on vale!";
    } elseif($guess2 == 15){
        echo "Teine number ".$guess2." on õige, aga esimene on vale!";
    } else {
        echo "Mõlemad numbrid on valed! Proovi uuesti.";
    }
}
?>