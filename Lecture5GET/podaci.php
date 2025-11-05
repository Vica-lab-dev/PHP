<?php

//provera_sigurnosti=on
// ? ako nije cekiran samo "?"

if(isset($_GET["provera_sigurnosti"])){

echo $_GET["provera_sigurnosti"];
}
else{
    echo "Niste  cekirali sigurnost.";
}