<?php

$title = "Postani programer";

$array = ["Glavna", "O nama", "Kontakt"];

?>

<!DOCTYPE html>

<html lang="en">

<head>
    
    <title> <?= $title; ?></title>
</head>

<body>
    <h1> <?= $title; ?></h1>

    <nav>

        <a> <?= $array[0]; ?> </a>
        <a> <?= $array[1]; ?> </a>
        <a> <?= $array[2]; ?> </a>

    </nav>

</body>

</html>