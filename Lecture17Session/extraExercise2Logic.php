<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Database connection failed: " . mysqli_connect_error());
}

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

if(!isset($_POST["email"]) || !isset($_POST["password"]))
{
    die("Missing parameters");
}

$email = $_POST["email"];
$password = $_POST["password"];

if(empty($email) || empty($password))
{
    die("Missing parameters");
}

$stmt = $base->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

if(!$row)
{
    die("User not found");
}

if(!password_verify($password, $row["password"]))
{
    die("Wrong password");
}

$_SESSION["user_id"] = $row["id"];

header("Location: extraExercise2.php");
exit();
