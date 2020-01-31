<?php 
namespace Home;

$demandes = DEMANDEENTRETIEN::encours();
$autres = DEMANDEENTRETIEN::findBy(["etat_id !="=>0]);
$affectations = AFFECTATION::findBy();

$title = "AMB | Toutes les affectations de véhicules !";
?>