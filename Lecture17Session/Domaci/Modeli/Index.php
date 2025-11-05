<?php

    require_once "../Modeli/Baza.php";
    $rezultat = $baza->query("SELECT * FROM proizvodi");

    $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }








?>

<!doctype html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Glavna</title>

        </head>
        <body>


        <?php if(isset($_SESSION['ulogovan'])): ?>

            <a href="./Index.php">Glavna</a>
            <a href="./Logout.php">Logout</a>


        <?php else: ?>
            <a href="./Index.php">Glavna</a>
            <a href="../Login.html">Login</a>
        <?php endif; ?>


        <?php foreach ($proizvodi as $proizvod): ?>
            <div>
                <h1><?= $proizvod['ime_proizvoda'] ?></h1>
                <p><?= $proizvod['opis'] ?></p>
                <p>Cena proizvoda:<?= $proizvod['cena'] ?></p>
                <p>Na stanju: <?= $proizvod['kolicina'] ?></p>
                <?php if($proizvod['kolicina'] >= 1): ?>

                    <p>Ima na stanju</p>

                <?php else: ?>
                    <p>Nema na stanju</p>

                <?php endif; ?>

            </div>
        <?php endforeach; ?>

        </body>
</html>