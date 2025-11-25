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
