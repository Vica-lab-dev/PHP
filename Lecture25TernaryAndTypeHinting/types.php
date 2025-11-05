<?php

    declare(strict_types=1);
    function setBio(string $name, string $lastName, int $age): string
    {
        return "My name is $name and my last name is $lastName and I'm $age years old";
    }

    $message = setBio("Vica", "Maletkovic", 27);
    echo $message;
    // setName("123"); Ne radi