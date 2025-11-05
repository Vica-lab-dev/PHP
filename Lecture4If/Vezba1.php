<?php
    $automobili = [
        "Golf 1", "Golf 2", "Golf 3"
    ];

    if(in_array("Golf 2", $automobili)) {
        echo "Nasli smo najbolja kola";
    }

    $pronadjenGolf = in_array("Golf 2", $automobili);
    if ($pronadjenGolf){
        echo "Nasli smo najbolji golf";
    }

?>
