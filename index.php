<?php

require 'Vehicle.php';
require 'Truck.php';
require 'Car.php';
require 'Highway.php';
require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'Skateboard.php';
require 'Bicycle.php';
require 'Speedometer.php';


$bigTruck = new Truck('vert', 3, 'mazout', 25);
$bigTruck2 = new Truck('vert', 23, 'electric', 505);
$joliVoiture = new Car('blouge', 4,'Mazout');
$mocheVelo = new bicycle ('bleu cacatoes', 1);

$grandeRoute= new MotorWay();
$grandeRoute->addVehicule($joliVoiture);
var_dump($grandeRoute);

$cheminpedestre = new PedestrianWay();
$petiteRoute= new   ResidentialWay();

$bart= new Skateboard('vert',1, 'foot');


$petiteRoute->addVehicule($bigTruck);
$petiteRoute->addVehicule($bart);
var_dump($petiteRoute);

echo $bigTruck->switchOn();
echo "<br>";
echo $bigTruck->switchOff();

echo $joliVoiture->switchOn();

echo $mocheVelo -> switchOn();
echo $mocheVelo->setCurrentSpeed(20);
echo $mocheVelo-> switchOn();
echo "<br>";
echo Speedometer::convertKmToMiles(10);




