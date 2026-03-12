<?php

$base = mysqli_connect("localhost","root","","web_shop");

if(!$base)
{
    die("Connection failed!");
}

$result = $base->query("SELECT * FROM narudzbine");

if($result -> num_rows < 1)
{
    echo ("No orders yet");
}

$rows = $result->fetch_all(MYSQLI_ASSOC);

foreach($rows as $row)
{
    echo " product_id:".$row["id_proizvoda"].", user_id:".$row["id_korisnika"].", price:".$row["cena"].", amount: ".$row["kolicina"]. "</br>";
}

