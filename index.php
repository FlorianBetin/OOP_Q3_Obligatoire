<?php

// require_once 'Bicycle.php';
require 'classes.php';

$blueBicycle = new Bicycle('Blue', 2);

$redCar = new Cars('red', 5, "Benzin");

$greenSkate = new Skateboard('green', 0)
?>

<h1> Routes </h1>

<h2> Motorway </h2>

<?php
$autoroute = new MotorWay(4, 130);
echo 'Bikes: ' . $autoroute->addVehicule($blueBicycle) . PHP_EOL;
echo 'Skateboard: ' . $autoroute->addVehicule($greenSkate) . PHP_EOL;
echo 'Cars: ' . $autoroute->addVehicule($redCar) . PHP_EOL;
?>

<h2> Residential way </h2>

<?php
$ruePavillon = new ResidentialWay(2, 50);
echo 'Bikes: ' . $ruePavillon->addVehicule($blueBicycle) . PHP_EOL;
echo 'Cars: ' .$ruePavillon->addVehicule($redCar) . PHP_EOL;
?>

<h2> Pedestrian way </h2>

<?php
$ruePave = new PedestrianWay(1, 10);
echo 'Bikes: ' . $ruePave->addVehicule($blueBicycle) . PHP_EOL;
echo 'Skateboard: ' . $ruePave->addVehicule($greenSkate) . PHP_EOL;
echo 'Cars: ' . $ruePave->addVehicule($redCar) . PHP_EOL;
?>
