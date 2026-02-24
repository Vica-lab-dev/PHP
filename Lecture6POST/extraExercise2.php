<?php

$number = $_POST["number"];

if(!isset($number))
{
    echo "Number is required!";
}

if($number % 2 === 0)
{
    die ($number." is even!");
}
else
{
    die ($number." is odd!");
}