<?php

function proizvodi(){


    $brojac = 0;

    $niz = [
        "kompjuter" => 10000,
        "mis" => 10,
        "tastatura" => 49,
        "zvucnik" => 500,
    ];

    foreach($niz as $proizvod => $cena){

        if($cena > 50){
            echo $cena;
            $brojac++;
        }
    }
}

proizvodi();