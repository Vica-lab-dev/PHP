<?php

    function pdv($iznos){
        $ukupanIznos = $iznos + ($iznos * 0.2);
        return $ukupanIznos;
    }

    $nizCena = [230, 450, 432, 546, 600, 1000];
    $CenePDV = [];

    foreach($nizCena as $cena){
        $cenaSaPDV = pdv($cena);
        array_push($CenePDV, $cenaSaPDV);
        echo $cenaSaPDV . "<br>";
    }

    $ukupanPDV = array_sum($CenePDV);
    echo $ukupanPDV;



