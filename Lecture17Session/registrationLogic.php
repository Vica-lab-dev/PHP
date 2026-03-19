<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Connect failed: %s\n". mysqli_connect_error());
}

if(!isset($_POST["username"]) || !isset($_POST["email"]) || !isset($_POST["password"]))
{
    die("Missing parameters");
}

$username = $_POST["username"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);

if(empty($username) || empty($email) || empty($password))
{
    die("Missing parameters");
}

$stmt = $base->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

if(!$stmt->execute())
{
    die("Error executing query");
}

echo "New record created successfully";