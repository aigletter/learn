<?php

use learning\Car;
use learning\Plane;
use learning\Ship;
use learning\VehicleManager;
use learning\Vehicle;

include 'vendor/autoload.php';

$car = new Car('Toyota', 2018);

//$vehicle = new Vehicle();

$vehicles[] = $car;
$vehicles[] = new Plane('Boing', 2000);
$vehicles[] = new Ship('Avrora', 1914);
$vehicles[] = new \learning\Train();

$manager = new VehicleManager();
foreach ($vehicles as $vehicle) {
    $manager->send($vehicle);
}

//echo \learning\Engine::$country . PHP_EOL;
echo \learning\Engine::sayHello();

//\learning\Engine::$country = 'Germany';

$engine = new \learning\Engine('Something');
$engine->sayName();

//echo Car::NUMBER;