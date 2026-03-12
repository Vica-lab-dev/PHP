<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(!$base)
{
    die("Could not connect!");
}

if(!isset($_POST["user_id"]) || !isset($_POST["comments"]) || !isset($_POST["rating"]))
{
    die("Missing data!");
}

$user_id = $_POST["user_id"];
$comments = $_POST["comments"];
$rating = $_POST["rating"];

if(empty($user_id) || empty($comments) || empty($rating))
{
    die("Missing data!");
}

$stmt = $base->prepare("INSERT INTO feedback (user_id, comments, rating) VALUES(?, ?, ?)");
$stmt->bind_param("isi", $user_id, $comments, $rating);

if(!$stmt->execute())
{
    die("Could not execute!");
}

echo "New record created successfully!";