<?php

    require_once "models/images.php";

    $image = new Images();

    $imageSize = $_FILES['profileImage']['size'];
    if(!$image->isValidSize($imageSize))
    {
        die("Slika je prevelika!");
    }

    $imageType = pathinfo($_FILES['profileImage']['name'], PATHINFO_EXTENSION);
    if(!$image->isValidExtension($imageType))
    {
        die("Nije dobra ekstenzija slike!");
    }

    list($width, $height) = getimagesize($_FILES['profileImage']['tmp_name']);
    if(!$image->isValidProportion($width, $height))
    {
        die("Slika je presiroka ili previsoka");
    }

    $randomName = $image->generateRandomName('jpg');
    var_dump($randomName);

    if (!is_dir('./uploads')) {
        mkdir('./uploads', 0755, true);
    }
    $image->upload($_FILES['profileImage']['tmp_name'], $randomName, "uploads");