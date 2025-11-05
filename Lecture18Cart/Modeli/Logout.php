<?php

    require_once "./Baza.php";

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }

    session_destroy();

    header("Location: ./Proizvodi.php");
