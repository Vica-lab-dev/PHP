<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Connect failed!");
}

$query = $base->query("SELECT * FROM products WHERE price LIKE ('%9%')");

$result = $query->fetch_all(MYSQLI_ASSOC);

if($query->num_rows < 1)
{
    die("No results!");
}

foreach($result as $row)
{
    echo $row["product_name"]." price: ". $row["price"] . "</br>";
}