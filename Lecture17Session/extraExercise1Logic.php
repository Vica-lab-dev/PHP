<?php

if(!isset($_POST['username']) || empty($_POST['username']))
{
    die("Required fields are missing");
}

$username = $_POST['username'];

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

$_SESSION["username"] = $username;

header("location: extraExercise1.php");
