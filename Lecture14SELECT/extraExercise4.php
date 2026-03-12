<?php

$base = mysqli_connect("localhost","root","","web_shop");

if(mysqli_connect_errno())
{
    die("Database connection failed!");
}

if(!isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["email"]))
{
    die("Please enter all fields!");
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];

if(empty($first_name) || empty($last_name) || empty($email))
{
    die("Please enter all fields!");
}

$stmt = $base->prepare("INSERT INTO customers (first_name, last_name, email) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $first_name,  $last_name, $email);

if(!$stmt->execute())
{
    die("Error executing query!");
}

echo "New record created successfully";