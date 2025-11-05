<?php

    function duzinaStringa(){
        $niz = ["Marko", "Jak", "Slovenija", "Meksiko", "Evropa", "Sve", "Nema"];
        $brojac = 0;

        foreach($niz as $string){
            $duzinaStringa = strlen($string);

            if($duzinaStringa > 5){
                echo $duzinaStringa . "<br>";
                $brojac++;
            }


        }
    }

    duzinaStringa();