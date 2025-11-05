<?php


    function izracunaj(){

        $niz = [24, 23, 21, 65, 89, 35, 6, 9];
        $zbir = 0;

        foreach($niz as $broj){
        

            
            if($broj % 2 == 0){
                $zbir += $broj; 
                
            }

            
        }
        echo $zbir;
        
    }

    izracunaj();