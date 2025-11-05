<?php

    function temperature(){
        $nizTemperatura = [-1, 22, 34, 13, -5, 0, 43, 72, 26, -2];
        $brojac = 0;

        foreach($nizTemperatura as $temperatura){
            $maxTemperatura = max($nizTemperatura);

            if($temperatura == $maxTemperatura){
                echo $maxTemperatura;
                $brojac++;
            }
        }
    }

    temperature();