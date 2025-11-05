<?php

function temperatura(){

    $niz = [23, -1, 0, 4, -4, -24, 6];
    $brojac = 0;

    foreach($niz as $celzijus){
        if($celzijus > 0){
            echo $celzijus;
            $brojac++;
        }    
    }
}

temperatura();