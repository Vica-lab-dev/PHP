<?php

$base = mysqli_connect("localhost","root","","web_Shop");

if(mysqli_connect_errno())
{
    die("Database connection failed: ".mysqli_connect_error());
}

$query = $base->query("SELECT * FROM classes WHERE subject LIKE ('%math%')");

if($query->num_rows < 1)
{
    die("No results found");
}

$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $row)
{
    echo $row["grade"]." ". $row["subject"]."</br>";
}