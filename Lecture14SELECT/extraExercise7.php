<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(!$base)
{
    die("Error: Could not connect to database!");
}

$query = $base->query("SELECT * FROM classes");

if($query -> num_rows < 1)
{
    die("No classes!");
}

$rows = $query->fetch_all(MYSQLI_ASSOC);

foreach($rows as $row)
{
    if($row["students"] >= 10)
    {
        echo "Gender: " . $row["grade"] . " Students: " . $row["students"] . "<br>";
    }
}