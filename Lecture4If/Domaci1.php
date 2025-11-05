<?php
    $ime = "administrator";
    $lozinka = "mojasifrajesigurna";

    if ($ime == strtolower("Administrator") || $ime == strtoupper("Administrator") 
    
    && $lozinka == strtolower("mojaSifraJeSigurna") || $lozinka == strtoupper("mojaSifraJeSigurna")){
    
        echo "Dobrodosao, administratore!";
    }

    else{
        echo "Sifra nije ispravna!";
    }



?>