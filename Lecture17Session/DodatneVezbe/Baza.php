<?php

    $baza = mysqli_connect("localhost", "root", "", "web_shop");

    if(mysqli_connect_errno())
    {
        die("Imamo problem sa povezivanjem u bazu podataka!");
    }