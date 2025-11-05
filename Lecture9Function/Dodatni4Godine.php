<?php

function nizGodina(){
    $brojac = 0;
    $godine = [1998, 1874, 2011, 2010, 987, 1957];

    foreach($godine as $godina){
        if($godina < 2000){
            echo $godina;
            $brojac++;
        }
    }
}

nizGodina();