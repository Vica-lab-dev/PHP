<?php

$base = mysqli_connect("localhost","root","","web_shop");

if(mysqli_connect_errno())
{
    die("Database connection failed!");
}

$query = $base->query("SELECT * FROM events WHERE location LIKE ('%hall%')");

if($query->num_rows < 1)
{
    die("No results found!");
}

$results = $query->fetch_all(MYSQLI_ASSOC);

foreach($results as $row)
{
    echo $row["event_name"] . " - " . $row["location"]."</br>";
}

