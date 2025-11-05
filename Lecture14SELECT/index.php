<?php

    require_once "baza.php";

    $rezultat = $baza->query("SELECT * FROM korisnici");



    if($rezultat->num_rows > 0)
    {
        echo "Ukupno smo nasli korisnika: ".$rezultat->num_rows;

        $korisnici = $rezultat->fetch_all(MYSQLI_ASSOC);
        //fetch_all -> vrati mi sve korisnike
        //MYSQLI_ASSOC -> vrati mi kao assoc aray ["email" => "toma@gmail.com"]

        foreach($korisnici as $korisnik)
        {
            echo $korisnik['email'];
        }
    }

    else
    {
        echo "Nismo nasli nijednog korisnika";
    }