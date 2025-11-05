<?php

    require_once "./Baza.php";

    if(!isset($_POST['email']) || empty($_POST['email']))
    {
        die("Email nije unet!");
    }

    if(!isset($_POST['sifra']) || empty($_POST['sifra']))
    {
        die("Sifra nije uneta!");
    }

    $email = $_POST['email'];
    $sifra = $_POST['sifra'];

    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email='$email' ");

    $korisnik = $rezultat->fetch_assoc();



    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    if($rezultat->num_rows > 0)
    {
        $verifikovanaSifra = password_verify($sifra, $korisnik['sifra']);

        if($verifikovanaSifra)
        {
            $_SESSION['ulogovan'] = true;
            $_SESSION['user-id'] = $korisnik['id'];
            header("Location:./Proizvodi.php");
        }

        else
        {
            die("Sifra nije ispravna!");
        }
    }

    else
    {
        die("Korisnik ne postoji u bazi podataka!");
    }