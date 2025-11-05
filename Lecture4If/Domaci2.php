<?php

    $trenutnoVreme = 04.00;

    if ($trenutnoVreme >= 05.00 && $trenutnoVreme <= 05.59 || 
        $trenutnoVreme >= 06.00 && $trenutnoVreme <= 06.59 ||
        $trenutnoVreme >= 07.00 && $trenutnoVreme <= 07.59 ||
        $trenutnoVreme >= 08.00 && $trenutnoVreme <= 08.59 ||
        $trenutnoVreme >= 09.00 && $trenutnoVreme <= 09.59 ||
        $trenutnoVreme >= 10.00 && $trenutnoVreme <= 10.59 ||
        $trenutnoVreme >= 11.00 && $trenutnoVreme <= 11.59) {
        echo "Trenutno su jutarnji casovi!";
    }

    elseif($trenutnoVreme >= 12.00 && $trenutnoVreme <= 12.59 ||
        $trenutnoVreme >= 13.00 && $trenutnoVreme <= 13.59 ||
        $trenutnoVreme >= 14.00 && $trenutnoVreme <= 14.59 ||
        $trenutnoVreme >= 15.00 && $trenutnoVreme <= 15.59 ||
        $trenutnoVreme >= 16.00 && $trenutnoVreme <= 16.59 ||
        $trenutnoVreme >= 17.00 && $trenutnoVreme <= 17.59 ||
        $trenutnoVreme >= 18.00 && $trenutnoVreme <= 18.59 ||
        $trenutnoVreme >= 19.00 && $trenutnoVreme <= 19.59){
        echo "Trenutno su popodnevni casovi!";
    }

    elseif($trenutnoVreme >= 20.00 && $trenutnoVreme <= 20.59 ||
        $trenutnoVreme >= 21.00 && $trenutnoVreme <= 21.59 ||
        $trenutnoVreme >= 22.00 && $trenutnoVreme <= 22.59 ||
        $trenutnoVreme >= 23.00 && $trenutnoVreme <= 23.59 ||
        $trenutnoVreme >= 00.00 && $trenutnoVreme <= 00.59 ||
        $trenutnoVreme >= 01.00 && $trenutnoVreme <= 01.59 ||
        $trenutnoVreme >= 02.00 && $trenutnoVreme <= 02.59 ||
        $trenutnoVreme >= 03.00 && $trenutnoVreme <= 03.59 ||
        $trenutnoVreme >= 04.00 && $trenutnoVreme <= 04.59){
        echo "Trenutno su nocni casovi!";
    }

    else{
        echo "Uneli ste neispravne casove!";
    }




?>