<?php

    require_once "Models/ClassAuto.php";
    require_once "Models/ClassCar.php";
    require_once "Models/ClassBus.php";
    require_once "Models/ClassAeroplane.php";

    $boing747 = new Aeroplane();
    $boing747->brand = "Boing";
    $boing747->model = "747";
    $boing747->parachute = false;
    $boing747->propulsion = "Jet"; //Mlaznjak

    $bus = new Bus();
    $bus->brand = "Mercedes";
    $bus->numberOfDoors = 2;
    $bus->numberOfSeats = 30;
    $bus->doubleDecker = false; //Nije autobus na dva sprata

    echo $bus->brand." ".$bus->numberOfDoors;

    $audiA4 = new Auto(); //Extends, sada je Auto skup dve klase
    $audiA4->brand = "Audi";
    $audiA4->model = "A4";
    $audiA4->color = "red";
    $audiA4->type = "Automobile";
    $audiA4->weight = 2000;

    echo $audiA4->type;
    echo $audiA4->weight;

    $Yugo55 = new Auto();
    $Yugo55->brand = "Yugo";
    $Yugo55->model = "55";
    $Yugo55->color = "white";

    $bmwX5 = new Auto();
    $bmwX5->brand = "BMW";
    $bmwX5->model = "X5";
    $bmwX5->color = "yellow";