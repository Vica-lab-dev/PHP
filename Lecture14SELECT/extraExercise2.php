<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(mysqli_connect_errno())
{
    die("Connect failed!");
}

if(!isset($_POST["product_name"]) || !isset($_POST["price"]) || !isset($_POST['category']))
{
    die("Required fields missing!");
}

$product_name = $_POST["product_name"];
$price = $_POST["price"];
$category = $_POST["category"];

if(empty($product_name) || empty($price) || empty($category))
{
    die("Required fields missing!");
}

$query = "INSERT INTO products (product_name, price, category) VALUES ('$product_name', '$price', '$category')";

$result = mysqli_query($base, $query);

if(!$result)
{
    die("Query failed!");
}

echo "New record created successfully";
