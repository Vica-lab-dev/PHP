<?php

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
        //die("Pokrenuta sesija!"); Provera
    }

    echo $_SESSION['ime'];
