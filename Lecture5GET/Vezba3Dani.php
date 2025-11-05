<?php
    $dan = strtolower(trim($_GET["day"]));

    switch($dan){
        case "ponedeljak":
            echo "Prvi dan u nedelji";
            break;
        case "utorak":
            echo "Drugi dan u nedelji";
            break;
        case "sreda":
            echo "Treci dan u nedelji";
            break;
        case "cetvrtak":
            echo "Cetvrti dan u nedelji";
            break;
        case "petak":
            echo "Peti dan u nedelji";
            break;
        case "subota":
            echo "Sesti dan u nedelji";
            break;
        case "nedelja":
            echo "Sedmi dan u nedelji";
            break;
        default:
            echo "Niste uneli nijedan dan u nedelji";
    }






?>