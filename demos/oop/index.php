<?php
require_once(__DIR__.'/interfaces/CRUDInterface.php');
require_once(__DIR__ . '/classes/Entity.php');
require_once (__DIR__.'/classes/DeliverySociety.php');
require_once (__DIR__.'/classes/Parcel.php');
try {
    $glodiePackage = new Parcel('11111', '75019');
    $itisPackage = new Parcel('22222', '91150');
    $mondialRelay =  new DeliverySociety(1, 'Mondial Relay', 'Espagne', 'delivery@mondailrelay.fr', new DateTime());
    $mondialRelay->add($glodiePackage);
    $mondialRelay->add($itisPackage);
    foreach($mondialRelay->parcelNumbers() as $key => $value) {
        echo 'Colis numéro '.$value.' à la position de livraison '.$key.'<br>';
    }

} catch(Exception $e) {
    echo '<br>Erreur fonction add() de DeliverSociety'.$e->getMessage().'<br>';
} finally {
    echo "S'exécute à la fois peu importe le scénario (try => succès) ou catch(failed)<br>";
}


var_dump($mondialRelay, $itisPackage, $glodiePackage);

