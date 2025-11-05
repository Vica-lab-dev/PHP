<?php

    require_once "./Baza.php";

    $idProizvoda = $_GET['id'];

    $rezultat = $baza->query("SELECT * FROM proizvodi WHERE id = '$idProizvoda'");

    if($rezultat->num_rows == 0)
    {
        die ("Proizvod ne postoji u bazi podataka.");
    }

    $proizvodi =$rezultat->fetch_all(MYSQLI_ASSOC);


    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    $narudzbine = $baza->query("SELECT * FROM narudzbine");
    $narudzbenica = $narudzbine->fetch_all(MYSQLI_ASSOC);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php foreach($proizvodi as $proizvod):  ?>
        <h1><?= $proizvod['ime'] ?></h1>
        <p>Opis: <?= $proizvod['opis'] ?></p>
        <p>Cena: <?= $proizvod['cena'] ?></p>
        <p>Kolicina: <?= $proizvod['kolicina'] ?></p>
    <?php endforeach; ?>

    <?php if(isset($_SESSION['ulogovan'])): ?>
        <form action="Korpa.php" method="POST">
            <input type="number" name="kolicina" placeholder="Unesite kolicinu proizvoda">
            <input type="hidden" name="id_proizvoda" value="<?= $proizvod['id'] ?>">
            <button>Dodaj u korpu</button>
        </form>
    <?php else: ?>
        <a href="./Login.html"><button>Uloguj se da dodas u korpu</button></a>

    <?php endif; ?>
</body>
</html>