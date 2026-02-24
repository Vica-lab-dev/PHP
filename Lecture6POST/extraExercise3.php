<?php

$fruit = $_POST["fruit"];

if(!isset($_POST["fruit"]))
{
    die("Fruit is required!");
}

switch(strtolower($fruit))
{
    case "apple":
        echo "Red!";
        break;
    case "banana":
        echo "Yellow!";
        break;
    case "orange":
        echo "Orange!";
        break;
    case "pear":
        echo "Green!";
        break;
    default:
        echo "Try again!";
}