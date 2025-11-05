<?php


function cenaPDV($cena)
{

    if (!is_numeric($cena))
    {
        die("Broj mora biti numericka vrednost.");
    }

    $pdv = 0.22;

    if($cena < 1)
    {
        die ("Broj ne sme biti manji od 1.");
    }
    else
    {
        $racun = $cena * $pdv;
    }

    echo ("PDV iznosi $racun dinara.");

}

cenaPDV("Vica");