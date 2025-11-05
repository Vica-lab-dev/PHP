<?php
    $godine = 18;
    $kazne = True;

    if($godine >= 18){
        if($kazne == false){
            echo "Mozete polagati za automobil.";
        }
        else{
            echo "Imate kazne";
        }
    }

    else {
        echo "Nemate 18 godina.";
    }

    if($godine >= 18 && $kazne == false){
        echo "Mozete polagati";
    }


?>