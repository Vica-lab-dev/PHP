<?php

    function provera(){
        $nizOcena = [
            "Viktor" => 3,
            "Ana" => 5,
            "Marko" => 8,
            "Ivana" => 10,
            "Bosko" => 4
        ];

        $brojac = 0;

        foreach($nizOcena as $ime => $ocena){
            if($ocena <= 5){
                echo $ocena;
                $brojac++;
            }
        }
    }

    provera();