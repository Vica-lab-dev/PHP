<?php


    require_once "./Baza.php";

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    if(!isset($_POST['id_proizvoda']) || empty($_POST['id_proizvoda']))
    {
        die("Ne postoji ID proizvoda!");
    }

    if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
    {
        die("Niste uneli kolcinu!");
    }

    $idProizvoda = $_POST['id_proizvoda'];
    $kolicina = $_POST['kolicina'];
    $idKorisnika = $_SESSION['user-id'];

    $rezultat = $baza->query("SELECT cena FROM proizvodi WHERE id = '$idProizvoda'");

    $redIzBaze = $rezultat->fetch_assoc();

    $cena = $redIzBaze['cena'];

    $cena = $cena * $kolicina;

    $idProizvoda = $baza->real_escape_string($idProizvoda);
    $kolicina = $baza->real_escape_string($kolicina);
    $idKorisnika = $baza->real_escape_string($idKorisnika);
    $cena = $baza->real_escape_string($cena);

    $baza->query("INSERT INTO narudzbine(id_proizvoda, id_korisnika, cena, kolicina) 
    VALUES($idProizvoda, $idKorisnika, $cena, $kolicina)");

    $redProizvod = $baza->query("SELECT * FROM proizvodi");
    $proizvodi = $redProizvod->fetch_all(MYSQLI_ASSOC);
    foreach($proizvodi as $proizvod)
    {
        $ime = $proizvod['ime'];
        $updated = $proizvod['kolicina'] - $kolicina;
        $baza->query("UPDATE proizvodi SET kolicina = '$updated' WHERE ime = '$ime'");
    }