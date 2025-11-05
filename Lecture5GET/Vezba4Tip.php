<?php


    $text = $_GET["text"];

    if(is_float($text)){
        echo "$text je float.";
    }
    
    else if (is_numeric($text)){
        echo "$text je broj.";
    }

    else if (is_string($text)){
        echo "$text je string.";
    }

    else if (is_bool($text)){
        echo "$text je boolean";
    }

    else{
        echo "Nevalidan unos.";
    }


