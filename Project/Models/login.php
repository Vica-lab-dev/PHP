<?php

    require_once "base.php";

    if(!isset($_GET['email']) || empty($_GET['email']))
    {
        die("Email is required!");
    }

    if(!isset($_GET['password']) || empty($_GET['password']))
    {
        die("Password is required!");
    }

    $email = $_GET['email'];
    $password = $_GET['password'];

    $result = $connection->query("SELECT * FROM users WHERE email='$email'");

    if($result->num_rows >= 1)
    {
        $users = $result->fetch_assoc();
        $check_password = password_verify($password, $users['password']);

        if($check_password == true)
        {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $email = $connection->real_escape_string($email);
            $password = $connection->real_escape_string($password);
            $_SESSION['email'] = $email;

            echo "Login successful!";
        }



        else
        {
            echo "Wrong password!";
        }
    }

    else
    {
        echo "Email not found!";
    }











