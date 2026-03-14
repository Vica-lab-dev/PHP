<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Database connection failed: " . mysqli_connect_error());
}

$query = $base->query("SELECT * FROM employees WHERE role LIKE ('%Manager%')");

if($query->num_rows < 1)
{
    die("There are no managers in the database");
}

$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $row)
{
    echo $row["first_name"]." ".$row["last_name"]." ". $row['role'] . "</br>";
}