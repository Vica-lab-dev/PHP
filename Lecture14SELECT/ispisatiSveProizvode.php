<?php

    require_once "baza.php";

    $rezultat = $baza->query("SELECT * FROM proizvodi");

    $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

    if($rezultat->num_rows<1){
        echo "Nema proizvoda.";
    }

    foreach($proizvodi as $proizvod)
    {
        echo $proizvod['ime_proizvoda'];
    }


