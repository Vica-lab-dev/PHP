<?php

    require_once "./Baza.php";

    $rezultat= $baza->query("SELECT * FROM proizvodi");

    $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }


    $rezultat= $baza->query("SELECT * FROM narudzbine");
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

    <?php if(isset($_SESSION['ulogovan'])): ?>
        <a href="Proizvodi.php">Glavna</a>
        <a href="./Logout.php">Logout</a>
        <a href="./MojaKorpa.php">Korpa</a>

    <?php else: ?>
        <a href="Proizvodi.php">Glavna</a>
        <a href="Login.html">Login</a>
        <a href="./MojaKorpa.php">Korpa</a>

    <?php endif; ?>

    <?php foreach ($proizvodi as $proizvod):  ?>
        <h1><?=  $proizvod["ime"] ?></h1>
        <p>Opis:<?= $proizvod["opis"] ?></p>
        <p>Cena:<?= $proizvod["cena"] ?></p>
        <p>Kolicina:<?= $proizvod["kolicina"] ?></p>

        <?php foreach($narudzbine as $narudzbina):?>
            <?php if($narudzbina['id_proizvoda'] == $proizvod["id"]): ?>
                <?php $proizvod['kolicina'] = $proizvod['kolicina'] - $narudzbina['kolicina'] ?>
                <?php continue; ?>
            <?php endif; ?>

        <?php endforeach; ?>

        <p>Na stanju: <?= $proizvod['kolicina']?></p>

        <a href="Permalink.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>
    <?php endforeach; ?>
</body>
</html>