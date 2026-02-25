<?php

$array = [
    "name" => "Viktor",
    "age" => 27,
    "gender" => "Male"
];

foreach ($array as $arr => $value)
{
   if (!empty($value))
   {
       echo $arr. " => ". $value . "</br>";
   }
}