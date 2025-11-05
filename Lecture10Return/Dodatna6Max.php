<?php

    function najveciBroj(){
        $niz = [124, 235, 784, 12, 456, 476, 4733];

        foreach($niz as $broj){
            if ($broj == max($niz)){
                echo $broj;
            }
        }

        return $broj;
    }

    najveciBroj();