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
    $password = password_hash ($_GET['password'], PASSWORD_BCRYPT);

    $result =$connection->query("SELECT * FROM users WHERE email = 'email'");
    $data = $result->fetch_all(MYSQLI_ASSOC);

    if($result->num_rows >= 1)
    {
        die("Users already exists!");
    }

    else
    {
        $email = $connection->real_escape_string($email);
        $password = $connection->real_escape_string($password);

        $connection->query("INSERT INTO users (email, password) VALUES ('$email', '$password')");

        echo "Registration successful!";
    }

    $administrator = "Administrator";
    $editor = "Editor";
    $viewer = "Viewer";

    $administratorPermission = "Create, Edit, Delete";
    $editorPermission = "Edit";
    $viewerPermission = "Read_Only";

    if($email == "vica@gmail.com" || $email == "steech@gmail.com")
    {
        $connection->query("UPDATE users SET role = '$administrator' WHERE email='$email'");
        $connection->query("UPDATE users SET Permission = '$administratorPermission' WHERE email='$email'");
    }

    elseif($email == "bleep@gmail.com" || $email == "nekimejl@gmail.com")
    {
        $connection->query("UPDATE users SET role = '$editor' WHERE email='$email'");
        $connection->query("UPDATE users SET Permission = '$editorPermission' WHERE email='$email'");
    }

    elseif($email)
    {
        $connection->query("UPDATE users SET role = '$viewer' WHERE email='$email'") ;
        $connection->query("UPDATE users SET permission = '$viewerPermission' WHERE email='$email'");
    }






