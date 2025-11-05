<?php
    $proveraImena = isset($_POST["name"]);
    if (!$proveraImena){
        die("Niste uneli ime, unesite ga!");
    }

    $ime = strtolower(trim($_POST["name"]));

    $duzinaImena = strlen($_POST["name"]);
    if ($duzinaImena < 3){
        die("Ime ne sme imati manje od 3 karaktera!");
    }

    switch($ime){
    case "toma":
        die("Uspesno ste uneli korisnika!");

    case "petar":
        die ("Uspesno ste uneli korisnika");
        
    case "marko":
        die ("Uspesno ste uneli korisnika");
    case "":
        die("Niste uneli ime korisnika! Molim Vas, unesite ga!");

    default:
        die ("Uneli ste korisnika koji nije u bazi!");
    }










?>

    

   










?>