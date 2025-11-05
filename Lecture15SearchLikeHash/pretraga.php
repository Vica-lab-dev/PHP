<?php
    $baza = mysqli_connect("localhost", "root", "", "web_shop");

    if(mysqli_connect_errno())
    {
        die("Postoji problem sa konekcijom u bazu!");
    }



    if(!isset($_GET['email']) || empty($_GET['email']))
    {
        die("Niste uneli email!");
    }

    $email = $_GET['email'];


    //Daj mi sve korisnike koi imaju email adresu koju je korisnik uneo
    //rezultat nase pretrage iz baze stavljamo u varijablu rezultat
    $rezultat = $baza->query("SELECT email FROM korisnici WHERE email LIKE ('%$email%')");

    if($rezultat->num_rows >= 1)
    {
        echo "Pronasli smo $rezultat->num_rows korisnika sa tim emailom:";

    }

    else
    {
        echo "Nismo pronasli korisnika sa tim emailom";
    }