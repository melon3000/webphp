<?php
$fail = 'data/tootajad.csv';
$csv = fopen($fail, 'r') or die('Ei leia faili!'); //kui fail pole leitud, peatame skripti ja näitame et fail pole leitud

$header = fgetcsv($csv, 0, ';'); //Array ( [0] => Nimi [1] => Sugu [2] => Palk )

$mehed = [];
$naised = [];
$andmed = [];

while (($rida = fgetcsv($csv, 0, ';')) !== false) {
    $nimi = $rida[0];
    $sugu = $rida[1];
    $palk = floatval($rida[2]);

    $andmed[] = ['nimi' => $nimi, 'sugu' => $sugu, 'palk' => $palk];

    if ($sugu == 'M') {
        $mehed[] = $palk;
    } elseif ($sugu == 'N') {
        $naised[] = $palk;
    }
}
fclose($csv);

function keskmine($arr) {
    return count($arr) ? array_sum($arr)/count($arr) : 0;
}

function maks($arr) {
    return count($arr) ? max($arr) : 0;
}

$meesteKeskmine = keskmine($mehed);
$naisteKeskmine = keskmine($naised);
$meesteMax = maks($mehed);
$naisteMax = maks($naised);

?>

<h3>Andmed töötajatest</h3>
<table>
    <tr>
        <th>Nimi</th>
        <th>Sugu</th>
        <th>Palk (€)</th>
    </tr>
    <?php foreach ($andmed as $isik):?>
        <tr>
            <td><?= htmlspecialchars($isik['nimi']) ?></td>
            <td><?= htmlspecialchars($isik['sugu']) ?></td>
            <td><?= $isik['palk'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Statistika palkadest</h3>
<table class="statistika">
    <tr><th>Kirjeldus</th><th>Väärtus €</th></tr>
    <tr><td>Meeste keskmine palk</td><td><?= $meesteKeskmine ?></td></tr>
    <tr><td>Naiste keskmine palk</td><td><?= $naisteKeskmine ?></td></tr>
    <tr><td>Kõrgeim mees palk</td><td><?= $meesteMax ?></td></tr>
    <tr><td>Kõrgeim naine palk</td><td><?= $naisteMax ?></td></tr>
    <tr>
        <td colspan="2">
            <?php
            if ($meesteKeskmine > $naisteKeskmine) {
                echo "<span style='color:red;'>Mehed keskmiselt teenivad rohkem kui naised!</span>";
            } elseif ($naisteKeskmine > $meesteKeskmine) {
                echo "<span style='color:red;'>Naised keskmiselt teenivad rohkem kui mehed!</span>";
            } else {
                echo "<span style='color:green;'>Keskmised palgad on võrdsed.</span>";
            }
            ?>
        </td>
    </tr>
</table>
