<?php

function ocene(){

    $brojac = 0;

    $nizOcena = [
       "Marko" => 3,
       "Ana" => 10,
       "Milan" => 4,
       "Darko" => 6,
    ];

    foreach($nizOcena as $osobe => $Ocene){
       echo $Ocene;
       $brojac++;
    }
}

ocene();