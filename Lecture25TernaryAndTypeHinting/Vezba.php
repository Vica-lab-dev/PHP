<?php

    $age = 22;
    $name = "Vica";

    echo  $name === "Vica" && $age >= 18 ? "Dobrodosao nazad!" : "Niste dobrodosli!";

    // $cityName = "London";

    /*
    if(isset($_GET["city"]))
    {
        $cityName = $_GET["city"];
    }

    echo  $cityName;
    */

    $cityName  = $_GET['city'] ?? "London"; // ?? Proverava da li je podatak "siguran" / Setovan - NUll coalescing Oprtr
    echo $cityName;


    $countryName = $_GET['country'] ?? "England";
    echo "Country is $countryName, city is $cityName.";