<?php

$yearOfBirth = [1998, 2000, 2004, 2010, 2006, 2008];

$currentYear = Date("Y");

foreach ($yearOfBirth as $year)
{
    if($currentYear - $year >= 18)
    {
        echo $year."</br>";
    }
}