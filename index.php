<?php

$vardas = 'Karolis';
$pavarde = 'Vaiciulis';
$gimimoMetai = 1994;
$dabartiniaiMetai = 2023;

echo 'Aš esu ' . $vardas . ' ' . $pavarde . '. Man yra ' . ($dabartiniaiMetai - $gimimoMetai) . ' metai(ų).' . "\n";

//--------------------------------

$pirmasSkaicius = rand(0, 4);
$antrasskaicus = rand(0,4);

echo '<br>';
echo '<br>';

echo  round(max($pirmasSkaicius, $antrasskaicus) / min($pirmasSkaicius, $antrasskaicus), 2);

//---------------------------------

$pirmasKintamasis = rand(0, 25);
$antrasKintamasis = rand(0, 25);
$treciasKintamasis = rand(0, 25);

$sarasas = [$pirmasKintamasis, $antrasKintamasis, $treciasKintamasis];

sort($sarasas);

if ($length % 2 == 1) {
    $median = $sarasas[($length - 1) / 2];
} else {
    $middle1 = $sarasas[$length / 2];
    $middle2 = $sarasas[($length / 2) - 1];
    $median = ($middle1 + $middle2) / 2;
}

echo "Median: " . $median;

//-------------------------------

$krastine1 = rand(1,10);
$krastine2 = rand(1,10);
$krastine3 = rand(1,10);

//dvieju krastiniu suma turi buti didesne uz trecia krastine

if ($krastine1 + $krastine2 > $krastine3 && $krastine2 + $krastine3 > $krastine1 && $krastine3 + $krastine1 > $krastine2) {
    echo "It is possible to create a triangle with the given side lengths.";
} else {
    echo "It is not possible to create a triangle with the given side lengths.";
}

//-------------------------

$reiksme1 = rand(0, 2);
$reiksme2 = rand(0, 2);
$reiksme3 = rand(0, 2);

$nulis = 0;
$vienetas = 0;
$dvejetas = 0;

if ($reiksme1 === 0) {
    $nulis++;
}
if ($reiksme2 === 0) {
    $nulis++;
}
if ($reiksme3 === 0) {
    $nulis++;
}

if ($reiksme1 === 1) {
    $vienetas++;
}
if ($reiksme2 === 1) {
    $vienetas++;
}
if ($reiksme3 === 1) {
    $vienetas++;
}

if ($reiksme1 === 2) {
    $dvejetas++;
}
if ($reiksme2 === 2) {
    $dvejetas++;
}
if ($reiksme3 === 2) {
    $dvejetas++;
}

echo "Nuliu: $nulis, Vienetu: $vienetas, Dvejetu: $dvejetas";

//--------------------------


$skaicius = rand(1 ,6);
?>

<h3><?php echo $skaicius ?></h3>

<br>

<?php 

$pirmas = rand(-10, 10);
$antras = rand(-10, 10);
$trecias = rand(-10, 10);

$numbers = [$pirmas, $antras, $trecias];

$zalias = array_filter($numbers, function($num) {
    return $num < 0;
});

$raudonas = array_filter($numbers, function($num) {
    return $num === 0;
});

$melynas = array_filter($numbers, function($num) {
    return $num > 0;
});

echo "Zalias: ";
echo implode(', ', $zalias);

echo "Raudonas: ";
echo implode(', ', $raudonas);

echo "Melynas: ";
echo implode(', ', $melynas);
?>
<br>
<h2 style="background-color: green;"><?php echo implode(', ', $zalias) ?></h2>
<h2 style="background-color: red;"><?php echo implode(', ', $raudonas) ?></h2>
<h2 style="background-color: blue;"><?php echo implode(', ', $melynas) ?></h2>

<!-- =- -=- -= -->

<?php 

$zvakes = rand(5,3000);
$kaina = 0;

if($zvakes > 1000 && $zvakes < 2000) {
    $kaina = $zvakes - ($zvakes * 0.03);
} else if ($zvakes > 2000){
    $kaina = $zvakes - ($zvakes * 0.04);
}

echo "Zvakes: " . $zvakes . ", Kaina: " . $kaina;

echo '<br>';

$pirmaReiksme = rand(0, 100);
$antraReiksme = rand(0, 100);
$treciaReiksme = rand(0, 100);

$skaiciai = [$pirmaReiksme, $antraReiksme, $treciaReiksme];

$atmesti = [];

foreach ($skaiciai as $skaicius) {
    if ($skaicius > 10 && $skaicius < 90) {
        $atmesti[] = $skaicius;
    }
}

echo 'Pagrindinis' .array_sum($skaiciai) / count($skaiciai);

$sum = array_sum($atmesti);
$count = count($atmesti);

echo '<br>';


if ($count > 0) {
    $average = $sum / $count;
    echo "Atmetus vidurkis: " . $average;
} else {
    echo "No values in the array that meet the condition.";
}
//-------------------


$skaiciusTime = rand(0, 300);
$minTime = strtotime('00:00:00'); 
$maxTime = strtotime('23:59:59'); 

$randomTime = rand($minTime, $maxTime);

$randomTimeStringStart = date('H:i:s', $randomTime); 


$randomTime += $skaiciusTime;

$randomTimeString = date('H:i:s', $randomTime); 

echo 'Pries: ' .$randomTimeStringStart;
echo '<br>';
echo 'Po: ' .$randomTimeString;
echo '<br>';
echo 'Prideta sekundžių,'. $skaiciusTime;

//-------------------------------

$kintamasis1 = rand(1000, 9999);
$kintamasis2 = rand(1000, 9999);
$kintamasis3 = rand(1000, 9999);
$kintamasis4 = rand(1000, 9999);
$kintamasis5 = rand(1000, 9999);
$kintamasis6 = rand(1000, 9999);

if ($kintamasis2 < $kintamasis1) {
    $temp = $kintamasis2;
    $kintamasis2 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis3 < $kintamasis1) {
    $temp = $kintamasis3;
    $kintamasis3 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis4 < $kintamasis1) {
    $temp = $kintamasis4;
    $kintamasis4 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis5 < $kintamasis1) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis6 < $kintamasis1) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis1;
    $kintamasis1 = $temp;
}

if ($kintamasis3 < $kintamasis2) {
    $temp = $kintamasis3;
    $kintamasis3 = $kintamasis2;
    $kintamasis2 = $temp;
}

if ($kintamasis4 < $kintamasis2) {
    $temp = $kintamasis4;
    $kintamasis4 = $kintamasis2;
    $kintamasis2 = $temp;
}

if ($kintamasis5 < $kintamasis2) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis2;
    $kintamasis2 = $temp;
}

if ($kintamasis6 < $kintamasis2) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis2;
    $kintamasis2 = $temp;
}

if ($kintamasis4 < $kintamasis3) {
    $temp = $kintamasis4;
    $kintamasis4 = $kintamasis3;
    $kintamasis3 = $temp;
}

if ($kintamasis5 < $kintamasis3) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis3;
    $kintamasis3 = $temp;
}

if ($kintamasis6 < $kintamasis3) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis3;
    $kintamasis3 = $temp;
}

if ($kintamasis5 < $kintamasis4) {
    $temp = $kintamasis5;
    $kintamasis5 = $kintamasis4;
    $kintamasis4 = $temp;
}

if ($kintamasis6 < $kintamasis4) {
    $temp = $kintamasis6;
    $kintamasis6 = $kintamasis4;
    $kintamasis4 = $temp;
}

echo $kintamasis1 . ', ' . $kintamasis2 . ', ' . $kintamasis3 . ', ' . $kintamasis4 . ', ' . $kintamasis5 . ', ' . $kintamasis6;



