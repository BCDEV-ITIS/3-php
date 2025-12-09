<?php
require_once(__DIR__.'/interfaces/CRUDInterface.php');
require_once(__DIR__ . '/classes/Entity.php');
require_once (__DIR__.'/classes/DeliverySociety.php');
require_once (__DIR__.'/classes/Parcel.php');
$mondialRelay =  new DeliverySociety(1, 'Mondial Relay', 'Espagne', 'delivery@mondailrelay.fr', new DateTime());
$laposte = new DeliverySociety(2, 'La Poste', 'France', 'contact@laposte.net', new DateTime());
$mondialRelay->packagesCollection();
echo '<br>Email de la LaPoste '.$laposte->getEmail().'<br>';
$glodiePackage = new Parcel('11111', '75019');
$itisPackage = new Parcel('22222', '91150');
var_dump($mondialRelay, $laposte, $itisPackage, $glodiePackage);

