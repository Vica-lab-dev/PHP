<?php

    function pronadjiVelikoSlovo(){
        $niz = ["Marko", "jak", "Slon", "Dan", "noc"];
        $brojac = 0;

        foreach($niz as $string){
            $prvoSlovo = $string[0];

            if($string == ctype_upper($prvoSlovo)){
                echo $string;
                $brojac++;
            }
        }
    }

    pronadjiVelikoSlovo();