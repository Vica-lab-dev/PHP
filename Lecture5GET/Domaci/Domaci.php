<?php

    $price = $_GET["price"];
    $products = $_GET["korpa"];

    if ($products == "Hrana"){
        $price += 50;
    }

    else if($products == "Oprema za racunare"){
        $price += 350;
    }

    if(isset($_GET["tax"])){
        $price = $price + ($price * 0.1);
    }

    echo $price;

    



?>
