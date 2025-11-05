<?php

function nizReci(){
    $niz = ["Marko", "Sara", "Jki", "Rzv"];
    $brojac = 0;

    foreach ($niz as $slovo){
        if (strpos($slovo, "a")){
            echo $slovo;
            $brojac++;
        }
    }
}


nizReci();