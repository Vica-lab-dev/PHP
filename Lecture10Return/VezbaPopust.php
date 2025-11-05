<?php


    function izracunajPopust($cena, $popust){
        $popust = $popust / 100; // 22 = 0.22
        return $cena * $popust;
    }

    $obracunatiPopust = izracunajPopust(1500, 22);
    echo $obracunatiPopust;

