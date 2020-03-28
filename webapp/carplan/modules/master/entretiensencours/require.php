<?php 
namespace Home;

$carplan->fourni("affectation");
$affectation = $carplan->affectations[0];
$affectation->actualise();

$entretiens = ENTRETIENVEHICULE::findBy(["vehicule_id = "=> $affectation->vehicule_id]);

$title = "AMB | Demandes d'entretien de véhicules";

?>