<?php


    $baza = mysqli_connect("localhost", "root", "", "web_shop");

    if(mysqli_connect_errno())
    {
        die("Nastao je problem sa konekcijom na bazu!");
    }

    $ime_proizvoda = $_GET['ime'];
    $opis = $_GET['opis'];
    $cena = $_GET['cena'];
    $slika = $_GET['slika'];
    $kolicina = $_GET['kolicina'];

    if(!isset($ime_proizvoda) || empty($ime_proizvoda))
    {
        echo "Niste uneli ime proizvoda!";
    }

    if(!isset($opis) || empty($opis))
    {
        echo "Niste uneli opis proizvoda!";
    }

    if(!isset($cena) || empty($cena))
    {
        echo "Niste uneli cenu proizvoda!";
    }

    if(!isset($slika)  || empty($slika))
    {
        echo "Niste uneli sliku proizvoda!";
    }

    if(!isset($kolicina) || empty($kolicina))
    {
        echo "Niste uneli kolicinu proizvoda!";
    }


    $rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime = '$ime_proizvoda'");
    if($rezultat->num_rows >= 1)
    {
        echo "Proizvod vec postoji u bazi";
    }

    else
    {
        $baza->query("INSERT INTO proizvodi(ime, opis, cena, slika, kolicina)  
        VALUES('$ime_proizvoda', '$opis', $cena, '$slika', $kolicina)");
    }