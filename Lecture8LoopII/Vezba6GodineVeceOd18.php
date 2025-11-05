<?php

$godiste = [
    1998, 2010, 1997, 2003, 2008, 2015, 1993
];

$trenutnaGodina = date("Y");

foreach($godiste as $godina){
    $brojGodina = $trenutnaGodina - $godina;
    if($brojGodina >= 18){
        echo $brojGodina;
    }
}