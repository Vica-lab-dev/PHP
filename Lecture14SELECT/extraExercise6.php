<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(!$base)
{
    die("Connection failed!");
}

if(!isset($_POST["title"]) || !isset($_POST['author']) || !isset($_POST['year']))
{
    die("Missing data!");
}

$title = $_POST["title"];
$author = $_POST["author"];
$year = $_POST["year"];

if(empty($title) || empty($author) || empty($year))
{
    die("Missing data!");
}

$stmt = $base->prepare("INSERT INTO books (title, author, published_year) VALUES(?, ?, ?)");

$stmt->bind_param("ssi", $title, $author, $year);

if(!$stmt->execute())
{
    die("Error executing query!");
}

echo "New record created successfully";