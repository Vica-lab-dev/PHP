<?php
    require_once "Models/ClassUser.php";

    $someone = new User();

    $email = "bleep@gmail.com";
    //$someone->setName("angie");

    if($someone->emailExists($email) === false)
    {
        $someone->register($email, "12345");
    }

    else
    {
        die("Email already exists");
    }

    $someone->delete("flow@gmail.com");

    $someone->update("somewhere@gmail.com", "steech@gmail.com", "12345");

