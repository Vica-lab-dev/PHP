<?php

$base = mysqli_connect("localhost", "root", "", "web_Shop");

if(mysqli_connect_errno())
{
    die("Connection failed: " . mysqli_connect_error());
}

$query = $base->query("SELECT * FROM customers WHERE last_name LIKE ('%son%')");

if($query->num_rows < 1)
{
    die("No results found!");
}

$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $row)
{
    echo $row["first_name"]." ".$row["last_name"]."</br>";
}