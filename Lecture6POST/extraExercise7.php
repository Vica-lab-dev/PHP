<?php

$temperature = $_POST["temperature"];

if(!isset($temperature) || empty($temperature))
{
    die("Field is required");
}

if($temperature < 0)
{
    echo "Temperature is under the 0!";
}
elseif($temperature > 0)
{
    echo "Temperature is over the 0!";
}
else
{
    echo "Temperature is 0!";
}