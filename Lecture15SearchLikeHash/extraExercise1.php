<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Connect failed!");
}


$query = $base->query("SELECT * FROM users WHERE username LIKE ('a%')");

$result = $query->fetch_all(MYSQLI_ASSOC);

if($query->num_rows < 1)
{
    die("No results!");
}

foreach($result as $row)
{
    echo $row["username"]. "</br>";
}


