<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = $base->query("SELECT * FROM books WHERE title LIKE ('%PHP%')");

if($query->num_rows < 1)
{
    die("No results found");
}

$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $row)
{
    echo $row["title"]." ".$row["author"]."</br>";
}