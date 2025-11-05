<?php

//http://localhost/Cas5GET/Calculator.php?broj_1=123&broj_2=555
//Global variable - dostupna na svakoj stranici u svakom trenutku, sadrze podatke
//$_SERVER, $_GET, $_POST = asocc array
//var_dump($_GET);

$vrstaRacunice = $_GET["vrsta_racunice"];
$broj1 = $_GET["broj_1"];
$broj2 = $_GET["broj_2"];


if($vrstaRacunice == "Sabiranje"){
    //broj_1=123&broj_2=33&vrsta_racunice=Sabiranje
    echo $broj1 + $broj2;
}

else if ($vrstaRacunice == "Oduzimanje"){
    //broj_1=12&broj_2=5&vrsta_racunice=Oduzimanje
    echo $broj1 -$broj2;
}





?>