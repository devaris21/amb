<?php 
namespace Home;

$title = "AMB | Tous les sinistres enregistrés";

$carplan->fourni("affectation");
$affectation = $carplan->affectations[0];
$affectation->actualise();

$sinistres = SINISTRE::findBy(["vehicule_id = "=> $affectation->vehicule_id]);



?>