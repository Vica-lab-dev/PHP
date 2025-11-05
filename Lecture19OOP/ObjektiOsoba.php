<?php

    require_once "Osoba.php";

    $Viktor = new Osoba();
    $Viktor->ime = "Viktor";
    $Viktor->prezime = "Maletkovic";
    $Viktor->godinaRodjenja = 1998;
    $Viktor->visina = 187;
    $Viktor->tezina = 82;
    $Viktor->racunajGodine();