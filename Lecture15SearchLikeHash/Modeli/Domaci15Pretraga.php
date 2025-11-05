<?php

    $baza = mysqli_connect("localhost", "root", "", "web_shop");

    if(mysqli_connect_errno())
    {
        die ("Nastao je problem sa konekcijom na bazu podataka!");
    }

    $pretraga = $_GET['pretraga'];

    if(!isset($pretraga) || empty($pretraga))
    {
        die("Niste uneli nista u pretragu!");
    }



    $rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$pretraga%' OR opis LIKE '%$pretraga%' ");

        if ($rezultat->num_rows > 0)
        {
            $proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);
            foreach($proizvodi as $proizvod)
            {
                echo $proizvod["ime"] ;
                echo $proizvod["opis"] . "<br>";
            }

        }
        else
        {
            echo "Proizvod ne postoji u bazi podataka!";
        }




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
</body>
    <?php foreach($proizvodi as $proizvod): ?>
        <div>
            <h1><?= $proizvod['ime'] ?></h1>
            <p><?= $proizvod['opis'] ?></p>
            <p><?= $proizvod['cena'] ?></p>
            <p><?= $proizvod['kolicina'] ?></p>
        </div>
    <?php endforeach; ?>


</body>
</html>
