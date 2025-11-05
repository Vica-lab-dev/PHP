<?php

    $baza = mysqli_connect("localhost", "root", "", "web_shop");

    if(mysqli_connect_errno())
    {
        die ("Desila se greska prilikom konektovanja na bazu podataka.");
    }

    $email = $_POST["email"];
    $sifra = password_hash($_POST["sifra"], PASSWORD_BCRYPT);

    if(!isset($email) || empty($email))
    {
        die ("Podatak ne postoji, unesite email!");
    }

    if(!isset($sifra) || empty($sifra))
    {
        die ("Podatak ne postoji, unesite sifru!");
    }

/**
 * 1.Uraditi query da pronadjemo korisnika sa odredjenim $email
 * 2.Proveriti da li smo dobili nazad neke rezultate (_rows?)
 */

    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email = ('$email')");
    // Ako var_dump vrati num_rows 1 ili vise, korisnik postoji.

    if($rezultat->num_rows >= 1)
    {
        die ("Vec postoji korisnik sa ovom email adresom.");
    }

    else // Ako je rezultat 0
    {
        echo "Uspesno ste se registrovali";
        $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email', '$sifra')");
    }


