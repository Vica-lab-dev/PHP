<?php

$grades = [1, 2, 3, 4, 5];

$sum = 0;

foreach ($grades as $grade)
{
    $sum += $grade;
}

$avg = $sum / count($grades);

echo $avg;


