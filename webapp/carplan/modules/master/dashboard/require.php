<?php 
namespace Home;


$title = "AMB-Carplan | Tableau de bord";

$carplan->fourni("affectation");
$affectation = $carplan->affectations[0];
$affectation->actualise();

$affectation->vehicule->fourni("equipement_vehicule");

$affectation->fourni("renouvelementaffectation");
$renouv = new RENOUVELEMENTAFFECTATION;
if (count($affectation->renouvelementaffectations) > 0) {
	$renouv = end($affectation->renouvelementaffectations);
}


///////////////////////////////////////////////////////
$carteGrise = $affectation->vehicule->carteGrise();
$assurance = $affectation->vehicule->assurance();
$vidange = $affectation->vehicule->vidange();
$visitetechnique = $affectation->vehicule->visitetechnique();

session("carplan_vehicule_id", $affectation->vehicule->getId());


?>