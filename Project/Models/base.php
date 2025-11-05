<?php


    $connection = mysqli_connect("localhost", "root", "", "wall");

    if(mysqli_connect_errno())
    {
        die("Database connection failed!");
    }