<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(!$base)
{
    die("Database connection failed: " . mysqli_connect_error());
}

$query = $base->query("SELECT * FROM feedback WHERE comments LIKE ('%good%')");

if($query -> num_rows < 1)
{
    die("No comments found");
}

$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $row)
{
    echo $row["comments"] . " - Rating: " . $row["rating"] . "</br>";
}

