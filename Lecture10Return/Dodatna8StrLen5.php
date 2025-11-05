<?php

    function duzinaImena(){
        $nizImena = ["Marko", "Viktor", "Ivana", "Anaaa"];
        $brojac = 0;

        foreach ($nizImena as $ime){
            $brojSlova = strlen($ime);

            if($brojSlova == 5){
                echo $ime . "<br>";
                $brojac++;
            }
        }
    }

    duzinaImena();