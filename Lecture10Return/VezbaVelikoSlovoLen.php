<?php

    function velikoSlovoLen(){
        $niz = ["Suncica", "Ana", "Viktor", "Ljubav", "Veza"];
        foreach($niz as $ime){
            $duzinaImena = strlen($ime);
            $prvoVelikoSlovo = ctype_upper($ime[0]);
            if($duzinaImena <= 6 && $ime == $prvoVelikoSlovo){
                echo $ime . "<br>";
            }
        }
    }

    velikoSlovoLen();