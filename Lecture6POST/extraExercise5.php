<?php

$isAdult = $_POST["years"];

if(!isset($isAdult) || empty($isAdult))
{
    die("Field is required");
}

if($isAdult >= 18)
{
    echo "Adult!";
}
else
{
    echo "Minor!";
}