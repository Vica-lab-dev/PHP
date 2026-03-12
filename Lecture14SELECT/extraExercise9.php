<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(!$base)
{
    die("Could not connect to the database!");
}

$sales = $base->query("SELECT * FROM sales WHERE date >= NOW() - INTERVAL 7 day");
$rows = $sales->fetch_all(MYSQLI_ASSOC);

if($sales->num_rows < 1)
{
    die("There are no sales yet!");
}
else {
    foreach ($rows as $row)
    {
        echo "Date: " . $row["date"] . ", Product name: " . $row["product_name"] . ", Total price: " . $row["total_price"] . "</br>";
    }
}
