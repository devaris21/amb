<?php 
namespace Home;
unset_session("vehicules");

$locations = LOCATION::findBy(["etat_id ="=>0]);
$loues = VEHICULE::loues();
$pretes = VEHICULE::pretes();

$title = "GPA | Entrepot d'équipements ";
?>