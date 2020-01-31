<?php 
namespace Home;


$encours = MISSION::findBy(["etat_id = "=>0]);
$autres = MISSION::findBy(["etat_id != "=>0]);

$title = "AMB | Tous votre Parc Auto ";
?>