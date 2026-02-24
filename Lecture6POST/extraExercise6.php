<?php

$grade = $_POST["grade"];

if(!isset($grade) || empty($grade))
{
    die("Field is required");
}

switch($grade)
{
    case 1:
        echo "Fail!";
        break;
    case 2:
        echo "Pass!";
        break;
    case 3:
        echo "Good!";
        break;
    case 4:
        echo "Very Good!";
        break;
    case 5:
        echo "Excellent!";
        break;
    default:
        echo "Invalid grade";
}