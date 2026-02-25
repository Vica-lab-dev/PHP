<?php

$words = ["Mark", "Combine", "Enter", "Pulse", "Plus"];

$count = 0;

foreach ($words as $word)
{
    if(strlen($word) >= 5)
    {
        $count++;
    }
}
echo $count;