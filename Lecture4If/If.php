<?php

    $ime = "Viktor";
    $godine = 27;
    $visina = 1.87;

    //Contidional stateement - if

    //Ako je vrednost Ime Viktor
    if($ime == "Viktor") {
        echo "Pozdrav Viktore!";
    } 

    if( $godine == 18) {
        echo "Imate 18 godina.";
    }
    else if($godine == 27) {
        echo "Imas 27 godina!;";
    }

    if($visina < 1.70) {
        echo "Niski ste!";
    }

    else{
        echo "Visoki ste!";
    }



    $godinaRodjenja = 1968;


    if ($godinaRodjenja == 1997){
        echo "Imate ";
    }

    else if($godinaRodjenja == 1999){
        echo "Imate 26 godina";
    }

    else if($godinaRodjenja == 1995){
        echo "Imate 30 godina!";
    }

    else{
        $trenutnaGodina = date("Y") - $godinaRodjenja;
        echo "Imate $trenutnaGodina godina!";
    }

?>