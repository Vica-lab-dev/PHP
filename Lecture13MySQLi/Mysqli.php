<?php

    //1. host-lokacija sql
    //2. usetname -root
    //3. password - "" ako nema
    //4. db_name ime baze podataka
    $baza = mysqli_connect("localhost", "root", "","prvi_cas");

    if(mysqli_connect_errno())
    {
        die ("Desila se greska prilikom konektovanja na bazu podataka.");
    }
    // procedural programming
    //mysqli_query($baza, "INSERT INTO korisnici (email, lozinka, datum_rodjenja) VALUES ('test2@gmail.com', 'lozinka', '1993-02-02')");

    //OOP - Object Oriented Programming

    $ime = "Crveni krompir";
    $opis = "Crveni krompir najboljeg kvaliteta";
    $cena = 150;
    $datumNabavke = "2023-01-01";
    $kolicina = 22;
    $baza->query("INSERT INTO proizvodi(ime, opis, cena, dan_nabavke, kolicina) VALUES('$ime','$opis', $cena, '$datumNabavke', $kolicina)");