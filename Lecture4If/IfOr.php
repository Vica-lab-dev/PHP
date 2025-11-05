<?php
    $ime = "Marko";

    if($ime == "Viktor"){
        echo "Dobrodosao";
    }

    else if ($ime == "Petar"){
        echo "Dobrodosao";
    }

    else{
        echo "Niste Petar ili Viktor";
    }

    //Isto ali krace

    if($ime == "Viktor" || $ime == "Petar"){
        echo "Dobrodosao";
    }

    else{
        echo "Niste Viktor niti Petar";
    }


?>