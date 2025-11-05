<?php

$array = [
    1, 2, 3, 4, 5, 6, 7
];

$zbir = 0;
$brojac = 0;

foreach($array as $broj){
    if($broj % 2 != 0){
        $zbir += $broj;
        $brojac++;
    }
}

    if($brojac > 0){
        $prosek = $zbir / $brojac;
    }

    else{
        echo "Nema neparnih brojeva.";
    }

    echo $prosek;