<?php

function deljiviSaTri(){
    $brojac = 0;

    $niz = [ 999, 333, 10, 9, 22, 45, 36];

    foreach($niz as $broj){
        $rezultat = $broj % 3;

        if($rezultat == 0){
            echo $broj;
            $brojac++;
        }
    }
    
}

deljiviSaTri();