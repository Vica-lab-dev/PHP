<?php

    require_once "Product.php";

    $lokvanj = new Product("Lokvanj", "Zabin Lokvanj", 100.99, "lokvanj.jpg", 3);
    $lokvanj->save();