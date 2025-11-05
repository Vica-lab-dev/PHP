<?php

    

    function dostava($iznosPaketa, $gradZaDostavu){
        $iznosDostave = 0;

        $nizGradova = [
                "Subotica" => 220,
                "Pancevo" => 10,
                "Sarajevo" => 292,
                "Split" => 799
         ];

        $gradPostoji = array_key_exists($gradZaDostavu, $nizGradova);
        
        if($gradPostoji){

            $rastojanje = $nizGradova[$gradZaDostavu];

              if($rastojanje <= 100){
                $iznosDostave = 200;
            }

            else if($rastojanje > 100 && $rastojanje <= 200){
                $iznosDostave = 350;
            }

            else{
                $iznosDostave = 500;
            }

            echo $iznosDostave . "<br>";
            
    
        }

        else{
            $iznosDostave = null;
        }

        return $iznosDostave;

    }

    dostava(2000, "Subotica");
    dostava(2000, "Pancevo");
    dostava(2000, "Sarajevo");
    dostava(2000, "Split");





    