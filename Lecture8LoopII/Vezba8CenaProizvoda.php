<?php


$cenaProizvoda = [
    89, 100, 26, 73, 94, 100, 100, 100
];

$granica = 100;

$UkupnaCena = 0;

foreach($cenaProizvoda as $Cena){
    if($Cena >= $granica){
        $UkupnaCena += $Cena;
    }
}

echo $UkupnaCena;

