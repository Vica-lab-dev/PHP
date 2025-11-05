<?php

function palindrome($string){

    $palindrom = strrev($string);

    if($string === $palindrom){
        
        echo $string;
    }
}

palindrome("anavolimilovana");