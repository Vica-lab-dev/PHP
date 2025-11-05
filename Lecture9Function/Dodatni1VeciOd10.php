<?php


function nizBrojeva (){

    $brojevi = [1, 12, 32, 4, 2, 56, 43];
    $brojac = 0;

    foreach ($brojevi as $broj){
        if ($broj > 10){
            echo $broj;
            $brojac++;
        }
    }
}

nizBrojeva();

