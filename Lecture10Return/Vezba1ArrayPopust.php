<?php


    function izracunajPopust($cena){
        return $cena * 0.1;
    }

    $brojevi = [250, 330, 1000, 2000, 5000];
    $popusti = [];

    foreach($brojevi as $broj){
        $izracunatPopust = izracunajPopust($broj);
        array_push($popusti, $izracunatPopust);
    }

    $ukupanPopust = array_sum($popusti);
    echo "Ukupan popust je: $ukupanPopust dinara";


        
