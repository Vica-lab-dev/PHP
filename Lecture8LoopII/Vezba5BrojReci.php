<?php

    $niz = [
        "Apostrof", "Markaa", "lek", "Cvettt", "Strah"
    ];

    $brojReci = 0;

    foreach($niz as $rec){
        $duzinaReci = strlen($rec);
        if($duzinaReci > 5){
            $brojReci++;
        }
    };

    echo "Ukupno ima $brojReci reci u nizu sa vise od pet slova.";

