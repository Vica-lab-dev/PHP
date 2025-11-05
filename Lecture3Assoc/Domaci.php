<?php

$title = "Postani programer";

$array = ["Glavna", "O nama", "Kontakt"];

$trenutnaGodina = date ("Y");

?>

<!DOCTYPE html>

<html lang="en">

<head>
    
    <title> <?= $title; ?></title>
</head>

<body>
    <h1> <?= $title; ?></h1>

    <nav>

        <a target=_blank href="https://www.youtube.com/"> <?= $array[0]; ?> </a>
        <a target=_blank href="https://www.youtube.com/watch?v=Sfg6-4mBs6Y&list=RDSfg6-4mBs6Y&start_radio=1"> <?= $array[1]; ?> </a>
        <a target=_blank href="https://www.facebook.com/profile.php?id=61552076672636"> <?= $array[2]; ?> </a>

    </nav>

    <footer>
        <p>Copyright &copy; mojSajt <?= $trenutnaGodina; ?> </p>
    </footer>

</body>

</html>