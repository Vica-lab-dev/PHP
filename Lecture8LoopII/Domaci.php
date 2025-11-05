<?php

    $array = [
        "Glavna" => "index.php",
        "O nama" => "about_us.php",
        "Kontakt" => "contact_us.php",
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php foreach($array as $informacije => $informacija):   ?>
        <nav>
            <a href="<?= $informacija ?>"> <?= $informacije ?> </a>
        </nav>
    <?php endforeach; ?>
    
</body>
</html>