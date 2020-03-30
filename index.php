<?php

require_once 'carsbike.php';

$bike = new Bicycle("red");
$cars = new SimsponsCars("green","essence",5);

var_dump($bike);
var_dump($cars);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>'.'<br>';
echo $cars->start();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
