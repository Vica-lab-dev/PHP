<?php

    require_once "models/DB.php";
    $db = new DB();
    var_dump($db);


    $connection = mysqli_connect("localhost", "root", "", "php23");
    $data = $connection->query("SELECT * FROM images");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php foreach($data as $image): ?>
        <img src="uploads/<?= $image["image"] ?>">
    <?php endforeach; ?>
</body>
</html>
