<?php

    function provera($broj){
        if($broj == 0){
            echo "Broj je nula";
        }

        else if($broj > 0){
            echo "Broj je pozitivan.";
        }

        else{
            echo "Broj je negativan.";
        }

        return $broj;
    }

    provera(2222);