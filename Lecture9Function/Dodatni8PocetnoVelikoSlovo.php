<?php

function PrvoVelikoSlovo(){
    $niz = ["Marko", "janko", "zarko", "Stanko"];
    $brojac = 0;

    foreach($niz as $ime){
        
        $prvoSlovo = $ime[0];

        if($ime == ctype_upper($prvoSlovo)){
            echo $ime;
            $brojac++;
        }
    }
}

PrvoVelikoSlovo();