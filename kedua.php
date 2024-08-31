<?php

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * pow($jari, 3);
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}


function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

$jari = 45;
$tinggi = 100;

$keliling = kelilingLingkaran($jari);
$volume_bola = volumeBola($jari);
$volume_tabung = volumeTabung($jari, $tinggi);
$volume_kerucut = volumeKerucut($jari, $tinggi);

echo "Keliling lingkaran dengan jari-jari {$jari} adalah {$keliling}\n";
echo "Volume bola dengan jari-jari {$jari} adalah {$volume_bola}\n";
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_tabung}\n";
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_kerucut}\n";

?>
