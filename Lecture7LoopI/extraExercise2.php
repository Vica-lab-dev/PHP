<?php

$grades = [1, 2, 3, 4, 5];

$avg = array_sum($grades) / count($grades);

$count = 0;

foreach ($grades as $grade)
{
    if ($grade > $avg)
    {
        $count++;
    }
}

echo $count;