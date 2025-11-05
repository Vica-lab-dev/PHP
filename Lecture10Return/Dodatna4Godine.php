<?php

    function provera(){
        $nizGodina = [1998, 2000, 2034, 1876, 1678, 1645];
        $brojac = 0;

        foreach($nizGodina as $godina){
            if($godina < 1990){
                echo $godina;
                $brojac++;
            }
        }
    }

    provera();