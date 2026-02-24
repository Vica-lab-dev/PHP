<?php

    require_once "ClassCar.php";

    class Auto extends Car // Auto ima podklasu Car, Auto je parent od Car
    {
        public $trunkSize;
        public $trunkSpace;
        public $numberOfDoors;
    }
