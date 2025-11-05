<?php

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    if(!isset($_SESSION["ulogovan"]))
    {
        die("Morate biti ulogovani da biste videli ovu stranicu");
    }

    require_once './Baza.php';

    $userId = $_SESSION["user-id"];


    $rezultat = $baza->query("SELECT narudzbine.kolicina, narudzbine.cena, proizvodi.ime
    FROM narudzbine 
    INNER JOIN proizvodi ON proizvodi.id = narudzbine.id_proizvoda 
    WHERE narudzbine.id_korisnika = '$userId'");
    $narudzbine = $rezultat->fetch_all(MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php if($rezultat->num_rows == 0): ?>
    <h1>Nemate nijedan proizvod u korpi!</h1>
    <?php else:  ?>
        <?php foreach($narudzbine as $narudzbina): ?>
            <div>
                <p>Proizvod: <?= $narudzbina['ime'] ?></p>
                <p>Kolicina: <?= $narudzbina['kolicina'] ?></p>
                <p>Cena: <?= $narudzbina['cena'] ?></p>
            </div>
        <?php endforeach; ?>

    <?php endif; ?>

</body>
</html>