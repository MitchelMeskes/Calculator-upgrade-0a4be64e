<?php

echo "Welke operatie wil je uitvoeren? (+,-,%,*)\n";
$uitvoering = readline();
if ($uitvoering === '+' || $uitvoering === '-' || $uitvoering === '%' || $uitvoering === '*' ){
}
    else {
    echo "Alleen +,-,%,*!";
    exit;
    }
echo "Eerste getal?\n";
$cijfer1 = readline();
if (is_numeric($cijfer1));
    else {
    echo "Alleen nummer's!";
    exit;
    }
echo "Tweede getal?\n";
$cijfer2 = readline();
if (is_numeric($cijfer2));
    else {
    echo "Alleen nummer's!";
    exit;
    }

echo "Uw rekensom: $cijfer1 $uitvoering $cijfer2" . PHP_EOL;

if ($uitvoering === '+') {
    $uitkomst = $cijfer1 + $cijfer2;
}
elseif ($uitvoering === '-'){
    $uitkomst = $cijfer1 - $cijfer2;
}
elseif ($uitvoering === '%'){
    $uitkomst = $cijfer1 % $cijfer2;
}
elseif ($uitvoering === '*'){
$uitkomst = $cijfer1 * $cijfer2;
}


echo "uitkomst: $uitkomst"


?>