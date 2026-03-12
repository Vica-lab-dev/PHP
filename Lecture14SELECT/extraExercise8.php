<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(!$base)
{
    die("Could not connect to database!");
}

if(!isset($_POST["name"]) || !isset($_POST["date"]) || !isset($_POST["location"]))
{
    die("Please fill all the required fields!");
}

$name = $_POST["name"];
$date = $_POST["date"];
$location = $_POST["location"];

if(empty($name) || empty($date) || empty($location))
{
    die("Please fill all the required fields!");
}

$stmt = $base->prepare("INSERT INTO events(event_name, event_date, location) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $name, $date, $location);

if(!$stmt->execute())
{
    die("Could not execute query!");
}

echo "New record created successfully!";