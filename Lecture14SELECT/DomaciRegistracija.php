<?php

    $baza = mysqli_connect("localhost", "root", "", "web_shop");

    if(mysqli_connect_errno())
    {
        die ("Desila se greska prilikom konektovanja na bazu podataka.");
    }

    $email = $_POST["email"];
    $sifra = $_POST["sifra"];

    if(!isset($email) || empty($email))
    {
        die ("Podatak ne postoji, unesite email!");
    }

    if(!isset($sifra) || empty($sifra))
    {
        die ("Podatak ne postoji, unesite sifru!");
    }



    $query = "INSERT INTO korisnici (email, sifra) VALUES ('$email', '$sifra')";

    $upis = mysqli_query($baza, $query);