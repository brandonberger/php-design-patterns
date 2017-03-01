<?php

require_once('core/autoload.php');
spl_autoload_register('Main_Auto_Loader::autoload_main');
/*
require('classes/Automobile.php');
require('classes/AutomobileFactory.php');
require('classes/Delivery.php');
require('classes/DeliverAutomobile.php');
require('classes/Dealership.php');
*/

$car = AutomobileFactory::create('Honda', 'Accord');
$delivery = DeliverAutomobile::route(AutomobileFactory::$location, Dealership::$location);

echo $car->getMakeAndModel();
echo '<br>';
echo $delivery->getRoute();
