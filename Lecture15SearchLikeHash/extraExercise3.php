<?php

// SELECT YEAR(orders_date), product_name FROM `orders` WHERE YEAR(orders_date) = 2023;

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Connection failed: " . mysqli_connect_error());
}

$query = $base->query("SELECT * FROM orders WHERE YEAR(orders_date) = 2023");

if($query->num_rows < 1)
{
    die("No results!");
}

$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $row)
{
    echo $row["product_name"].", price: ". $row["total_price"] . ", Date: ". $row["orders_date"] . "</br>";
}
