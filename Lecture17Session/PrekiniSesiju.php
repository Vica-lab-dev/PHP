<?php

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
        //die("Pokrenuta sesija!"); Provera
    }

    session_destroy();

     header("location: index.php");