<?php

    require_once "Models/ClassAnimal.php";
    require_once "Models/ClassLandAnimal.php";
    require_once "Models/ClassAquaticAnimal.php";
    require_once "Models/ClassDog.php";
    require_once "Models/ClassFish.php";
    require_once "Models/ClassJellyfish.php";
    require_once "Models/ClassHen.php";

    $landAnimal = new LandAnimal();
    $landAnimal->numberOfFinger = 5;
    $landAnimal->sex = "male";


    $aquaticAnimal = new AquaticAnimal();
    $aquaticAnimal->breathing = "lungs";

    $stafford = new Dog();
    $stafford->fur = "black/white";
    $stafford->sex = "female";
    $stafford->numberOfFinger = 5;

    echo $stafford->fur. " " .$stafford->sex." ".$stafford->numberOfFinger. "<br>";

    $hen = new Hen();
    $hen->numberOfFinger = 3;
    $hen->sex = "male";

    echo $hen->numberOfFinger. " " .$hen->sex. "<br>";

    $shark = new Fish();
    $shark->sex = "male";
    $shark->gills = true;

    echo $shark->sex. " ". $shark->gills. "<br>";

    $Jellyfish = new Jellyfish();
    $Jellyfish->breathing = "diffusion";
    $Jellyfish->sex = "female";

    echo $Jellyfish->breathing. " " .$Jellyfish->sex;
