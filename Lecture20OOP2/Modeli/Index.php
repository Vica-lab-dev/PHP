<?php

    require_once "User.php";

    $korisnikVica = new User("vicko@gmail.com", "12345");
    $korisnikVica->save();
    $korisnikAngie = new User("angie@gmail.com", "12345");