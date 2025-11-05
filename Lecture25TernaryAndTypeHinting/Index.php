<?php

    declare(strict_types=1);


    $name = "Vica";

    if($name === "Vica")
    {
        echo "Hello Vica";
    }
    else{
        echo "Nije Vica";
    }

    echo $name === "Vica" ? "Hello Vica" : "Nije Vica";

    function isLegalAge($age): bool
    {
       /* if($age >= 18)
        {
            return true;
        }
        return false;
       */
        return $age >= 18; // ? true : false; Moze i bez ovog dela, dovoljno je.
    }
