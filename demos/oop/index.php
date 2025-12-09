<?php
require_once (__DIR__.'/classes/DeliveryMan.php');
require_once (__DIR__.'/classes/Package.php');
$mondialRelay =  new DeliveryMan(1, 'Mondial', 'Relay', 'delivery@mondailrelay.fr', 30);
$laposte = new DeliveryMan(2, 'La', 'Poste', 'contact@laposte.net', 200);
$mondialRelay->packages();
echo '<br>Email de la LaPoste '.$laposte->getEmail().'<br>';
$glodiePackage = new Package('11111', '75019');
$itisPackage = new Package('22222', '91150');

var_dump($mondialRelay, $laposte, $itisPackage, $glodiePackage);

