<?php
$unos = $_GET["broj"];
$provera = $unos % 2;

if ($provera == 0){
    echo "Broj je paran!";
}

else {
    echo "Broj je neparan!";
}


?>