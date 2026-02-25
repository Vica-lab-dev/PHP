<?php

$numbers = [1, 5, 8, 19, -1, -19, 100, 2];

$sum = 0;

foreach($numbers as $number)
{
    if($number > 0)
    {
        $sum += $number;
    }
}

echo $sum;