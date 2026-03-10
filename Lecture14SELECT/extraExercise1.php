<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Database connection failed!");
}



if(!isset($_POST["username"]) || !isset($_POST["email"]) || !isset($_POST["password"]))
{
    die("Missing fields!");
}

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if(empty($username) || empty($email) || empty($password)){
    die("Empty fields!");
}

$query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";

$insert = mysqli_query($base, $query);

if(!$insert)
{
    die("Query failed!");
}

echo "New record created successfully";