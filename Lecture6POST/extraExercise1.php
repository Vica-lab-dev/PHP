<?php

$name = $_POST["name"];

if(!isset($name) || empty($name))
{
    die("Name is required");
}

if(strlen($name) > 3)
{
    echo "Name is longer than 3 characters";
}
else
{
    echo "Name is not longer than 3 characters";
}