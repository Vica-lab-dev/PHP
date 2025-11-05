<?php
    // 1. Napraviti array koji sadrzi 3 elementa
    // 2. sortirati po abecednom redu
    // 3. Var dumpovati rezultat

    $patike = ["Adidas", "Reebok", "Nike"];

    //Asceding = sort = 1,2,3,4 ili A,B,C

    sort($patike);
    var_dump($patike);

    // Vezba obrisati prvog clana iz array-a

    unset($patike[0]);

    var_dump($patike);

?>