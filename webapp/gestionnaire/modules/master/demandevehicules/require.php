<?php 
namespace Home;


$demandes = DEMANDEVEHICULE::findBy([ "etat_id ="=>0]);
$autres = DEMANDEVEHICULE::findBy([ "etat_id !="=>0]);

$title = "GPA | Toutes les demandes de véhicules !";
?>