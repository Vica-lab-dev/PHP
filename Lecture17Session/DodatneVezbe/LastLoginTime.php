<?php

    require_once "./Baza.php";

    if(!isset($_POST['email']) || empty($_POST['email']))
    {
        die("Email nije prosledjen!");
    }

    if(!isset($_POST['sifra']) || empty($_POST['sifra']))
    {
        die("Sifra nije prosledjena!");
    }

    $email = $_POST['email'];
    $sifra = $_POST['sifra'];

    function lastLoginTime()
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }

        $_SESSION["lastLoginTime"] = date("H:i:s");
        echo "Poslednje logovanje se desilo u: ".$_SESSION["lastLoginTime"];
    }



    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

    $korisnik = $rezultat->fetch_assoc();

    if($rezultat->num_rows > 0)
    {
        $verifikovanaSifra = password_verify($sifra, $korisnik["sifra"]);
        if($verifikovanaSifra)
        {
            lastLoginTime();
        }

        else
        {
            echo "Sifra nije ispravna!";
        }
    }

    else
    {
        echo "Korisnik ne postoji u bazi podataka!";
    }




