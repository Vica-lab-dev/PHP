<?php

function avgOdd($numbers)
{
    $oddArray = [];

    foreach($numbers as $number)
    {
        if($number % 2 === 1)
        {
            $oddArray[] = $number;
        }
    }

    $avg = array_sum($oddArray) / count($oddArray);

    echo $avg;
}

avgOdd([1,2,3]);