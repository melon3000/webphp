<h3>Ajafunktsioonid</h3>

<div class="flex-container-ajaf">

    <?php
    // --- БЛОК 1 ---
    echo "<div class='flex-row'>";
    date_default_timezone_set('Europe/Tallinn');
    echo "<a href='https://www.php.net/manual/en/timezones.php'>Timezone list</a><br>";
    echo "time() - aeg sekundides - " . time() . "<br>";
    echo "date() - " . date('d.m.Y H:i:s') . "<br>";
    echo "</div>";

    // --- БЛОК 2 ---
    echo "<div class='flex-row'>";
    echo "<pre>
d - päev 01..31
m - kuu 1..12
Y - aasta - 2025++
G - 24h formaat
i - minutid 0..59
s - sekundid 0..59
</pre>";
    echo "</div>";

    // --- БЛОК 3 ---
    echo "<div class='flex-row'>";
    echo "<h4>Tehted Kuupäevaga</h4>";
    echo "+1 min = " . date("d.m.Y H:i:s", time() + 60) . "<br>";
    echo "+1 tund = " . date("d.m.Y H:i:s", time() + 3600) . "<br>";
    echo "+1 päev = " . date("d.m.Y H:i:s", time() + 86400) . "<br>";
    echo "</div>";

    // --- БЛОК 4 ---
    echo "<div class='flex-row'>";
    echo "<h4>Kuupäeva genereerimine</h4>";
    $synd = mktime(8, 43, 41, 5, 22, 2008);
    echo "Minu sünnipäev on: " . date("d.m.Y H:i:s", $synd);
    echo "</div>";

    // --- БЛОК 5 ---
    echo "<div class='flex-row'>";
    echo "Massiivi abil näidata tänase kuu nimega<br>";
    $kuud = [
        1 => 'Jaanuar', 'Veebruar', 'Märts', 'April', 'Mai',
        'Juuni', 'Juuli', 'August', 'September', 'Oktober',
        'November', 'December'
    ];
    $aasta = date("Y");
    $paev = date("d");
    $kuu = $kuud[date("n")];
    echo "Täna on $paev $kuu $aasta";
    echo "</div>";
    ?>

</div>
