<?php

$base = mysqli_connect("localhost", "root", "", "web_shop");

if(!$base)
{
    die("Error connecting to database!");
}

$result = $base->query("SELECT * FROM users");

$rows = $result -> fetch_all(MYSQLI_ASSOC);

if($result -> num_rows > 0)
{

    foreach($rows as $row)
    {
        echo "Username: ".$row['username']." email: ".$row['email']."</br>";
    }
}
else
{
    echo "Table is empty!";
}