<?php


require 'Truck.php';


$bigTruck = new Truck('vert',3, 'mazout',25);
var_dump($bigTruck);



echo $bigTruck->addLoad(10);
var_dump($bigTruck);
echo $bigTruck->addLoad(10);
echo "<br>";
echo $bigTruck->addLoad(10);
echo "<br>";
echo $bigTruck->isFilled();

$bigTruck2 = new Truck('vert',23, 'electric',505);


echo $bigTruck2->addLoad(100);
echo $bigTruck2->addLoad(125);
echo "<br>";
echo $bigTruck2->addLoad(50);

echo "<br>";
echo $bigTruck2->isFilled();
echo $bigTruck2->forward();
echo '<br> Vitesse du camion : ' . $bigTruck2->getCurrentSpeed() . ' km/h' . '<br>';
echo $bigTruck2->brake();
echo '<br> Vitesse du camion : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bigTruck2->brake();