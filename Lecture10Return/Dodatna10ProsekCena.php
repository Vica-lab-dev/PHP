<?php

    function prosekCena(){
        $nizCena = [
            "Kompjuter" => 460,
            "Monitor" => 180,
            "Mis" => 3,
            "Tastatura" => 13,
            "Zvucnik" => 28
        ];

        foreach($nizCena as $proizvod => $cena){
            $ukupnaCena = array_sum($nizCena);
            $brojProizvoda = count($nizCena);
            $prosek = $ukupnaCena / $brojProizvoda; 
            return $prosek;
        }

    }

    $prosecnaCena = prosekCena();
    echo $prosecnaCena;