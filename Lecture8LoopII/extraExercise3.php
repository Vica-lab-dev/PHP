<?php

$prices = [1000, 200, 100, 50, 70, 150];

$sum = 0;

foreach ($prices as $price)
{
    if($price > 100)
    {
        $sum += $price;
    }
}

echo $sum;